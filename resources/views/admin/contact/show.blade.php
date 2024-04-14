@extends('admin.layouts.app')
@section('title',  isset($client) ? 'Çalışma Markalarımız Düzenle' : 'Yeni Çalışma Markalarımız Ekle')
@section('content')
    <div class="page-body">
        @section('page_title', 'İletişim Mesajı Detay')
        <div class="clearfix">
            <div class="form-group">
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <label>Gönderim Tarihi</label>
                        <input class="form-control form-control-plaintext" readonly value="{{ $contact?->created_at ?? '-' }}" />
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <label>Ad Soyad</label>
                        <input class="form-control form-control-plaintext" readonly value="{{ $contact?->name ?? '-' }}" />
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <label>E-Posta</label>
                        <input class="form-control form-control-plaintext" readonly value="{{ $contact?->email ?? '-' }}" />
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <label>Telefon Numarası</label>
                        <input class="form-control form-control-plaintext" readonly value="{{ $contact?->phone ?? '-' }}" />
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <label>Konu</label>
                        <textarea name="" class="form-control" readonly id="" cols="30" rows="10">{{ $contact?->subject }}</textarea>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <label>Mesaj</label>
                        <textarea name="" class="form-control" readonly id="" cols="30" rows="10">{{ $contact?->message }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
