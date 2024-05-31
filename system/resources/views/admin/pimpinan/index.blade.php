<x-app>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('admin/struktur-organisasi/create') }}" class="btn btn-primary float-end"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h2 class="header-title">
                        <strong>
                            Data Berita
                        </strong>
                    </h2>

                    <p class="text-muted font-size-13 mb-5"></p>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">NIP / NIK</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jabatan</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_pimpinan as $pimpinan)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-button.info-button url="admin/struktur-organisasi" id="{{ $pimpinan->id }}" />
                                            <x-button.edit-button url="admin/struktur-organisasi" id="{{ $pimpinan->id }}" />
                                            <x-button.delete-button url="admin/struktur-organisasi" id="{{ $pimpinan->id }}" />

                                           
                                        </div>
                                    </td>
                                    <td class="">
                                        NIP : {{ $pimpinan->nip }} <br>
                                        NIK : {{ $pimpinan->nik }}
                                     </td>
                                     <td class="text-center">{{ $pimpinan->nama_lengkap }}</td>
                                     <td class="text-center">{{ $pimpinan->jabatan }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
