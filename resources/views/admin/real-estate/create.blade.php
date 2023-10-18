@extends('admin.layouts.app')

@section('title',  'Emlak Ekle')
@section('styles')
    <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
    <!-- Spinners Css -->
    <link href="{{ asset('assets/admin/plugins/jquery.spinner/dist/css/bootstrap-spinner.css') }}" rel="stylesheet" />
    <style>
        .is-invalid {
            border-color: red !important;
        }
    </style>
@endsection
@section('content')


    <div class="page-body">
        @section('page_title', isset($realestate) ? 'Emlak Düzenle' : 'Emlak Ekle')
        <div class="clearfix">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#basic_info" role="tab" data-toggle="tab">Genel Bilgiler</a></li>
                <li role="presentation"><a href="#product_images" role="tab" data-toggle="tab">Emlak Özellikleri</a></li>
                <li role="presentation"><a href="#meta_data" role="tab" data-toggle="tab">Meta Data</a></li>
                <li role="presentation"><a href="#detail_info" role="tab" data-toggle="tab">Emlak Resimleri</a></li>
            </ul>
            <form action="{{ route('admin.realestate.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="tab-content">
                    <!-- Basic Info -->
                    <div role="tabpanel" class="tab-pane fade in active" id="basic_info">
                            <div class="form-group">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label>Ev Başlığı</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Ev Adresi</label>
                                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label>Youtube Ev Tanıtım Video İFrame</label>
                                        <input type="text" name="video" class="form-control @error('video') is-invalid @enderror" value="{{ old('video') }}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Harita Konumu</label>
                                        <input type="text" name="map" class="form-control @error('map') is-invalid @enderror" value="{{ old('map') }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="purpose">Ev Kategorisi</label>
                                    <select class="form-control" id="purpose" name="purpose">
                                        <option value="">
                                            -- SEÇİM YAPINIZ --
                                        </option>
                                        <option value="{{ \App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_RENT }}"
                                            @if(\App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_RENT == old('purpose'))
                                                selected
                                            @endif
                                        >
                                            KİRALIK
                                        </option>
                                        <option value="{{ \App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_SALE }}"
                                            @if(\App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_SALE == old('purpose'))
                                                selected
                                            @endif
                                        >
                                            SATILIK
                                        </option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="type">Ev Tipi</label>
                                    <select class="form-control" id="type" name="type">
                                        <option value="">
                                            -- SEÇİM YAPINIZ --
                                        </option>
                                        <option value="{{ \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_APARTMENT }}"
                                            @if(\App\Enum\RealEstate\RealEstateTypeEnum::TYPE_APARTMENT == old('type') ) selected @endif
                                        >
                                            APARTMAN
                                        </option>
                                        <option value="{{ \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_VILLA }}"
                                            @if(\App\Enum\RealEstate\RealEstateTypeEnum::TYPE_VILLA == old('type') ) selected @endif
                                        >
                                            VİLLA
                                        </option>
                                        <option value="{{ \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_RESIDENCE }}"
                                            @if(\App\Enum\RealEstate\RealEstateTypeEnum::TYPE_RESIDENCE == old('type') ) selected @endif
                                        >
                                            RESİDENCE
                                        </option>
                                        <option value="{{ \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_DUBLEX }}"
                                            @if(\App\Enum\RealEstate\RealEstateTypeEnum::TYPE_DUBLEX == old('type') ) selected @endif
                                        >
                                            DUBLEX
                                        </option>
                                        <option value="{{ \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_PENTHOUSE }}"
                                            @if(\App\Enum\RealEstate\RealEstateTypeEnum::TYPE_PENTHOUSE == old('type') ) selected @endif
                                        >
                                            ÇATI KATI
                                        </option>
                                        <option value="{{ \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_STUDIO }}"
                                            @if(\App\Enum\RealEstate\RealEstateTypeEnum::TYPE_STUDIO == old('type') ) selected @endif
                                        >
                                            STÜDYO
                                        </option>
                                        <option value="{{ \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_HOUSE }}"
                                            @if(\App\Enum\RealEstate\RealEstateTypeEnum::TYPE_HOUSE == old('type') ) selected @endif
                                        >
                                            EV
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-sm-6">
                                        <label for="status">Ev Durumu</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="">
                                                -- SEÇİM YAPINIZ --
                                            </option>
                                            <option value="{{ \App\Enum\RealEstate\RealEstateStatusEnum::STATUS_SOLD }}"
                                                @if(\App\Enum\RealEstate\RealEstateStatusEnum::STATUS_SOLD == old('status') ) selected @endif
                                            >
                                                SATILDI
                                            </option>
                                            <option value="{{ \App\Enum\RealEstate\RealEstateStatusEnum::STATUS_FOR_SALE }}"
                                                @if(\App\Enum\RealEstate\RealEstateStatusEnum::STATUS_FOR_SALE == old('status') ) selected @endif
                                            >
                                                SATILIKTA
                                            </option>
                                            <option value="{{ \App\Enum\RealEstate\RealEstateStatusEnum::STATUS_FOR_RENT }}"
                                                @if(\App\Enum\RealEstate\RealEstateStatusEnum::STATUS_FOR_RENT == old('status') ) selected @endif
                                            >
                                                KİRALIKTA
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="is_active">Ev Aktiflik Durumu</label>
                                        <select class="form-control" id="is_active" name="is_active">
                                            <option value="">
                                                -- SEÇİM YAPINIZ --
                                            </option>
                                            <option value="{{ \App\Enum\RealEstate\RealEstateIsActiveEnum::IS_ACTIVE }}"
                                                    @if(\App\Enum\RealEstate\RealEstateIsActiveEnum::IS_ACTIVE == old('is_active') ) selected @endif
                                            >
                                                AKTİF
                                            </option>
                                            <option value="{{ \App\Enum\RealEstate\RealEstateIsActiveEnum::IS_PASSIVE }}"

                                                    @if(\App\Enum\RealEstate\RealEstateIsActiveEnum::IS_ACTIVE == old('is_active') ) selected @endif>
                                                AKTİF DEĞİL
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label>Ev Açıklaması</label>
                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror editor1" rows="5">{{ old('description') }}</textarea>
                            </div>
                    </div>
                    <!-- #END# Basic Info -->
                    <!-- Detail Info -->
                    <div role="tabpanel" class="tab-pane fade attributes" id="detail_info">
                        <button id="addAttribute" class="btn btn-success btn-sm" type="button"><i class="fa fa-sellsy m-r-5"></i>Görsel Ekle</button>
                        <br>
                        <div class="form-group">
                            <div class="row clearfix" >
                                <div class="col-sm-6">
                                    <label>Ev Ana Görsel Seçiniz</label>
                                    <input type="file" name="image" value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror" />
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-danger btn-sm remove-attribute" style="margin-top: 25px;"><i class="fa fa-recycle m-r-5"></i></button>
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
                    <div role="tabpanel" class="tab-pane fade otherAttributes" id="product_images">
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <label for="price">Fiyat</label>
                                    <div class="input-group">
                                        <input type="number" id="price" class="form-control" name="attributes[price]" value="{{ old('attributes[price]') }}">
                                        <span class="input-group-addon">00</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Metre Kare</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="attributes[area]" value="{{ old('attributes[area]') }}">
                                        <span class="input-group-addon">m2</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Garaj Sayısı</label>
                                    <input type="number" class="form-control"  name="attributes[garages]" value="{{ old('attributes[garages]') }}" form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <label>Yatak Odası Sayısı</label>
                                    <input type="number" class="form-control" name="attributes[bedrooms]" value="{{ old('attributes[bedrooms]') }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Oturma Odası Sayısı</label>
                                    <input type="number" class="form-control" name="attributes[bathrooms]" value="{{ old('attributes[bathrooms]') }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Yapım Yılı</label>
                                    <input type="date" class="form-control" name="attributes[year_built]" value="{{ old('attributes[year_built]') }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <button id="addOtherAttribute" class="btn btn-success btn-sm mt-1" type="button"><i class="fa fa-sellsy m-r-5"></i>Ek özellik ekle</button>
                        <br>
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
    <!-- Spinners Js -->
    <script src="{{ asset('assets/admin/plugins/jquery.spinner/dist/js/jquery.spinner.js') }}"></script>
    <script>
        let attribute = document.getElementById('addAttribute')
        attribute.addEventListener('click', function (){
            event.preventDefault();
                var inputHtml = '<div class="form-group">' +
                    '<div class="row clearfix">' +
                    '<div class="col-sm-6">' +
                    '<label>Ev Alt Görsel Seçiniz</label>' +
                    '<input type="file" name="images[]" value="{{ old('images') }}" class="form-control @error('images') is-invalid @enderror" />' +
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
                event.preventDefault();
                $(this).parent().parent().parent().remove();
            }else
            {

                event.preventDefault();
                alert('En az 1 özellik olmalıdır.')
            }
        })
    </script>
    <script>
        let otherattribute = document.getElementById('addOtherAttribute')
        otherattribute.addEventListener('click', function (){
            event.preventDefault();
                var html = '<div class="form-group">' +
                    '<div class="row clearfix">' +
                        '<div class="col-sm-4">' +
                        '<label>Özellik Adı</label>' +
                        '<input type="text" name="attributes[key][]" value="{{ old('attributes[key]') }}" class="form-control @error('attributes[key]') is-invalid @enderror" />' +
                        '</div>' +

                        '<div class="col-sm-4">' +
                        '<label>Özellik Değeri</label>' +
                        '<input type="text" name="attributes[value][]" value="{{ old('attributes[value]') }}" class="form-control @error('attributes[value]') is-invalid @enderror" />' +
                        '</div>' +

                        '<div class="col-sm-4">' +
                        '<button class="btn btn-danger btn-sm remove-other-attribute" style="margin-top: 25px;"><i class="fa fa-recycle m-r-5"></i></button>' +
                        '</div>' +
                    '</div>' +
                    '</div>';
                $('.otherAttributes').append(html);

        })
        $(document).on('click', '.remove-other-attribute', function (){
            let removeOtherAttribute = document.querySelectorAll('.remove-other-attribute')
            if(removeOtherAttribute.length > 0){
                event.preventDefault();
                $(this).parent().parent().parent().remove();
            }
        })
    </script>

@endsection
