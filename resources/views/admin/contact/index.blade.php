@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Contact</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-phone"></i> Contact</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.contact.index') }}" method="GET">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                @can('contact.create')
                                    <div class="input-group-prepend">
                                        <a href="{{ route('admin.contact.create') }}" class="btn btn-primary" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> TAMBAH</a>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">PHONE</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($contacts as $contact)
                                <tr>
                                    <td>{{ $contacts->count() * ($contacts->currentPage() - 1) + $loop->iteration }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->no_telp }}</td>
                                    <td>{{ $contact->alamat }}</td>
                                    <td class="text-center">
                                        
                                        {{-- @can('contact.delete')
                                        <button onClick="Delete(this.id)" class="btn btn-sm btn-primary" id="{{ $profile->id }}">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        @endcan

                                        @can('contact.delete')
                                            <a href="{{ route('admin.contact.edit', $profile->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                        @endcan --}}

                                        @can('contact.edit')
                                            <a href="{{ route('admin.contact.edit', $contact->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                        @endcan
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="5">Empty</td>
                            </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <div style="text-align: center">
                            {{$contacts->links("vendor.pagination.bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<script>
    //ajax delete
    function Delete(id)
        {
            var id = id;
            var token = $("meta[name='csrf-token']").attr("content");

            swal({
                title: "APAKAH KAMU YAKIN ?",
                text: "INGIN MENGHAPUS DATA INI!",
                icon: "warning",
                buttons: [
                    'TIDAK',
                    'YA'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {


                    //ajax delete
                    jQuery.ajax({
                        url: "{{ route("admin.contact.index") }}/"+id,
                        data:     {
                            "id": id,
                            "_token": token
                        },
                        type: 'DELETE',
                        success: function (response) {
                            if (response.status == "success") {
                                swal({
                                    title: 'BERHASIL!',
                                    text: 'DATA BERHASIL DIHAPUS!',
                                    icon: 'success',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }else{
                                swal({
                                    title: 'GAGAL!',
                                    text: 'DATA GAGAL DIHAPUS!',
                                    icon: 'error',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }
                        }
                    });

                } else {
                    return true;
                }
            })
        }
</script>
@stop