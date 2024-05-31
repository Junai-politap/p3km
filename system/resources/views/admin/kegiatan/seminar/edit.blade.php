<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <x-button.back-button url="admin/seminar" />
                    <h1 class="header-title text-center mb-5">Edit Data Seminar</h1>

                    <form action="{{ url('admin/seminar', $seminar->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Seminar</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_seminar" value="{{ $seminar->nama_seminar }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tanggal Seminar</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tanggal_seminar" value="{{ $seminar->tanggal_seminar }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Link Seminar</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="link_seminar" value="{{ $seminar->link_seminar }}">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Jenis Seminar</label>
                            <div class="col-sm-9">
                                <select name="jenis_seminar" class="form-control">
                                    <option value="Seminar Nasional" @if ($seminar->jenis_seminar == 'Seminar Nasional') selected @endif> Seminar Nasional
                                    </option>
                                    <option value="Seminar Internasional" @if ($seminar->jenis_seminar == 'Seminar Internasional') selected @endif> Seminar Internasional
                                    </option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label class="col-sm-3 col-form-label">Poto</label>
                            <div class="col-md-5">
                                <img src="{{ url("public/$seminar->poto") }}" style="width:50%;"
                                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                            </div>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="poto" accept=".jpg, .png, .jpeg" value="{{ $seminar->poto }}">
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
