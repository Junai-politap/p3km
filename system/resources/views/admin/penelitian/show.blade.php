<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">


                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <x-button.back-button url="{{ url('admin/penelitian') }}" />
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Detail Data</h3>
                    </div>

                    <div class="card-body">
                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Judul Penelitian</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $penelitian->judul }}
                            </div>
                        </div>
                        <hr>
                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Nama Ketua Penelitian</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $penelitian->ketua_peneliti }}
                            </div>
                        </div>
                        <hr>

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Jenis Penelitian</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $penelitian->jenis_penelitian }}
                            </div>
                        </div>
                        <hr>
                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Nama Anggota Dosen</strong>
                            </label>
                            <div class="col-md-10">
                               : {!! nl2br ($penelitian->anggota_dosen) !!}
                            </div>
                        </div>
                        <hr>
                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Nama Anggota Mahasiswa</strong>
                            </label>
                            <div class="col-md-10">
                               : {!! nl2br ($penelitian->anggota_mahasiswa) !!}
                            </div>
                        </div>
                        <hr>
                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Skema Penelitian</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $penelitian->skema }}
                            </div>
                        </div>
                        <hr>

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Tahun Terbit </strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $penelitian->tahun_terbit }}
                            </div>
                        </div>
                        <hr>

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Deskripsi</strong>
                            </label>
                            <div class="col-md-10">
                               : {!! nl2br ($penelitian->deskripsi) !!}
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
