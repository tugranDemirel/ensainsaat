@extends('admin.layouts.app')

@section('title',  'Servis-Hizmetler')
@section('content')

    <div class="page-body">
        @section('page_title', 'Servisler')
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <div class="btn-group pull-right">
                                <a href="{{ route('admin.service.create') }}" class="btn btn-primary btn-sm"><i class="material-icons">add</i></a>
                            </div>
                            <h4 class="panel-title">Servisler</h4>
                            <small>Bu sayfadan servislerinizi yönetebilirsiniz.</small>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Servis Resmi / İconu</th>
                                <th>Servis Adı</th>
                                <th>Aktiflik Durum</th>
                                <th>Anasayfa da Yayınlanma Durum</th>
                                <th>Öne Çıkarma Durumu</th>
                                <th>Yayınlanma Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>
                                    @if($service->image && !is_null($service->image))
                                        <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" width="50" height="50">
                                    @else
                                        <i class="{{ $service->icon }}"></i>
                                    @endif
                                </td>
                                <td>{{ $service->name }}</td>
                                <td>
                                    @if($service->is_active == 1)
                                        <span class="label label-success">Aktif</span>
                                    @else
                                        <span class="label label-danger">Pasif</span>
                                    @endif
                                </td>
                                <td>
                                    @if($service->is_home == 1)
                                        <span class="label label-success">Aktif</span>
                                    @else
                                        <span class="label label-danger">Pasif</span>
                                    @endif
                                </td>
                                <td>
                                    @if($service->is_featured == 1)
                                        <span class="label label-success">Aktif</span>
                                    @else
                                        <span class="label label-danger">Pasif</span>
                                    @endif
                                </td>
                                <td>{{ $service->updated_at }}</td>
                                <td>
                                    <a href="{{ route('admin.service.edit', ['service' => $service]) }}" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                    <button class="btn btn-danger btn-sm remove" data-id="{{ $service->id }}" ><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="8">Henüz servis eklenmemiş.</td>
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
                let url = '{{ route('admin.service.destroy', ['service' => 'id']) }}'.replace('id', id);
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
                        window.location.reload();
                    }
                })
            })
        }
    </script>
@endsection
