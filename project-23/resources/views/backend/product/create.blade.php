@extends('layouts.master_backend')
@section('conten')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h5 class="card-header">Vegetable</h5>
                                <div class="card-body">
                                  <form action="{{url('admin/product/insert')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"/>
                                      <div class="mt-3">
                                    @error('name')
                                    <div class ="alert alert-danger">{{$message}}</div>
                                    @enderror
                                      </div>

                                    <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input
                                      type="text"
                                      name="price"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกราคาสินค้า"
                                      aria-describedby="defaultFormControlHelp"/>
                                      <div class="mt-3">
                                      @error('price')
                                      <div class ="alert alert-danger">{{$message}}</div>
                                      @enderror
                                      </div>

                                    <label for="defaultFormControlInput" class="form-label">Description</label>
                                    <input
                                      type="text"
                                      name="description"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกรายละเอียดสินค้า"
                                      aria-describedby="defaultFormControlHelp"/>
                                      <div class="mt-3">
                                      @error('description')
                                      <div class ="alert alert-danger">{{$message}}</div>
                                      @enderror
                                      </div>

                                      <label for="defaultFormControlInput" class="form-label">Quantity</label>
                                      <input
                                        type="number"
                                        name="qty"
                                        class="form-control"
                                        id="defaultFormControlInput"
                                        placeholder="จำนวนสินค้า"
                                        />
                                        <div class="mt-3">
                                        @error('qty')
                                        <div class ="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        </div>


                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Category</label>
                                        <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                            <option selected>กรุณาเลือกประเภทสินค้า</option>
                                            @foreach ( $category as $cat )
                                            <option value="{{$cat->category_id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                      </div>


                                    <label for="defaultFormControlInput" class="form-label">Images</label>

                                      <div class="input-group">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                        <input type="file" name="image" class="form-control" id="inputGroupFile02" />
                                    </div>

                                    @error('images')
                                    <div class ="alert alert-danger">{{$message}}</div>
                                    @enderror

                                    <input type="submit" value="บันทึก" class="btn btn-primary mt-3">
                                    <a href="{{ route ('p.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>

                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

@endsection

