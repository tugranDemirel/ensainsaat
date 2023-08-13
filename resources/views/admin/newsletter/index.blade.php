@extends('admin.layouts.app')

@section('content')

    <div class="page-body">
        @section('page_title', 'Servisler')
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="btn-group pull-right">
                            <a href="{{ route('admin.newsletter.create') }}" class="btn btn-primary btn-sm"><i class="material-icons">add</i></a>
                        </div>
                        <h4 class="panel-title">Haberler</h4>
                        <small>Bu sayfadan haberleri yönetebilirsiniz.</small>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Haber Resmi</th>
                                <th>Haber Adı</th>
                                <th>Kısa Açıklama</th>
                                <th>Aktiflik Durum</th>
                                <th>Yayınlanma Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($newsletters as $newsletter)
                                <tr>
                                    <td>{{ $newsletter->id }}</td>
                                    <td>
                                            <img src="{{ asset($newsletter->image) }}" alt="{{ $newsletter->title }}" width="50" height="50">
                                    </td>
                                    <td>{{ $newsletter->title }}</td>
                                    <td>{{ $newsletter->short_content }}</td>
                                    <td>
                                        @if($newsletter->is_active == 1)
                                            <span class="label label-success">Aktif</span>
                                        @else
                                            <span class="label label-danger">Pasif</span>
                                        @endif
                                    </td>
                                    <td>{{ $newsletter->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.newsletter.edit', ['newsletter' => $newsletter]) }}" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                        <button class="btn btn-danger btn-sm remove" data-id="{{ $newsletter->id }}" ><i class="material-icons">delete</i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">Henüz haber eklenmemiş.</td>
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
                let url = '{{ route('admin.newsletter.destroy', ['newsletter' => 'id']) }}'.replace('id', id);
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
