@extends('layouts.master_backend')
@section('conten')
            <div class="container">
             <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h1 class="title-1">Vegetable</h1>

                                    <a href="{{route('p.create')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circl'></i>Add Vegetable </a>

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
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th class="text-right">Picture</th>
                                                <th class="text-right">price</th>
                                                <th class="text-right">Description</th>
                                                <th class="text-right">Quantity</th>
                                                <th class="text-right">create</th>
                                                <th class="text-right">Updated</th>
                                                <th class="text-right">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ( $product as $pro )
                                          <tr>
                                            <td>{{$product->firstItem()+$loop->index}}</td>
                                            <td>{{$pro->name}}</td>
                                            <td>
                                                <img src="{{asset('backend/product/resize/'.$pro->image)}}"alt="">
                                            </td>
                                            <td class="text-right">{{$pro->price}}</td>
                                            <td class="text-right">{{$pro->description}}</td>
                                            <td class="text-right">{{$pro->qty}}</td>
                                            <td class="text-right">{{$pro->created_at}}</td>
                                            <td class="text-right">{{$pro->updated_at}}</td>




                                    <td>
                                        <a href="{{url('admin/product/edit/'.$pro->product_id)}}"><i class='zmdi zmdi-edit'></i></a>
                                        <a href="{{url('admin/product/delete/'.$pro->product_id)}}"><i class='zmdi zmdi-delete'></i></a>
                                    </td>
                                </tr>



                                          @endforeach

                                        </tbody>
                                    </table>
                                    <div class="mt-3 container">
                                        {{$product->links('pagination::bootstrap-5')}}
                                    </div>
                                </div>
                            </div>
             </div>
            </div>
 @endsection
