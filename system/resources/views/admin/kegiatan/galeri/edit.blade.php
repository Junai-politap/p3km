<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/galeri" />
                    <h1 class="header-title text-center mb-5">Edit Data Galeri</h1>

                    <form action="{{ url('admin/galeri', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="judul" value="{{ $galeri->judul }}">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-3 col-form-label">Poto</label>
                            <div class="col-md-5">
                                <img src="{{ url("public/$galeri->poto") }}" style="width:50%;"
                                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                            </div>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="poto" accept=".jpg, .png, .jpeg" value="{{ $galeri->poto }}">
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
