<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/rip" />
                    <h1 class="header-title text-center mb-5">Edit Data</h1>

                    <form action="{{ url('admin/rip', $rip->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama" value="{{ $rip->nama }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tahun </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tahun_terbit" value="{{ $rip->tahun_terbit }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                
                                <textarea name="deskripsi" class="summernote">{{ $rip->deskripsi }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">File PDF</label>
                            <div class="col-md-4">
                                <embed src="{{ url("public/$rip->file_pdf") }}"
                                    type="application/pdf">
                            </div>
                            <div class="col-sm-5">
                                <input type="file" class="form-control" name="file_pdf" accept="application/pdf" value="{{ $rip->file_pdf }}">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">File Cover</label>
                            <div class="col-md-4">
                                <img src="{{ url("public/$rip->cover") }}" style="width:50%;"
                                            onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                            </div>
                            <div class="col-sm-5">
                                <input type="file" class="form-control" name="cover" accept=".jpg, .png, .jpeg" value="{{ $rip->cover }}">
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
