@extends('admin.layouts.app')
@section('title',  isset($setting) ? 'Ayarları Düzenle' : 'Yeni Ayar Ekle')
@section('styles')
@endsection
@section('content')

    <div class="page-body">
        @section('page_title', isset($setting) ? 'Ayarları Düzenle' : 'Yeni Ayar Ekle')
        <div class="clearfix">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#basic_info" role="tab" data-toggle="tab">Genel Bilgiler</a></li>
                <li role="presentation"><a href="#detail_info" role="tab" data-toggle="tab">Sosyal Medya</a></li>
                <li role="presentation"><a href="#meta_data" role="tab" data-toggle="tab">Meta Data</a></li>
                <li role="presentation"><a href="#product_images" role="tab" data-toggle="tab">Site Resim</a></li>
            </ul>
            <form action="{{ isset($setting) ? route('admin.setting.update', ['setting' => $setting]) : route('admin.setting.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @isset($setting)
                    @method('PUT')
                @endisset
                <div class="tab-content">
                    <!-- Basic Info -->
                    <div role="tabpanel" class="tab-pane fade in active" id="basic_info">
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Site Adı</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ isset($setting) ? $setting->title : old('title') }}" />
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ isset($setting) ? $setting->email : old('email') }}" />
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Telefon Numarası</label>
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ isset($setting) ? $setting->phone : old('phone') }}" />
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Fax Numarası</label>
                                    <input type="text" name="fax" class="form-control @error('fax') is-invalid @enderror" value="{{ isset($setting) ? $setting->fax : old('fax') }}" />
                                    @error('fax')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Adres</label>
                                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ isset($setting) ? $setting->address : old('address') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>HEADER YAZISI</label>
                                    <input type="text" name="header_text" class="form-control @error('header_text') is-invalid @enderror" value="{{ isset($setting) ? $setting->header_text : old('header_text') }}" />
                                    @error('header_text')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>FOOTER YAZISI</label>
                                    <input type="text" name="footer_text" class="form-control @error('footer_text') is-invalid @enderror" value="{{  isset($setting) ? $setting->footer_text : old('footer_text') }}" />
                                    @error('footer_text')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Basic Info -->
                    <!-- Detail Info -->
                    <div role="tabpanel" class="tab-pane fade attributes" id="detail_info">
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Facebook Url</label>
                                    <input type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror" value="{{ isset($setting) ? $setting->facebook : old('facebook') }}" />
                                    @error('facebook')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Twitter</label>
                                    <input type="text" name="twitter" class="form-control @error('twitter') is-invalid @enderror" value="{{ isset($setting) ? $setting->twitter : old('twitter') }}" />
                                    @error('twitter')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Instagram</label>
                                    <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{ isset($setting) ? $setting->instagram : old('instagram') }}" />
                                    @error('instagram')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Youtube</label>
                                    <input type="text" name="youtube" class="form-control @error('youtube') is-invalid @enderror" value="{{ isset($setting) ? $setting->youtube : old('youtube') }}" />
                                    @error('youtube')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Linkedin</label>
                                    <input type="text" name="linkedin" class="form-control @error('linkedin') is-invalid @enderror" value="{{ isset($setting) ? $setting->linkedin : old('linkedin') }}" />
                                    @error('linkedin')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Detail Info -->
                    <!-- Meta Data -->
                    <div role="tabpanel" class="tab-pane fade" id="meta_data">
                        <div class="form-group">
                            <label>Meta Keywords</label>
                            <input type="text" class="form-control" name="meta_keywords" value="{{ isset($setting) ? $setting->meta_keywords : old('meta_keywords') }}"/>
                            @error('meta_keywords')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Meta Descriptions</label>
                            <textarea rows="6" class="form-control no-resize" name="meta_description">{{ isset($setting) ? $setting->meta_description : old('meta_description') }}</textarea>
                            @error('meta_description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- #END# Meta Data -->
                    <!-- Product Images -->
                    <div role="tabpanel" class="tab-pane fade" id="product_images">
                        <div class="from-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>LOGO</label>
                                    <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror"/>
                                    @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                @isset($setting)
                                <div class="col-sm-6">
                                    <img src="{{ asset($setting->logo) }}" alt="" width="100">
                                </div>
                                @endisset
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Favicon</label>
                                    <input type="file" name="favicon" class="form-control @error('favicon') is-invalid @enderror"/>
                                    @error('favicon')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                @isset($setting)
                                    <div class="col-sm-6">
                                        <img src="{{ asset($setting->favicon) }}" alt="" width="100">
                                    </div>
                                @endisset
                            </div>
                        </div>
                    </div>
                    <!-- #END# Product Images -->
                </div>
                <div class="m-t-10 m-b-20 pull-right">
                    <button class="btn btn-sm btn-success"><i class="fa fa-save m-r-5"></i>Kaydet</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Footer -->
@endsection
@section('scripts')
    <script>
        let ck = document.querySelectorAll('.editor1');
        for (let i = 0; i < ck.length; i++) {
            CKEDITOR.replace(ck[i], {
                height: 500,
                filebrowserUploadUrl: "",
                filebrowserUploadMethod: 'form'
            });
        }
    </script>
    <script src="{{ asset('assets/admin/js/pages/ecommerce/product-edit.js') }}"></script>
    <!-- Bootstrap TagsInput Js -->
    <script src="{{ asset('assets/admin/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>


@endsection
