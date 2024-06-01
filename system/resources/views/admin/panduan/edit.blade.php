<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/panduan" />
                    <h1 class="header-title text-center mb-5">Edit Data</h1>

                    <form action="{{ url('admin/panduan', $panduan->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Panduan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama" value="{{ $panduan->nama }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Jenis Panduan</label>
                            <div class="col-sm-9">
                                <select name="jenis_panduan" class="form-control">
                                    <option value="Panduan Internal" @if ($panduan->jenis_panduan == 'Panduan Internal') selected @endif> Panduan Internal
                                    </option>
                                    <option value="Panduan Pusat" @if ($panduan->jenis_panduan == 'Panduan Pusat') selected @endif> Panduan Pusat
                                    </option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tahun Terbit</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tahun_terbit" value="{{ $panduan->tahun_terbit }}">
                            </div>
                        </div>

                        

                        <div class="row mb-2">
                            <label class="col-sm-3 col-form-label">File PDF</label>
                            <div class="col-md-5">
                                <embed src="{{ url("public/$panduan->file") }}"
                                    type="application/pdf"">
                            </div>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="file" accept="application/pdf" value="{{ $panduan->file }}">
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
