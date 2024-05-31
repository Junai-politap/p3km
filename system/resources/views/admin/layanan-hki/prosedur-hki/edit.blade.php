<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/prosedur-hki" />
                    <h1 class="header-title text-center mb-5">Edit Data</h1>

                    <form action="{{ url('admin/prosedur-hki', $prosedur->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama File</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama" value="{{ $prosedur->nama }}">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label class="col-sm-3 col-form-label">File PDF</label>
                            <div class="col-md-5">
                                <embed src="{{ url("public/$prosedur->file") }}"
                                    type="application/pdf" style="height: 250%;">
                            </div>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="file" accept="application/pdf" value="{{ $prosedur->file }}">
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
