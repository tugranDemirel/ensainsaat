<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\SettingStoreRequest;
use App\Http\Requests\Setting\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    private $_path = 'site/';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        return view('admin.setting.create-edit', compact('setting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SettingStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('logo')) {
            $data['logo'] = self::uploadImage($request->file('logo'), $this->_path);
        }
        if ($request->hasFile('favicon')) {
            $data['favicon'] = self::uploadImage($request->file('favicon'), $this->_path);
        }
        $create = Setting::create($data);
        if ($create) {
            return redirect()->route('admin.setting.index')->with('success', 'Ayarlar başarıyla eklendi.');
        } else {
            return redirect()->route('admin.setting.index')->with('error', 'Ayarlar eklenirken bir hata oluştu.');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SettingUpdateRequest $request, Setting $setting)
    {
        $data = $request->validated();
        if ($request->hasFile('logo')) {
            $data['logo'] = self::uploadImage($request->file('logo'), $this->_path, $setting->logo);
        }
        if ($request->hasFile('favicon')) {
            $data['favicon'] = self::uploadImage($request->file('favicon'), $this->_path, $setting->favicon);
        }
        $update = $setting->update($data);
        if ($update) {
            return redirect()->route('admin.setting.index')->with('success', 'Ayarlar başarıyla güncellendi.');
        } else {
            return redirect()->route('admin.setting.index')->with('error', 'Ayarlar güncellenirken bir hata oluştu.');
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

}
