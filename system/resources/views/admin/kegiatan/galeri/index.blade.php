<x-app>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('admin/galeri/create') }}" class="btn btn-primary float-end"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h2 class="header-title">
                        <strong>
                            Data Galeri
                        </strong>
                    </h2>

                    <p class="text-muted font-size-13 mb-5"></p>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Poto</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_galeri as $galeri)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-button.info-button url="admin/galeri" id="{{ $galeri->id }}" />
                                            <x-button.edit-button url="admin/galeri" id="{{ $galeri->id }}" />
                                            <x-button.delete-button url="admin/galeri" id="{{ $galeri->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $galeri->judul }}</td>
                                    <td class="text-center" style="width: 30%">
                                        <img src="{{ url("public/$galeri->poto") }}" style="width:50%;"
                                            onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
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
