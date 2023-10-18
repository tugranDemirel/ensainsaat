@extends('admin.layouts.app')

@section('title',  isset($newsletter) ? 'Basında Biz Düzenle' : 'Basında Biz Ekle')
@section('styles')
    <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
@endsection
@section('content')
    <div class="page-body clearfix">
        @section('page_title', 'Haberler')
        <div class="row clearfix">
            <!-- Horizontal Layout  -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Haberler</div>
                    <div class="panel-body p-b-25">
                        <form class="form-horizontal" enctype="multipart/form-data" action="{{ isset($newsletter) ? route('admin.newsletter.update', ['newsletter' => $newsletter]) : route('admin.newsletter.store') }}" method="POST">
                            @csrf
                            @isset($newsletter)
                            @method('PUT')
                            @endisset
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Haber Başlığı </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ isset($newsletter) ? $newsletter->title : old('title') }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Haber Kısa Açıklaması </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('short_content') is-invalid @enderror" name="short_content" value="{{ isset($newsletter) ? $newsletter->short_content : old('short_content') }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Haber Görseli </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ isset($newsletter) ? $newsletter->image : old('image') }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Haber İçeriği</label>
                                <div class="col-sm-10">
                                    <textarea class="editor1 form-control @error('content') is-invalid @enderror" name="content" rows="10">{{ isset($newsletter) ? $newsletter->content : old('content') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 p-l-15">
                                    <button type="submit" class="btn btn-sm btn-success">{{ isset($newsletter) ? 'Güncelle' : 'Kaydet' }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout  -->
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        let ck = document.querySelectorAll('.editor1');
        for (let i = 0; i < ck.length; i++) {
            CKEDITOR.replace(ck[i], {
                height: 800,
                filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
        }
    </script>
@endsection
