@extends('admin.layouts.app')

@section('content')

    <div class="page-body">
        @section('page_title', 'Emlak')
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="btn-group pull-right">
                            <a href="{{ route('admin.realestate.create') }}" class="btn btn-primary btn-sm"><i class="material-icons">add</i></a>
                        </div>
                        <h4 class="panel-title">Emlak</h4>
                        <small>Bu sayfadan Emlak bilgilerinizi yönetebilirsiniz.</small>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Resim</th>
                                <th>Başlık</th>
                                <th>Fiyat</th>
                                <th>Adres</th>
                                <th>Satıldı/Satılık/Kiralık Durumu</th>
                                <th>Ev Tipi</th>
                                <th>Ev Durumu(Satılık/Kiralık)</th>
                                <th>Evin Aktiflik Durumu</th>
                                <th>Yayınlanma Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($realEstates as $realEstate)
                                <tr>
                                    <td>{{ $realEstate->id }}</td>
                                    <td>
                                        <img src="{{ asset($realEstate->image) }}" alt="{{ $realEstate->title }}" width="50" height="50">
                                    </td>
                                    <td>{{ $realEstate->title }}</td>
                                    <td>{{ $realEstate->realEstateAttribute->price }}</td>
                                    <td>{{ $realEstate->address }}</td>
                                    <td>
                                        @if($realEstate->status == \App\Enum\RealEstate\RealEstateStatusEnum::STATUS_SOLD)
                                            <span class="label label-success">SATILDI</span>
                                        @elseif($realEstate->status == \App\Enum\RealEstate\RealEstateStatusEnum::STATUS_FOR_SALE)
                                            <span class="label label-danger">SATILIK</span>
                                        @elseif($realEstate->status == \App\Enum\RealEstate\RealEstateStatusEnum::STATUS_FOR_RENT)
                                            <span class="label label-warning">KİRALIK</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($realEstate->type == \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_APARTMENT)
                                            <span class="label label-success">APARTMAN</span>
                                        @elseif($realEstate->type == \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_RESIDENCE)
                                            <span class="label label-danger">REZİDANS</span>
                                        @elseif($realEstate->type == \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_VILLA)
                                            <span class="label label-warning">VİLLA</span>
                                        @elseif($realEstate->type == \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_DUBLEX)
                                            <span class="label label-warning">DUBLEX</span>
                                        @elseif($realEstate->type == \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_PENTHOUSE)
                                            <span class="label label-warning">ÇATI KATI</span>
                                        @elseif($realEstate->type == \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_STUDIO)
                                            <span class="label label-warning">STÜDYO</span>
                                        @elseif($realEstate->type == \App\Enum\RealEstate\RealEstateTypeEnum::TYPE_HOUSE)
                                            <span class="label label-warning">EV</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($realEstate->purpose == \App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_RENT)
                                            <span class="label label-success">KİRALIK</span>
                                        @elseif($realEstate->purpose == \App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_SALE)
                                            <span class="label label-danger">SATILIK</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($realEstate->is_active == \App\Enum\RealEstate\RealEstateIsActiveEnum::IS_ACTIVE)
                                            <span class="label label-success">AKTİF</span>
                                        @elseif($realEstate->is_active == \App\Enum\RealEstate\RealEstateIsActiveEnum::IS_PASSIVE)
                                            <span class="label label-danger">PASİF</span>
                                        @endif
                                    </td>
                                    <td>{{ $realEstate->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.realestate.edit', ['realestate' => $realEstate]) }}" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                        <button class="btn btn-danger btn-sm remove" data-id="{{ $realEstate->id }}" ><i class="material-icons">delete</i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="11">Henüz emlak eklenmemiş.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        let remove = document.querySelectorAll('.remove');
        console.log(remove.length)
        for (let i = 0; i < remove.length; i++){
            remove[i].addEventListener('click', function () {
                let id = remove[i].attributes['data-id'].value;
                let url = '{{ route('admin.realestate.destroy', ['realestate' => 'id']) }}'.replace('id', id);
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function (data) {
                        window.location.reload();
                    },
                    error: function (data) {
                        //window.location.reload();
                    }
                })
            })
        }
    </script>
@endsection
