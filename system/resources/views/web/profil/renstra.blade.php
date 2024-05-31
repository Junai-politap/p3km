<x-web>
    <section class="page-header page-header__dark">
        <div class="container" style="height: 1%">
            <h2>RENSTRA POLITAP </h2>
        </div>
    </section>

    <section class="history-one">
        <div class="container">
            <div class="history-one__single">
                <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                    @foreach ($list_renstra->groupBy('tahun_terbit') as $tahun_terbit => $val)
                        <li class="nav-item">
                            <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab"
                                href="#tahun_terbit-{{ $tahun_terbit }}" role="tab">Tahun {{ $tahun_terbit }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="myTabContent">
                    @foreach ($list_renstra->groupBy('tahun_terbit') as $tahun_terbit => $list_renstra)
                        <div class="tab-pane fade show active" id="tahun_terbit-{{ $tahun_terbit }}" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12 mb-5">

                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th class="text-left">No</th>
                                            <th class="text-left"> Judul Renstra</th>
                                            <th class="text-left"> Deskripsi</th>
                                            <th class="text-left"> Aksi</th>
                                        </thead>
                                        @php
                                            $no = 1;
                                        @endphp
                                        <tbody>
                                            @foreach ($list_renstra as $renstra)
                                                <tr>
                                                    <td class="text-left">{{ $no++ }}</td>
                                                    <td class="text-left">{{ $renstra->nama_renstra }}</td>
                                                    <td class="text-left">{!! nl2br($renstra->deskripsi) !!}</td>

                                                    <td class="text-left">
                                                        <a href="{{ url("public/$renstra->file_pdf") }}" target="_blank"
                                                            class="btn btn-info"> <i class="fa fa-check"></i> File
                                                            PDF</a>

                                                        <button class="btn btn-info" data-toggle="modal"
                                                            data-target="#modal-md{{ $renstra->id }}">
                                                            <span class="fa fa-info"> File Cover</span>
                                                        </button>
                                                    </td>
                                                    <div class="modal fade" id="modal-md{{ $renstra->id }}">
                                                        <div class="modal-dialog modal-xl" style="margin-top: 10%">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title text-center">
                                                                        {{ $renstra->judul }}
                                                                    </h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="card-body">

                                                                        <center>
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-12">
                                                                                    <img src="{{ url("public/$renstra->cover") }}"
                                                                                        style="width:40%;"
                                                                                        onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                                                                </div>
                                                                            </div>
                                                                        </center>
                                                                    </div>

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
