@extends('layouts.master_backend')
@section('conten')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Dashboard</h2>

                    </div>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <h3 style="color:rgb(0, 0, 0);">User</h3>
                                    <h4 class="card-title" style="color:rgb(0, 0, 0);">{{$u->count()}}<h4>
                                </div>
                            </div>
                            <div class="overview-chart">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                                <div class="text">
                                <h3 style="color:rgb(0, 0, 0);">Product</h3>
                                <h4 class="card-title" style="color:rgb(0, 0, 0);">{{$p->count()}}<h4>
                                </div>
                            </div>
                            <div class="overview-chart">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                 <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                                <div class="text">
                                <h3 style="color:rgb(0, 0, 0);">Category</h3>
                                <h4 class="card-title" style="color:rgb(0, 0, 0);">{{$c->count()}}</h4>
                                </div>
                            </div>
                            <div class="overview-chart">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- End of Main Content -->
    @endsection
