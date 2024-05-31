<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/hki" />
                    <h1 class="header-title text-center mb-5">Tambah Data</h1>

                    <form action="{{ url('admin/hki') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama File</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama File">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tahun Terbit</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tahun_terbit" placeholder="Masukan Tahun Terbit">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label class="col-sm-3 col-form-label">File PDF</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="file" accept="application/pdf">
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
