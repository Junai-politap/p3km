<x-app>
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/struktur-organisasi" />
                    <h1 class="header-title text-center mb-5">Tambah Data</h1>

                    <form action="{{ url('admin/struktur-organisasi') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nip">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nik">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_lengkap">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Gelar Belakang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="gelar_belakang">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Bidang Keahlian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="bidang_keahlian">
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="jabatan">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tempat_lahir">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tanggal_lahir">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value=""> Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki"> Laki-Laki</option>
                                    <option value="Perempuan"> Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                <select name="agama" class="form-control">
                                    <option value=""> Pilih Agama</option>
                                    <option value="Islam"> Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Khatolik"> Khatolik</option>
                                    <option value="Hindhu"> Hindhu</option>
                                    <option value="Budha"> Budha</option>
                                    <option value="Kong Hu Chu"> Kong Hu Chu</option>
                                </select>
                            </div>
                        </div>

                        
                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="alamat">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="hp">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Alamat Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-12 col-md-3 col-form-label">Poto</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="file" name="foto" accept=".jpg, .png, .jpeg">
                                
                            </div>
                        </div>

                        <div class="justify-content-end row mb-3">
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
