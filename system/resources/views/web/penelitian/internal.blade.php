<x-web>
    @include('title.title', [
        'title' => 'DATA PENELITIAN INTERNAL',
    ])

    <section class="history-one">
        <div class="container">
            <div class="history-one__single">
                <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                    @foreach ($list_penelitian->groupBy('tahun_terbit') as $tahun_terbit => $val)
                        <li class="nav-item">
                            <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab"
                                href="#tahun_terbit-{{ $tahun_terbit }}" role="tab">Tahun {{ $tahun_terbit }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="myTabContent">
                    @foreach ($list_penelitian->groupBy('tahun_terbit') as $tahun_terbit => $list_penelitian)
                        <div class="tab-pane fade show active" id="tahun_terbit-{{ $tahun_terbit }}" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12 mb-5">
    
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th class="text-left">No</th>
                                            <th class="text-left"> Judul Penelitian</th>
                                            <th class="text-left"> Ketua Penelitian</th>
                                            <th class="text-left"> Aksi</th>
                                        </thead>
                                        @php
                                            $no = 1;
                                        @endphp
                                        <tbody>
                                            @foreach ($list_penelitian as $penelitian)
                                                <tr>
                                                    <td class="text-left">{{ $no++ }}</td>
                                                    <td class="text-left">{{ $penelitian->judul }}</td>
                                                    <td class="text-left">{{ $penelitian->ketua_peneliti }}</td>
    
                                                    <td class="text-left">
                                                        <button class="btn btn-info" data-toggle="modal"
                                                            data-target="#modal-lg{{ $penelitian->id }}">
                                                            <span class="fa fa-info"></span>
                                                        </button>
                                                    </td>
                                                    <div class="modal fade" id="modal-lg{{ $penelitian->id }}">
                                                        <div class="modal-dialog modal-xl" style="margin-top: 10%">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title text-center">
                                                                        {{ $penelitian->judul }}
                                                                    </h4>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
    
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="card-body">
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-4 col-form-label">Nama
                                                                                Ketua Penelitian</label>
                                                                            <div class="col-sm-8">
                                                                                <label class="col-form-label">
                                                                                    : {{ $penelitian->ketua_peneliti }}</label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">
                                                                                Nama Anggota (Dosen)
                                                                            </label>
                                                                            <div class="col-sm-8">
                                                                                <label class="col-form-label">
                                                                                    :
                                                                                    {!! nl2br( $penelitian->anggota_dosen )!!}</label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
    
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">
                                                                                Nama Anggota (Mahasiswa)
                                                                            </label>
                                                                            <div class="col-sm-8">
                                                                                <label class="col-form-label">
                                                                                    :
                                                                                    {!! nl2br( $penelitian->anggota_mahasiswa )!!}</label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
    
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">
                                                                                Skema Penelitian
                                                                            </label>
                                                                            <div class="col-sm-8">
                                                                                <label class="col-form-label">
                                                                                    : {{ $penelitian->skema }}</label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">
                                                                                Deskripsi
                                                                            </label>
                                                                            <div class="col-sm-8">
                                                                                <label class="col-form-label">
                                                                                    : {!! nl2br( $penelitian->deskripsi )!!}</label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
    
                                                                    </div>
    
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>
                                            @endforeach
                                        </tbody>
    
                                    </table>
                                </div>
    
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-web>
