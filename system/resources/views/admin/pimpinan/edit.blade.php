<x-app>
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/struktur-organisasi" />
                    <h1 class="header-title text-center mb-5">Edit Data</h1>

                    <form action="{{ url('admin/struktur-organisasi', $pimpinan->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nip" value="{{ $pimpinan->nip }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nik" value="{{ $pimpinan->nik }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_lengkap" value="{{ $pimpinan->nama_lengkap }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Gelar Belakang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="gelar_belakang" value="{{ $pimpinan->gelar_belakang }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="jabatan" value="{{ $pimpinan->jabatan }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Bidang Keahlian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="bidang_keahlian" value="{{ $pimpinan->bidang_keahlian }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tempat_lahir" value="{{ $pimpinan->tempat_lahir }}">
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tanggal_lahir" value="{{ $pimpinan->tanggal_lahir }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="Laki-Laki" @if ($pimpinan->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki
                                    </option>
                                    <option value="Perempuan" @if ($pimpinan->jenis_kelamin == 'Perempuan') selected @endif>Perempuan
                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                <select name="agama" class="form-control">
                                    <option value="Islam" @if ($pimpinan->agama == 'Islam') selected @endif>Islam</option>

                                    <option value="Kristen" @if ($pimpinan->agama == 'Kristen') selected @endif>Kristen
                                    </option>

                                    <option value="Khatolik" @if ($pimpinan->agama == 'Khatolik') selected @endif>Khatolik
                                    </option>

                                    <option value="Hindhu" @if ($pimpinan->agama == 'Hindhu') selected @endif>Hindhu</option>

                                    <option value="Budha" @if ($pimpinan->agama == 'Budha') selected @endif>Budha</option>

                                    <option value="Kong Hu Chu" @if ($pimpinan->agama == 'Kong Hu Chu') selected @endif>Kong Hu
                                        Chu</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="alamat" value="{{ $pimpinan->alamat }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="hp" value="{{ $pimpinan->hp }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label">Alamat Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email" value="{{ $pimpinan->email }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-12 col-md-3 col-form-label">Poto</label>
                            <div class="col-md-4">
                                <img style="width: 30%" src="{{ url("public/$pimpinan->foto") }}">
                            </div>
                            <div class="col-sm-12 col-md-5">
                                <input class="form-control" type="file" name="foto"
                                    accept=".jpg, .png, .jpeg">
                                
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
