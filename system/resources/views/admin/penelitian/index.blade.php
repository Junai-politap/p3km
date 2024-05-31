<x-app>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('admin/penelitian/create') }}" class="btn btn-primary float-end"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h2 class="header-title">
                        <strong>
                            Data Penelitian
                        </strong>
                    </h2>

                    <p class="text-muted font-size-13 mb-5"></p>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama Ketua</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Skema</th>
                                <th class="text-center">Tahun Terbit</th>
                                <th class="text-center">Jenis Penelitian</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_penelitian as $penelitian)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-button.info-button url="admin/penelitian" id="{{ $penelitian->id }}" />
                                            <x-button.edit-button url="admin/penelitian" id="{{ $penelitian->id }}" />
                                            <x-button.delete-button url="admin/penelitian" id="{{ $penelitian->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $penelitian->ketua_peneliti }}</td>
                                    <td class="text-center">{{ $penelitian->judul }}</td>
                                    <td class="text-center">{{ $penelitian->skema }}</td>
                                    <td class="text-center">{{ $penelitian->tahun_terbit }}</td>
                                    <td class="text-center">{{ $penelitian->jenis_penelitian }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
