<x-app>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('admin/berita/create') }}" class="btn btn-primary float-end"> <span
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
                                <th class="text-center">Judul Berita</th>
                                <th class="text-center">Tanggal Berita</th>
                                <th class="text-center">Poto</th>
                                <th class="text-center">Status Berita</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_berita as $berita)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-button.info-button url="admin/berita" id="{{ $berita->id }}" />
                                            <x-button.edit-button url="admin/berita" id="{{ $berita->id }}" />
                                            <x-button.delete-button url="admin/berita" id="{{ $berita->id }}" />

                                            @if ($berita->status == 1)
                                                <form action="{{ url('admin/berita/arsip', $berita->id) }}" method="POST">
                                                    @method("PUT")
                                                    @csrf
                                                    <button class="btn btn-primary"><span class="fa fa-archive"></span> Arsip</button>
                                                </form>
                                            @endif

                                            @if ($berita->status == 2)
                                            <form action="{{ url('admin/berita/publis', $berita->id) }}" method="POST">
                                                @method("PUT")
                                                @csrf
                                                <button class="btn btn-primary"><span class="fa fa-sticky-note"></span> Publis</button>
                                            </form>
                                        @endif
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $berita->nama_berita }}</td>
                                    <td class="text-center">{{ date('d-m-Y', strtotime($berita->tanggal_berita)) }}
                                    </td>

                                    <td class="text-center" style="width: 30%">
                                        <img src="{{ url("public/$berita->poto") }}" style="width:50%;"
                                            onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                    </td>
                                    <td class="text-center">
                                        @if ($berita->status == 1)
                                            <button class="btn btn-primary"><strong> Publis</strong></button>
                                        @endif

                                        @if ($berita->status == 2)
                                            <button class="btn btn-primary"><strong> Arsip</strong></button>
                                        @endif
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
