<x-app>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('admin/profil/create') }}" class="btn btn-primary float-end"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h2 class="header-title">
                        <strong>
                            Data User
                        </strong>
                    </h2>

                    <p class="text-muted font-size-13 mb-5"></p>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Jenis</th>
                                <th class="text-center">Deskripsi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_profil as $profil)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-button.info-button url="admin/profil" id="{{ $profil->id }}" />
                                            <x-button.edit-button url="admin/profil" id="{{ $profil->id }}" />
                                            <x-button.delete-button url="admin/profil" id="{{ $profil->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $profil->judul }}</td>
                                    <td class="text-center">{{ $profil->jenis }}</td>
                                    <td class="text-left">{!! nl2br ($profil->text) !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
