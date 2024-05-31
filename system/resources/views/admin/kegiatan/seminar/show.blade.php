<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <x-button.back-button url="{{ url('admin/seminar') }}" />
                        <a href="{{ url("admin/seminar/$seminar->id") }}/edit" class="btn btn-primary btn-sm float-end"><span class="fa fa-edit"></span> Edit Data</a>
                    </div>
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid circle" src="{{ url("public/$seminar->poto") }}"
                                style="width:100%">
                        </div>

                        <h3 class="profile-username text-center">
                            {{ $seminar->nama_seminar }}
                        </h3>
                    </div>
                    
                    
                </div>
                

                
                <div class="card card-primary">
                    <div class="card-body">
                        

                        <strong><i class="fas fa-check mr-1"></i> Link Seminar</strong>

                        <p class="text-muted">{{ $seminar->link_seminar }}</p>

                        <hr>

                        <strong><i class="fas fa-check mr-1"></i> Tanggal Seminar</strong>

                        <p class="text-muted">
                            <span class="tag tag-danger">{{ date("d-m-Y", strtotime($seminar->tanggal_seminar)) }}</span>
                        </p>
                    </div>
                    
                </div> 
                
            </div>
            <div class="col-md-3"></div>
        </div>
        
    </div>
</x-app>