<x-app>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('admin/publikasi/create') }}" class="btn btn-primary float-end"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h2 class="header-title">
                        <strong>
                            Data Publikasi
                        </strong>
                    </h2>

                    <p class="text-muted font-size-13 mb-5"></p>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama Penulis</th>
                                <th class="text-center">Nama Jurnal</th>
                                <th class="text-center">Judul</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_publikasi as $publikasi)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-button.info-button url="admin/publikasi" id="{{ $publikasi->id }}" />
                                            <x-button.edit-button url="admin/publikasi" id="{{ $publikasi->id }}" />
                                            <x-button.delete-button url="admin/publikasi" id="{{ $publikasi->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $publikasi->nama_penulis }}</td>
                                    <td class="text-center">{{ $publikasi->nama_jurnal }}</td>
                                    <td class="text-center">{{ $publikasi->judul }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
