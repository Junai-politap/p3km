<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">


                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <x-button.back-button url="{{ url('admin/publikasi') }}" />
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Detail Data</h3>
                    </div>

                    <div class="card-body">

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Nama Penulis</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $publikasi->nama_penulis }}
                            </div>
                        </div>
                        <hr>

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Nama Jurnal</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $publikasi->nama_jurnal }}
                            </div>
                        </div>
                        <hr>

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Judul Jurnal</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $publikasi->judul }}
                            </div>
                        </div>
                        <hr>

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Volumen</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $publikasi->volume }}
                            </div>
                        </div>
                        <hr>

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Tahun Terbit Jurnal</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $publikasi->tahun_terbit }}
                            </div>
                        </div>
                        <hr>

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Deskripsi</strong>
                            </label>
                            <div class="col-md-10">
                               : {!! nl2br ($publikasi->deskripsi) !!}
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
