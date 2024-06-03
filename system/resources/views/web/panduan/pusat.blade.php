<x-web>
    @include('title.title', [
        'title' => 'PANDUAN PUSAT',
    ])

    <section class="history-one">
        <div class="container">
            <div class="history-one__single">
                <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                    @foreach ($list_panduan->groupBy('tahun_terbit') as $tahun_terbit => $val)
                        <li class="nav-item">
                            <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab"
                                href="#tahun_terbit-{{ $tahun_terbit }}" role="tab">Tahun {{ $tahun_terbit }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="myTabContent">
                    @foreach ($list_panduan->groupBy('tahun_terbit') as $tahun_terbit => $list_panduan)
                        <div class="tab-pane fade show active" id="tahun_terbit-{{ $tahun_terbit }}" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12 mb-5">
    
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th class="text-center">No</th>
                                            <th class="text-center"> Judul Panduan</th>
                                            <th class="text-center"> Aksi</th>
                                        </thead>
                                        @php
                                            $no = 1;
                                        @endphp
                                        <tbody>
                                            @foreach ($list_panduan as $panduan)
                                                <tr>
                                                    <td class="text-center">{{ $no++ }}</td>
                                                    <td class="text-center">{{ $panduan->nama }}</td>
                                                    
    
                                                    <td class="text-center">
                                                        <a href="{{ url("public/$panduan->file") }}" target="_blank"
                                                            class="btn btn-info"> <i class="fa fa-check"></i> File
                                                            PDF</a>
                                                    </td>
                                                    
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
