<x-web>
    @include('title.title', [
            'title' => 'PROSEDUR HAK CIPTA',
        ])

    <section class="history-one">
        <div class="container">
            <div class="history-one__single">

                <div class="col-md-12 mb-5">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <th class="text-center">No</th>
                            <th class="text-left"> Nama Prosedur</th>
                            <th class="text-center"> Aksi</th>
                        </thead>

                        <tbody>
                            @foreach ($list_prosedur_hki as $prosedur_hki)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-left">{{ $prosedur_hki->nama }}</td>
                                    <td class="text-center">
                                        <a href="{{ url("public/$prosedur_hki->file") }}"
                                            target="_blank" class="btn btn-info"> <span class="fa fa-info"> Lihat Dokumen</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </section>
</x-web>
