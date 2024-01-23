@extends('layouts.master_backend')
@section('conten')
            <div class="container">
             <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h1 class="title-1">Product</h1>

                                    <a href="{{route('p.create')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circl'></i>Add Product </a>

                                </div>
                            </div>
                        </div>
                         </div>
                            </div>
                            <div class="row justify-content-center">
				                <div class="col-md-6 text-center mb-5">

				                </div>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>

                                            <tr>
                                                <th>date</th>
                                                <th>order ID</th>
                                                <th>name</th>
                                                <th class="text-right">price</th>
                                                <th class="text-right">quantity</th>
                                                <th class="text-right">total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="text-right">$999.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$999.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
             </div>
            </div>
 @endsection
