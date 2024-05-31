<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/profil" />
                    <h1 class="header-title text-center mb-5">Edit Data</h1>

                    <form action="{{ url('admin/profil', $profil->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="judul" value="{{ $profil->judul }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Jenis Profil</label>
                            <div class="col-sm-9">
                                <select name="jenis" class="form-control">
                                    <option value="Profil" @if ($profil->jenis == 'Profil') selected @endif> Profil
                                    </option>
                                    <option value="Visi" @if ($profil->jenis == 'Visi') selected @endif> Visi
                                    </option>
                                    <option value="Misi" @if ($profil->jenis == 'Misi') selected @endif> Misi
                                    </option>
                                    <option value="Tujuan" @if ($profil->jenis == 'Tujuan') selected @endif> Tujuan
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                
                                <textarea name="text" class="summernote">{{ $profil->text }}</textarea>
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
