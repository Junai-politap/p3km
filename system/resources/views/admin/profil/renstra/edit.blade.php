<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/renstra" />
                    <h1 class="header-title text-center mb-5">Edit Data</h1>

                    <form action="{{ url('admin/renstra', $renstra->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Renstra</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_renstra" value="{{ $renstra->nama_renstra }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tahun Renstra</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tahun_terbit" value="{{ $renstra->tahun_terbit }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                
                                <textarea name="deskripsi" class="summernote">{{ $renstra->deskripsi }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">File PDF</label>
                            <div class="col-md-4">
                                <embed src="{{ url("public/$renstra->file_pdf") }}"
                                    type="application/pdf">
                            </div>
                            <div class="col-sm-5">
                                <input type="file" class="form-control" name="file_pdf" accept="application/pdf" value="{{ $renstra->file_pdf }}">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">File Cover</label>
                            <div class="col-md-4">
                                <img src="{{ url("public/$renstra->cover") }}" style="width:50%;"
                                            onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                            </div>
                            <div class="col-sm-5">
                                <input type="file" class="form-control" name="cover" accept=".jpg, .png, .jpeg" value="{{ $renstra->cover }}">
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
