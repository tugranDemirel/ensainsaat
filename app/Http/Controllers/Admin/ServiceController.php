<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Models\ServiceAttribute;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    private $_path = 'service/';

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $services = Service::with(['attributes'])->orderByDesc('updated_at')->get();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.service.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function store(ServiceRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['is_home'] = isset($data['is_home']) ? 1 : 0;
        $data['is_featured'] = isset($data['is_featured']) ? 1 : 0;
        $data['is_active'] = isset($data['is_active']) ? 1 : 0;
        $data['slug'] = Str::slug($data['name'], '-');

        if (isset($data['image'])) {
            $data['image'] = self::uploadImage($data['image'], $this->_path);
        }

        $data['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $service = Service::create($data);

        if ($service) {
            return redirect()->route('admin.service.index')->with('success', 'Service created successfully');
        } else {
            return redirect()->route('admin.service.index')->with('error', 'Service creation failed');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(Service $service): View|Factory|Application
    {
        $service->load(['attributes']);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(ServiceRequest $request, Service $service): RedirectResponse
    {
        $data = $request->validated();

        $data['is_home'] = isset($data['is_home']) ? 1 : 0;
        $data['is_featured'] = isset($data['is_featured']) ? 1 : 0;
        $data['is_active'] = isset($data['is_active']) ? 1 : 0;
        $data['slug'] = Str::slug($data['name'], '-');

        if (isset($data['image'])) {
            $data['image'] = self::uploadImage($data['image'], $this->_path);
        }

        $data['icon'] = isset($data['icon']) ? $data['icon'] : null;

        $update = $service->update($data);

        if ($update) {
            return redirect()->route('admin.service.index')->with('success', 'Service created successfully');
        } else {
            return redirect()->route('admin.service.index')->with('error', 'Service creation failed');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(Service $service): RedirectResponse
    {

        if ($service->delete()) {
            self::deleteImage($service->image);
            return redirect()->route('admin.service.index')->with('success', 'Service deleted successfully');
        } else {
            return redirect()->route('admin.service.index')->with('error', 'Service deletion failed');
        }
    }

    public static function uploadImage($image, $path, $oldImage = null): string
    {
        if ($oldImage) {
            self::deleteImage($oldImage);
        }
        if (!file_exists(public_path('images/' . $path))) {
            mkdir(public_path('images/' . $path), 0777, true);
        }
        $imageext = $image->extension();
        $imageName = time() . '.' . $imageext;
        $image->move(public_path('images/' . $path), $imageName);
        return 'images/' . $path . $imageName;
    }

    public static function deleteImage($image): void
    {
        if (file_exists(public_path($image))) {
            unlink(public_path($image));
        }
    }
}
