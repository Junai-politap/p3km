<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/seminar" />
                    <h1 class="header-title text-center mb-5">Tambah Data Seminar</h1>

                    <form action="{{ url('admin/seminar') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Seminar</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_seminar" placeholder="Masukan Nama Seminar">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tanggal Seminar</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tanggal_seminar">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Link Seminar</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="link_seminar" placeholder="Link Seminar">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Jenis Seminar</label>
                            <div class="col-sm-9">
                                <select name="jenis_seminar" class="form-control">
                                    <option value=""> Pilih Jenis Seminar</option>
                                    <option value="Seminar Nasional"> Seminar Nasional</option>
                                    <option value="Seminar Internasional"> Seminar Internasional</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-2">
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
