<x-app>
    <div class="container-fluid">
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Dashboard</h4>
                </div>
                <div class="col-lg-6">
                    
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            
                            <h5 class="card-title mb-0">Jumlah Penelitian Internal</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $penelitian_internal }}
                                </h2>
                            </div>
                            <div class="col-4 text-end">
                                
                            </div>
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Jumlah Penelitian Eksternal</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $penelitian_DRTPM_APTV }}
                                </h2>
                            </div>
                            <div class="col-4 text-end">
                                
                            </div>
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Jumlah Pengabdian Internal</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $pengabdian_internal }}
                                </h2>
                            </div>
                            <div class="col-4 text-end">
                               
                            </div>
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Jumlah Pengabdian Eksternal</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $pengabdian_DRTPM_APTV }}
                                </h2>
                            </div>
                            <div class="col-4 text-end">
                                
                            </div>
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app>