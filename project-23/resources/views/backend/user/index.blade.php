@extends('layouts.master_backend')
@section('conten')
            <!-- MAIN CONTENT-->
            
      
            <div class="container">
             <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h1 class="title-1">User</h1>
                                    
                                        
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
                                                <th>id</th>
                                                <th>name</th>
                                                <th class="text-right">email</th>
                                                <th class="text-right">phone</th>
                                                <th class="text-right"></th>
                                                <th class="text-right"></th>
                                            </tr>
                                            <tbody>
                                            @foreach ($user as $u)
                                            <tr>
                                                <td>{{$u->id}}</td> 
                                                <td>{{$u->name}}</td>
                                                <td class="text-right">{{$u->email}}</td>
                                                <td class="text-right">{{$u->phone}}</td>
                                                <td class="text-right"></td>
                                                <td>
                                                    <a href ="#"><i class='bx bxs-edit'></i></a>
                                                    <a href ="#"><i class='bx bxs-trash'></i></a>
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