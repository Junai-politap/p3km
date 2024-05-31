<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">


                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <x-button.back-button url="{{ url('admin/pengabdian') }}" />
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Detail Data</h3>
                    </div>

                    <div class="card-body">
                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Judul Pengabdian</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $pengabdian->judul }}
                            </div>
                        </div>
                        <hr>
                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Nama Ketua Pengabdian</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $pengabdian->ketua_peneliti }}
                            </div>
                        </div>
                        <hr>

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Jenis Pengabdian</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $pengabdian->jenis_pengabdian }}
                            </div>
                        </div>
                        <hr>
                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Nama Anggota Dosen</strong>
                            </label>
                            <div class="col-md-10">
                               : {!! nl2br ($pengabdian->anggota_dosen) !!}
                            </div>
                        </div>
                        <hr>
                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Nama Anggota Mahasiswa</strong>
                            </label>
                            <div class="col-md-10">
                               : {!! nl2br ($pengabdian->anggota_mahasiswa) !!}
                            </div>
                        </div>
                        <hr>
                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Skema Pengabdian</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $pengabdian->skema }}
                            </div>
                        </div>
                        <hr>

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Tahun Terbit </strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $pengabdian->tahun_terbit }}
                            </div>
                        </div>
                        <hr>

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Deskripsi</strong>
                            </label>
                            <div class="col-md-10">
                               : {!! nl2br ($pengabdian->deskripsi) !!}
                            </div>
                        </div>
                        <hr>
                    </div>

                </div>

            </div>
            <div class="col-md-1"></div>
        </div>

    </div>
</x-app>
