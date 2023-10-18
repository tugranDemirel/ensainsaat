@extends('admin.layouts.app')

@section('title',  'Servis-Hizmet Ekle')
@section('styles')
    <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
@endsection
@section('content')


    <div class="page-body">
        @section('page_title', isset($service) ? 'Servis Düzenle' : 'Servis Ekle')
        <div class="clearfix">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#basic_info" role="tab" data-toggle="tab">Genel Bilgiler</a></li>
                <li role="presentation"><a href="#detail_info" role="tab" data-toggle="tab">Servis Özelliği</a></li>
                <li role="presentation"><a href="#meta_data" role="tab" data-toggle="tab">Meta Data</a></li>
                <li role="presentation"><a href="#product_images" role="tab" data-toggle="tab">Servis Resmi</a></li>
            </ul>
            <form action="{{ route('admin.service.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="tab-content">
                <!-- Basic Info -->
                <div role="tabpanel" class="tab-pane fade in active" id="basic_info">
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Servis Adı</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" />
                                </div>
                                <div class="col-sm-6">
                                    <label>Servis Kısa Açıklaması</label>
                                    <input type="text" name="short_description" class="form-control @error('short_description') is-invalid @enderror" value="{{ old('short_description') }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <input type="checkbox" name="is_active" id="is_active"
                                         @if(isset($service) && $service->is_active == 1)
                                             checked
                                         @endif
                                    />
                                    <label for="is_active">Aktiflik Durumu</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="checkbox" name="is_home" id="is_home"
                                         @if(isset($service) && $service->is_home == 1)
                                             checked
                                         @endif
                                    />
                                    <label for="is_home">Anasayfada Gösterme Durumu</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="checkbox" name="is_featured" id="is_featured"
                                        @if(isset($service) && $service->is_featured == 1)
                                            checked
                                        @endif
                                    />
                                    <label for="is_featured">Öne Çıkarma Durumu</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Servis Uzun Açıklaması</label>
                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror editor1" rows="5">{{ old('description') }}</textarea>
                        </div>
                </div>
                <!-- #END# Basic Info -->
                <!-- Detail Info -->
                <div role="tabpanel" class="tab-pane fade attributes" id="detail_info">
                    <button id="addAttribute" class="btn btn-success btn-sm" type="button"><i class="fa fa-sellsy m-r-5"></i>Özellik Ekle</button>
                    <div class="form-group">
                        <div class="row clearfix" >
                            <div class="col-sm-6">
                                <label>Özellik Adı</label>
                                <input type="text" name="attributes[]" value="{{ old('attributes') }}" class="form-control @error('attribute') is-invalid @enderror" />
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-danger btn-sm remove-attribute" style="margin-top: 25px;"><i class="fa fa-recycle m-r-5"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- #END# Detail Info -->
                <!-- Meta Data -->
                <div role="tabpanel" class="tab-pane fade" id="meta_data">
                        <div class="form-group">
                            <label>Meta Title</label>
                            <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title') }}"/>
                        </div>
                        <div class="form-group">
                            <label>Meta Keywords</label>
                            <input type="text" class="form-control" name="meta_keywords" value="{{ old('meta_keywords') }}"/>
                        </div>
                        <div class="form-group">
                            <label>Meta Descriptions</label>
                            <textarea rows="6" class="form-control no-resize" name="meta_description">{{ old('meta_description') }}</textarea>
                        </div>
                </div>
                <!-- #END# Meta Data -->
                <!-- Product Images -->
                <div role="tabpanel" class="tab-pane fade" id="product_images">
                    <div class="form-group">
                        <label>Görsel Seçiniz</label>
                        <input type="file" class="form-control" name="image"/>
                    </div>
                    <div class="form-group">
                        <label>İcon Seçiniz</label>
                        <input type="text" class="form-control" name="icon" value="{{ old('icon') }}"/>
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

    <script>
        let attribute = document.getElementById('addAttribute')
        attribute.addEventListener('click', function (){
            event.preventDefault();
                var inputHtml = '<div class="form-group">' +
                    '<div class="row clearfix">' +
                    '<div class="col-sm-6">' +
                    '<label>Servis Adı</label>' +
                    '<input type="text" name="attributes[]" value="{{ old('attributes') }}" class="form-control @error('attributes') is-invalid @enderror" />' +
                    '</div>' +
                    '<div class="col-sm-6">' +
                    '<button class="btn btn-danger btn-sm remove-attribute" style="margin-top: 25px;"><i class="fa fa-recycle m-r-5"></i></button>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
                $('.attributes').append(inputHtml);

        })
        $(document).on('click', '.remove-attribute', function (){
            let removeAttribute = document.querySelectorAll('.remove-attribute')
            if(removeAttribute.length > 1){
                $(this).parent().parent().parent().remove();
            }else
            {
                alert('En az 1 özellik olmalıdır.')
            }
        })
    </script>

@endsection
