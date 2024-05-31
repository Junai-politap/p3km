<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">                           
                <x-button.back-button url="admin/profil" />
                 <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Detail Profil</h3>
                    </div>
                    
                    <div class="card-body">
                        

                        <strong> {{ $profil->judul }}</strong>                
                        <hr>
                        <strong> {!! nl2br($profil->text) !!}</strong>
                        <hr>
                    </div>
                    
                </div> 
                
            </div>
            <div class="col-md-1"></div>
        </div>
        
    </div>
</x-app>