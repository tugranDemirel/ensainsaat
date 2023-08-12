<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('admin.account.index', compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
                'email' => 'required|email|unique:users,email,'.$user->id,
                'name' => 'required|string|min:3|max:255',
                'password' => 'nullable|string|min:6|max:255',
            ]);

        if($request->password){
            $data['password'] = bcrypt($request->password);
        }

        $update = $user->update($data);

        if($update){
            return redirect()->route('admin.account.index')->with('success', 'Hesap ayarları güncellendi.');
        }else{
            return redirect()->route('admin.account.index')->with('error', 'Hesap ayarları güncellenemedi.');
        }

    }

}
