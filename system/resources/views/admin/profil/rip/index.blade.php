<x-app>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('admin/rip/create') }}" class="btn btn-primary float-end"> <span
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
                                <th class="text-center">Nama</th>
                                <th class="text-center">Tahun </th>
                                <th class="text-center">Deskripsi</th>
                                <th class="text-center">Cover</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_rip as $rip)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ url("public/$rip->file_pdf") }}"
                                                target="_blank" class="btn btn-info"> <i class="fa fa-check"></i> Lihat File</a>
                                            <x-button.edit-button url="admin/rip" id="{{ $rip->id }}" />
                                            <x-button.delete-button url="admin/rip" id="{{ $rip->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $rip->nama_rip }}</td>
                                    <td class="text-center">{{ $rip->tahun_terbit }}</td>
                                    <td class="text-left">{!! nl2br ($rip->deskripsi) !!}</td>
                                    <td class="text-center" width="30%">
                                        <img src="{{ url("public/$rip->cover") }}" style="width:40%;"
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
