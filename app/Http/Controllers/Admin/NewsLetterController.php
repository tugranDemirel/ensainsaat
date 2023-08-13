<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsLetterRequest;
use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsLetterController extends Controller
{
    private $_path = 'newsletter/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletters = NewsLetter::orderByDesc('updated_at')->get();
        return view('admin.newsletter.index', compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newsletter.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsLetterRequest $request)
    {
        $data = $request->validated();
        $data['is_active'] = true;
        $data['slug'] = Str::slug($data['title']);
        if (isset($data['image'])) {
            $data['image'] = self::uploadImage($data['image'], $this->_path);
        }
        $create = NewsLetter::create($data);
        if ($create)
            return redirect()->route('admin.newsletter.index')->with('success', 'Haber bülteni başarıyla oluşturuldu.');
        else
            return redirect()->route('admin.newsletter.index')->with('error', 'Haber bülteni oluşturulurken bir hata oluştu. Lütfen tekrar deneyiniz.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsLetter $newsletter)
    {
        return view('admin.newsletter.create-edit', compact('newsletter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsLetter $newsLetter)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsLetter $newsletter)
    {
        $delete = $newsletter->delete();
        if ($delete)
        {
            self::deleteImage($newsletter->image);
            return redirect()->route('admin.newsletter.index')->with('success', 'Haber bülteni başarıyla silindi.');
        }
        else
            return redirect()->route('admin.newsletter.index')->with('error', 'Haber bülteni silinirken bir hata oluştu. Lütfen tekrar deneyiniz.');
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
