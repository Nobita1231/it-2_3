@extends('layouts.master_backend')
@section('conten')


            <div class="container">
             <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h1 class="title-1">Catagory</h1>
                                     <a href="{{route('c.create')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circl'></i>Add Catagory</a>
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
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Actions</th>

                                            </tr>
                                    <tbody>
                                            @foreach($category as $cat)
                                            <tr>
                                            <td>{{ $category->firstItem()+$loop->index}}</td>
                                            <td>{{ $cat->name }}</td>
                                            <td>{{ $cat->created_at }}</td>
                                            <td>{{ $cat->updated_at }}</td>

                                            <td>
                                            <a href="{{ url('admin/catagory/edit/'.$cat->category_id) }}"><i class="zmdi zmdi-edit"></i></a>
                                            <a href ="{{url('admin/catagory/delete/'.$cat->category_id)}}"><i class="zmdi zmdi-delete"></i></a>




                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        </table>
                                        <div class="mt-3 container">
                                            {{$category->links('pagination::bootstrap-5')}}
                                        </div>
                                </div>
                            </div>
             </div>
            </div>



@endsection
