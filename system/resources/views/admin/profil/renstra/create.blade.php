<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/renstra" />
                    <h1 class="header-title text-center mb-5">Tambah Data</h1>

                    <form action="{{ url('admin/renstra') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Renstra</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_renstra" placeholder="Masukan Nama Renstra">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tahun Renstra</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tahun_terbit" placeholder="Masukan Tahun Renstra">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                
                                <textarea name="deskripsi" class="summernote"></textarea>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">File PDF</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="file_pdf" accept="application/pdf">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">File Cover</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="cover" accept=".jpg, .png, .jpeg">
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
