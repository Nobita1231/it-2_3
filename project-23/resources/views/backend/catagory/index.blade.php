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
                                    <th>Created_at</th>
                                    <th>Created_at</th>
                                    <th>Actions</th>
                                    
                                            </tr>
                                    <tbody>
                                            @foreach($category as $cat)
                                            <tr>
                                            <td>{{ $cat->category_id }}</td>
                                            <td>{{ $cat->name }}</td>
                                            <td>{{ $cat->created_at }}</td>
                                            <td>{{ $cat->updated_at }}</td>
                                            
                                            <td>
                                            <a href="{{ url('admin/catagory/edit',$cat->category_id) }}"><i>แก้ไข</i></a>
                                            <a href ="#"><i>ลบ</i></a>

                                            
                                            
                                            
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        </table>
                                </div>
                            </div>
             </div>
            </div>
                           

                                      
@endsection