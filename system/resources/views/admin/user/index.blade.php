<x-app>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('admin/user/create') }}" class="btn btn-primary float-end"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h2 class="header-title">
                        <strong>
                            Data User
                        </strong>
                    </h2>

                    <p class="text-muted font-size-13 mb-5"></p>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Poto</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_admin as $admin)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-button.info-button url="admin/user" id="{{ $admin->id }}" />
                                            <x-button.edit-button url="admin/user" id="{{ $admin->id }}" />
                                            <x-button.delete-button url="admin/user" id="{{ $admin->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $admin->nama }}</td>
                                    <td class="text-center">{{ $admin->username }}</td>
                                    <td class="text-center" style="width: 20%">
                                        <img src="{{ url("public/$admin->poto") }}" style="width:30%; height:30%;"
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
