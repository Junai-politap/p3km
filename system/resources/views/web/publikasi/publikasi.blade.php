<x-web>
    @include('title.title', [
            'title' => 'DATA PUBLIKAS',
        ])>

    <section class="history-one">
        <div class="container">
            <div class="history-one__single">
                <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                    @foreach ($list_publikasi->groupBy('tahun_terbit') as $tahun_terbit => $val)
                        <li class="nav-item">
                            <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab"
                                href="#tahun_terbit-{{ $tahun_terbit }}" role="tab">Tahun {{ $tahun_terbit }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="myTabContent">
                    @foreach ($list_publikasi->groupBy('tahun_terbit') as $tahun_terbit => $list_publikasi)
                        <div class="tab-pane fade show active" id="tahun_terbit-{{ $tahun_terbit }}" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12 mb-5">
    
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th class="text-left">No</th>
                                            <th class="text-left"> Judul </th>
                                            <th class="text-left"> Nama Penulis</th>
                                            <th class="text-left"> Aksi</th>
                                        </thead>
                                        @php
                                            $no = 1;
                                        @endphp
                                        <tbody>
                                            @foreach ($list_publikasi as $publikasi)
                                                <tr>
                                                    <td class="text-left">{{ $no++ }}</td>
                                                    <td class="text-left">{{ $publikasi->judul }}</td>
                                                    <td class="text-left">{{ $publikasi->nama_penulis }}</td>
    
                                                    <td class="text-left">
                                                        <button class="btn btn-info" data-toggle="modal"
                                                            data-target="#modal-lg{{ $publikasi->id }}">
                                                            <span class="fa fa-info"></span>
                                                        </button>
                                                    </td>
                                                    <div class="modal fade" id="modal-lg{{ $publikasi->id }}">
                                                        <div class="modal-dialog modal-xl" style="margin-top: 10%">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title text-center">
                                                                        {{ $publikasi->judul }}
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
                                                                                Penulis</label>
                                                                            <div class="col-sm-8">
                                                                                <label class="col-form-label">
                                                                                    : {{ $publikasi->nama_penulis }}</label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">
                                                                                Nama Jurnal
                                                                            </label>
                                                                            <div class="col-sm-8">
                                                                                <label class="col-form-label">
                                                                                    : {{ $publikasi->nama_jurnal }}
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
    
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">
                                                                                Volume
                                                                            </label>
                                                                            <div class="col-sm-8">
                                                                                <label class="col-form-label">
                                                                                    : {{ $publikasi->volume }}
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
    
                                                                    
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">
                                                                                Deskripsi
                                                                            </label>
                                                                            <div class="col-sm-8">
                                                                                <label class="col-form-label">
                                                                                    : {!! nl2br( $publikasi->deskripsi )!!}</label>
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
