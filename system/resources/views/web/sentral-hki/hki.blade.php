<x-web>
    <section class="page-header page-header__dark">
        <div class="container" style="height: 1%">
            <h2>Data hki Internal</h2>
        </div>
    </section>

    <section class="history-one">
        <div class="container">
            <div class="history-one__single">
                <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                    @foreach ($list_hki->groupBy('tahun_terbit') as $tahun_terbit => $val)
                        <li class="nav-item">
                            <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab"
                                href="#tahun_terbit-{{ $tahun_terbit }}" role="tab">Tahun {{ $tahun_terbit }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="myTabContent">
                    @foreach ($list_hki->groupBy('tahun_terbit') as $tahun_terbit => $list_hki)
                        <div class="tab-pane fade show active" id="tahun_terbit-{{ $tahun_terbit }}" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12 mb-5">
    
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th class="text-center">No</th>
                                            <th class="text-left"> Judul</th>
                                            <th class="text-center"> Aksi</th>
                                        </thead>
                                        @php
                                            $no = 1;
                                        @endphp
                                        <tbody>
                                            @foreach ($list_hki as $hki)
                                                <tr>
                                                    <td class="text-center">{{ $no++ }}</td>
                                                    <td class="text-left">{{ $hki->nama }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ url("public/$hki->file") }}"
                                                            target="_blank" class="btn btn-info"> <span class="fa fa-info"> Lihat Dokumen</span>
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
