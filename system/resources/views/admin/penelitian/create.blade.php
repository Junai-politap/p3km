<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/penelitian" />
                    <h1 class="header-title text-center mb-5">Tambah Data </h1>

                    <form action="{{ url('admin/penelitian') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Judul Penelitian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="judul" placeholder="Masukan Judul">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Jenis Penelitian</label>
                            <div class="col-sm-9">
                                <select name="jenis_penelitian" class="form-control">
                                    <option value=""> Pilih Jenis Penelitian</option>
                                    <option value="Internal"> Internal</option>
                                    <option value="DRTPM/APTV"> DRTPM/APTV</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Ketua Penelitian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="ketua_peneliti"
                                    placeholder="Masukan Nama Ketua Penelitian">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Anggota Dosen</label>
                            <div class="col-sm-9">
                                <textarea name="anggota_dosen" class="summernote"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Anggota Mahasiswa</label>
                            <div class="col-sm-9">
                                <textarea name="anggota_mahasiswa" class="summernote"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Skema Penelitian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="skema"
                                    placeholder="Masukan Skema Penelitian">
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
