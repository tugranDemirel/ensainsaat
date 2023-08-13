<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Models\ServiceAttribute;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    private $_path = 'service/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with(['attributes'])->orderByDesc('updated_at')->get();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $data = $request->validated();
        $attributes = isset($data['attributes']) ? $data['attributes'] : [];
        if ($data['attributes'])
            unset($data['attributes']);

        $data['is_home'] = isset($data['is_home']) ? 1 : 0;
        $data['is_featured'] = isset($data['is_featured']) ? 1 : 0;
        $data['is_active'] = isset($data['is_active']) ? 1 : 0;
        $data['slug'] = Str::slug($data['name'], '-');
        if (isset($data['image'])) {
            $data['image'] = self::uploadImage($data['image'], $this->_path);
        }
            $data['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $service = Service::create($data);
        if ($service)
        {
            foreach ($attributes as $attribute)
            {
                $create =ServiceAttribute::create([
                    'service_id' => $service->id,
                    'attribute' => $attribute,
                ]);
            }
            if ($create) {
            return redirect()->route('admin.service.index')->with('success', 'Service created successfully');
            } else {
                return redirect()->route('admin.service.index')->with('error', 'Service creation failed');
            }
        }
        else
        {
            return redirect()->route('admin.service.index')->with('error', 'Service creation failed');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $service->load(['attributes']);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        $attributes = isset($data['attributes']) ? $data['attributes'] : [];
        if ($data['attributes'])
            unset($data['attributes']);

        $data['is_home'] = isset($data['is_home']) ? 1 : 0;
        $data['is_featured'] = isset($data['is_featured']) ? 1 : 0;
        $data['is_active'] = isset($data['is_active']) ? 1 : 0;
        $data['slug'] = Str::slug($data['name'], '-').'-'.Carbon::now()->timestamp;
        if (isset($data['image'])) {
            $data['image'] = self::uploadImage($data['image'], $this->_path);
        }
        $data['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $update = $service->update($data);
        if ($update)
        {
            $service->attributes()->delete();
            foreach ($attributes as $attribute)
            {
                $create =ServiceAttribute::create([
                    'service_id' => $service->id,
                    'attribute' => $attribute,
                ]);
            }
            if ($create) {
                return redirect()->route('admin.service.index')->with('success', 'Service created successfully');
            } else {
                return redirect()->route('admin.service.index')->with('error', 'Service creation failed');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {

            if ($service->delete()) {
                self::deleteImage($service->image);
                return redirect()->route('admin.service.index')->with('success', 'Service deleted successfully');
            } else {
                return redirect()->route('admin.service.index')->with('error', 'Service deletion failed');
            }
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
        $imageName = time() . '.' . $imageext;
        $image->move(public_path('images/'.$path), $imageName);
        return 'images/'.$path . $imageName;
    }

    public static function deleteImage($image)
    {
        if (file_exists(public_path($image))) {
            unlink(public_path($image));
        }
    }
}
