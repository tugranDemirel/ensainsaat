@extends('admin.layouts.app')
@section('title',  isset($client) ? 'Çalışma Markalarımız Düzenle' : 'Yeni Çalışma Markalarımız Ekle')
@section('content')
    <div class="page-body">
        @section('page_title', isset($client) ? 'Çalışma Markalarımız Düzenle' : 'Yeni Çalışma Markalarımız Ekle')
        <div class="clearfix">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#basic_info" role="tab" data-toggle="tab">Çalışma Markalarımız</a></li>
            </ul>
            <form action="{{ isset($client) ? route('admin.client.update', ['client' => $client]) : route('admin.client.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @isset($client)
                    @method('PUT')
                @endisset
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="basic_info">
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Sponsor ve Kullanıcı Adı</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ isset($client) ? $client->name : old('name') }}" />
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Resim</label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"/>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                @isset($client)
                                    <div class="col-sm-6">
                                        <img src="{{ asset($client->image) }}" alt="" width="100">
                                    </div>
                                @endisset
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <label>Sponsor ve Kullanıcı Site Linki</label>
                                <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" value="{{ isset($client) ? $client->url : old('url') }}" />
                                @error('url')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    <!-- #END# Product Images -->
                </div>
                </div>
                <div class="m-t-10 m-b-20 pull-right">
                    <button class="btn btn-sm btn-success"><i class="fa fa-save m-r-5"></i>Kaydet</button>
                </div>
            </form>
        </div>
    </div>
@endsection
