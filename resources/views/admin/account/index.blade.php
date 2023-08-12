@extends('admin.layouts.app')

@section('content')

        <div class="page-body clearfix">
            @section('page_title', 'Hesap Ayarları')
            <div class="row clearfix">
                <!-- Horizontal Layout  -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Hesap Ayarları</div>
                        <div class="panel-body p-b-25">
                            <form class="form-horizontal" action="{{ route('admin.account.update', ['user' => $user]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Ad - Soyad </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mail Adresi</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Şifre</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 p-l-15">
                                        <button type="submit" class="btn btn-sm btn-success">Güncelle</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- #END# Horizontal Layout  -->
            </div>

        </div>

    <!-- Footer -->
@endsection
