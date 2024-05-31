<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/publikasi" />
                    <h1 class="header-title text-center mb-5">Tambah Data</h1>

                    <form action="{{ url('admin/publikasi') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Penulis</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_penulis" placeholder="Masukan Nama Penulis">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Jurnal</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_jurnal"
                                    placeholder="Masukan Nama Jurnal">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="judul"
                                    placeholder="Masukan Judul">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Volumen</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="volume"
                                    placeholder="Masukan Volumen">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tahun Terbit</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tahun_terbit"
                                    placeholder="Masukan Tahun Terbit">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" class="summernote"></textarea>
                            </div>
                        </div>
                        <div class="justify-content-end row">
                            <div class="col-sm-9">
                                <button class="btn btn-info waves-effect waves-light float-end"><i
                                        class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-app>
