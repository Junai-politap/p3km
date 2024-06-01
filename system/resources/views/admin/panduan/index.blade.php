<x-app>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('admin/panduan/create') }}" class="btn btn-primary float-end"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h2 class="header-title">
                        <strong>
                            Data Panduan
                        </strong>
                    </h2>

                    <p class="text-muted font-size-13 mb-5"></p>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama File</th>
                                <th class="text-center">Jenis Panduan</th>
                                <th class="text-center">Tahun Terbit</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_panduan as $panduan)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ url("public/$panduan->file") }}"
                                                target="_blank" class="btn btn-info"> <span class="fa fa-info"></span>
                                            <x-button.edit-button url="admin/panduan" id="{{ $panduan->id }}" />
                                              
                                            <x-button.delete-button url="admin/panduan" id="{{ $panduan->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        {{ $panduan->nama }}
                                    </td>
                                    <td class="text-center">
                                        {{ $panduan->jenis_panduan }}
                                    </td>
                                    <td class="text-center">
                                        {{ $panduan->tahun_terbit }}
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
