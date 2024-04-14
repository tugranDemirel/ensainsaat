@extends('admin.layouts.app')

@section('title',  'İletişim Mesajları')
@section('content')

    <div class="page-body">
        @section('page_title', 'İletişim Mesajları')
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="btn-group pull-right">
                            <a href="{{ route('admin.client.create') }}" class="btn btn-primary btn-sm"><i class="material-icons">add</i></a>
                        </div>
                        <h4 class="panel-title">İletişim Mesajları</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>İncelendi</th>
                                <th>Ad Soyad</th>
                                <th>Telefon Numarası</th>
                                <th>E-Posta Adresi</th>
                                <th>İletişim Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>
                                        @if($contact->is_seen == true)
                                            <span class="label label-success">İncelendi</span>
                                        @else
                                            <span class="label label-danger">İncelenmedi</span>
                                        @endif
                                    </td>
                                    <td>{{ $contact->name ?? '-' }}</td>
                                    <td>{{ $contact->phone ?? '-' }}</td>
                                    <td>{{ $contact->email ?? '-' }}</td>
                                    <td>{{ $contact->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.contact.show', ['contact' => $contact]) }}" class="btn btn-primary btn-sm"><i class="material-icons">visibility</i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">Henüz İLetişim Mesajıı Gelmemiş.</td>
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
