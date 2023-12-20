@extends('layouts.master_backend')
@section('conten')
<<<<<<< HEAD
 <!-- MAIN CONTENT-->
 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
      </div>                 
            <!-- END MAIN CONTENT-->
=======
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
                        
    <div class="col-lg-12 col-md-4 order-1">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('backend/assets/img/icons/unicons/chart-success.png')}}"
                                    alt="chart success" class="rounded" />
                            </div>

                        </div>
                        <span class="fw-semibold d-block mb-1">User</span>
                        <h3 class="card-title mb-2"> 2 คน</h3>
                    </div>
                </div>
                
            </div>

            <div class="col-lg-4 col-md-12 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('backend/assets/img/icons/unicons/chart-success.png')}}"
                                    alt="chart success" class="rounded" />
                            </div>

                        </div>
                        <span class="fw-semibold d-block mb-1">Category</span>
                        <h3 class="card-title mb-2"> 5 ประเภท</h3>
                    </div>
                </div>
                
            </div>

            <div class="col-lg-4 col-md-12 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('backend/assets/img/icons/unicons/chart-success.png')}}"
                                    alt="chart success" class="rounded" />
                            </div>

                        </div>
                        <span class="fw-semibold d-block mb-1">Product</span>
                        <h3 class="card-title mb-2"> 10 ชิ้น</h3>
                    </div>
                </div>
                
            </div>
         
        </div>
        
    </div>
 
    

</div>

</div>
<!-- / Content -->
>>>>>>> 9fdfd17eb080b01c541c7e0e5c6d76cc28723438
@endsection