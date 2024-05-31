<x-app>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('admin/seminar/create') }}" class="btn btn-primary float-end"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h2 class="header-title">
                        <strong>
                            Data Seminar
                        </strong>
                    </h2>

                    <p class="text-muted font-size-13 mb-5"></p>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama Seminar</th>
                                <th class="text-center">Tanggal Seminar</th>
                                <th class="text-center">Link Seminar</th>
                                <th class="text-center">Poto</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_seminar as $seminar)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-button.info-button url="admin/seminar" id="{{ $seminar->id }}" />
                                            <x-button.edit-button url="admin/seminar" id="{{ $seminar->id }}" />
                                            <x-button.delete-button url="admin/seminar" id="{{ $seminar->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $seminar->nama_seminar }}</td>
                                    <td class="text-center">{{ date("d-m-Y", strtotime($seminar->tanggal_seminar)) }}</td>
                                    <td class="text-center"><a href="{{$seminar->link_seminar}}" target="_blank">{{ $seminar->link_seminar }}</a></td>
                                    <td class="text-center" style="width: 30%">
                                        <img src="{{ url("public/$seminar->poto") }}" style="width:50%;"
                                            onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
