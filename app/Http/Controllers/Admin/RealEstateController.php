<?php

namespace App\Http\Controllers\Admin;

use App\Enum\RealEstate\RealEstateIsActiveEnum;
use App\Enum\RealEstate\RealEstatePurposeEnum;
use App\Enum\RealEstate\RealEstateStatusEnum;
use App\Enum\RealEstate\RealEstateTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\RealEstateStoreRequest;
use App\Models\RealEstate;
use App\Models\RealEstateAttribute;
use App\Models\RealEstateMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RealEstateController extends Controller
{
    private $_path = 'real-estate/';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $realEstates = RealEstate::with([
            'realEstateMedias', 'realEstateAttribute'
            ])->get();
        return view('admin.real-estate.index', compact('realEstates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.real-estate.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RealEstateStoreRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['title']).now()->timestamp;
        $data['type'] = $this->typeControl($data['type']);
        $data['status'] = $this->statusControl($data['status']);
        $data['purpose'] = $this->purposeControl($data['purpose']);
        $data['is_active'] = $this->isActiveControl($data['is_active']);

        $attributes = isset($data['attributes']) ? $data['attributes'] : null;
        if ($data['attributes'] || is_null($data['attributes']))
            unset($data['attributes']);

        $images =  $data['images'] = isset($data['images']) ? $data['images'] : null;
        if ($data['images'] || is_null($data['images']))
            unset($data['images']);

        if ($data['image'])
            $data['image'] = self::uploadImage($data['image'], $this->_path);
        $realEstate = RealEstate::create($data);

        if ($realEstate)
        {
            if ($attributes && !is_null($attributes))
            {
                    $create = RealEstateAttribute::create([
                        'real_estate_id' => $realEstate->id,
                        'price' => $attributes['price'],
                        'area' => $attributes['area'],
                        'bedrooms' => $attributes['bedrooms'],
                        'bathrooms' => $attributes['bathrooms'],
                        'garages' => $attributes['garages'],
                        'year_built' => $attributes['year_built'],

                    ]);
                    if (!$create){
                        self::deleteImage($data['image'], $this->_path);
                        $realEstate->delete();
                        return redirect()->route('admin.realestate.index')->with('error', 'Emlak eklenirken bir hata oluştu.');
                    }
            }
            if ($images && !is_null($images))
            {
                foreach ($images as $image)
                {
                    $create = RealEstateMedia::create([
                        'real_estate_id' => $realEstate->id,
                        'uuid' => Str::uuid(),
                        'images' => self::uploadImage($image, $this->_path)
                    ]);
                    if (!$create){
                        self::deleteImage($data['image'], $this->_path);
                        $realEstate->delete();
                        return redirect()->route('admin.realestate.index')->with('error', 'Emlak eklenirken bir hata oluştu.');
                    }
                }
            }
        }
        if ($create)
            return redirect()->route('admin.realestate.index')->with('success', 'Emlak başarıyla eklendi.');
        else
            return redirect()->route('admin.realestate.index')->with('error', 'Emlak eklenirken bir hata oluştu.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RealEstate $realestate)
    {
        $realEstate = $realestate->load([
            'realEstateMedias', 'realEstateAttribute'
        ]);
        dd($realEstate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function uploadImage($image, $path, $oldImage = null)
    {
        if ($oldImage) {
            self::deleteImage($oldImage);
        }
        if (!file_exists(public_path('images/'.$path))) {
            mkdir(public_path('images/'.$path), 0777, true);
        }
        $imageext = $image->extension();
        $imageName = Str::uuid() . '.' . $imageext;
        $image->move(public_path('images/'.$path), $imageName);
        return 'images/'.$path . $imageName;
    }

    public static function deleteImage($image)
    {
        if (file_exists(public_path($image))) {
            unlink(public_path($image));
        }
    }

    /**
     * @param $type
     * @return int
     */
    private function typeControl($type)
    {
        switch ($type){
            case 1:
                return RealEstateTypeEnum::TYPE_APARTMENT;
                break;
            case 2:
                return RealEstateTypeEnum::TYPE_VILLA;
                break;
            case 3:
                return RealEstateTypeEnum::TYPE_RESIDENCE;
                break;
            case 4:
                return RealEstateTypeEnum::TYPE_DUBLEX;
                break;
            case 5:
                return RealEstateTypeEnum::TYPE_PENTHOUSE;
                break;
            case 6:
                return RealEstateTypeEnum::TYPE_STUDIO;
                break;
            default:
                return RealEstateTypeEnum::TYPE_HOUSE;
                break;
        }
    }

    /**
     * @param $status
     * @return int
     */
    private function statusControl($status)
    {
        switch ($status){
            case 1:
                return RealEstateStatusEnum::STATUS_SOLD;
                break;
            case 2:
                return RealEstateStatusEnum::STATUS_FOR_SALE;
                break;
            default:
                return RealEstateStatusEnum::STATUS_FOR_RENT;
                break;

        }
    }

    /**
     * @param $purpose
     * @return int
     */
    private function purposeControl($purpose)
    {
        switch ($purpose){
            case 1:
                return RealEstatePurposeEnum::PURPOSE_RENT;
                break;
            default:
                return RealEstatePurposeEnum::PURPOSE_SALE;
                break;

        }
    }

    /**
     * @param $isActive
     * @return int
     */
    private function isActiveControl($isActive)
    {
        switch ($isActive){
            case 0:
                return RealEstateIsActiveEnum::IS_PASSIVE;
                break;
            default:
                return RealEstateIsActiveEnum::IS_ACTIVE;
                break;

        }
    }
}
