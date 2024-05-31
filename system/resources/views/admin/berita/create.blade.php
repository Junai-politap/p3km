<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/berita" />
                    <h1 class="header-title text-center mb-5">Tambah Data</h1>

                    <form action="{{ url('admin/berita') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Berita</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_berita" placeholder="Masukan Nama Berita">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tanggal Berita</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tanggal_berita">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="detail" class="summernote"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Poto</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="poto" accept=".jpg, .png, .jpeg">
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
