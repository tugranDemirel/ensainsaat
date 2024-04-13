<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ClientStoreRequest;
use App\Http\Requests\Client\ClientUpdateRequest;
use App\Models\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    private $_path = 'client_sponsor/';

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        /** @var Client $clients */
        $clients = Client::query()
            ->paginate(20);

        return view('admin.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        return view('admin.client.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(ClientStoreRequest $request)
    {
        $attributes = collect($request->validated());

        if ($request->hasFile('image')) {
            $attributes->put('image', self::uploadImage($attributes->get('image'), $this->_path));
        }

        $create = Client::query()
            ->create($attributes->toArray());

        if ($create)
            return redirect()->route('admin.client.index')->with('success', 'Sponsor ve Kullanıcı başarıyla eklendi.');
        else
            return redirect()->route('admin.client.index')->with('error', 'Sponsor ve Kullanıcı eklenirken bir hata oluştu.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(Client $client)
    {
        return view('admin.client.create-edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(ClientUpdateRequest $request, Client $client)
    {
        $attributes = collect($request->validated());

        if ($request->hasFile('image')) {
            $attributes->put('image', self::uploadImage($attributes->get('image'), $this->_path, $client->image));
        }

        $update = $client->update($attributes->toArray());

        if ($update)
            return redirect()->route('admin.client.index')->with('success', 'Sponsor ve Kullanıcı başarıyla güncellendi.');
        else
            return redirect()->route('admin.client.index')->with('error', 'Sponsor ve Kullanıcı güncellenirken bir hata oluştu.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(Client $client): JsonResponse
    {
        self::deleteImage($client->image);
        $delete = $client->delete();

        if ($delete) {
            return response()->json([
                'status' => true,
                'message' => 'Başarılı bir şekilde silme işlemi gerçekleştirildi.'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Silme işlemi sırasında bir hata ile karşılaşıldı.'
            ]);
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
        $imageName = Str::uuid() . '.' . $imageext;
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
