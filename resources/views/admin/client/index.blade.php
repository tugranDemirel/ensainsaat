@extends('admin.layouts.app')

@section('title',  'Sponsor ve Kullanıcılar')
@section('content')

    <div class="page-body">
        @section('page_title', 'Sponsor ve Kullanıcılar')
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="btn-group pull-right">
                            <a href="{{ route('admin.client.create') }}" class="btn btn-primary btn-sm"><i class="material-icons">add</i></a>
                        </div>
                        <h4 class="panel-title">Sponsor ve Kullanıcılar</h4>
                        <small>Bu sayfadan Sponsor ve Kullanıcılarınızı yönetebilirsiniz.</small>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Resm</th>
                                <th>Ad</th>
                                <th>Link</th>
                                <th>Yayınlanma Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>
                                        <img src="{{ asset($client->image) }}" alt="{{ $client->name }}" width="50" height="50">
                                    </td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->url ?? '-' }}</td>
                                    <td>{{ $client->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.client.edit', ['client' => $client]) }}" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                        <button class="btn btn-danger btn-sm remove" data-id="{{ $client->id }}" ><i class="material-icons">delete</i></button>
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
        for (let i = 0; i < remove.length; i++){
            remove[i].addEventListener('click', function () {
                let id = remove[i].attributes['data-id'].value;
                let url = '{{ route('admin.client.destroy', ['client' => 'id']) }}'.replace('id', id);
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function (response) {
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
