<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/pengabdian" />
                    <h1 class="header-title text-center mb-5">Tambah Data </h1>

                    <form action="{{ url('admin/pengabdian', $pengabdian->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Judul Pengabdian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="judul" value="{{ $pengabdian->judul }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Jenis Pengabdian</label>
                            <div class="col-sm-9">
                                <select name="jenis_pengabdian" class="form-control">
                                    <option value="Internal" @if ($pengabdian->jenis_pengabdian == 'Internal') selected @endif> Internal
                                    </option>
                                    <option value="DRTPM/APTV" @if ($pengabdian->jenis_pengabdian == 'DRTPM/APTV') selected @endif> DRTPM/APTV
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Ketua Pengabdian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="ketua_peneliti"
                                    value="{{ $pengabdian->ketua_peneliti }}">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Anggota Dosen</label>
                            <div class="col-sm-9">
                                <textarea name="anggota_dosen" class="summernote">{{ $pengabdian->anggota_dosen }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Anggota Mahasiswa</label>
                            <div class="col-sm-9">
                                <textarea name="anggota_mahasiswa" class="summernote">{{ $pengabdian->anggota_mahasiswa }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Skema Pengabdian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="skema"
                                    value="{{ $pengabdian->skema }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tahun Terbit</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tahun_terbit"
                                    value="{{ $pengabdian->tahun_terbit }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" class="summernote"> {{ $pengabdian->deskripsi }}</textarea>
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
