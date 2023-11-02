@extends('layouts.admin')

@section('title','Add Category')

@section('content')

<div class="container-fluid px-4 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('CREATE NEW CLIENT') }} <a href="{{ route('admin.client') }}" class="btn btn-danger float-start"><-Back</a></div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                              <div> {{ $error }} </div>
                            @endforeach
                        </div>
                    @endif

                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                              <label for="name">First Name</label>
                              <input type="text" class="form-control" name="fname">
                            </div><br>
                            <div class="form-group col-md-6">
                              <label for="slug">Last Name</label>
                              <input type="text" class="form-control" name="lname">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="slug">Contact</label>
                                <input type="text" class="form-control" name="contact">
                            </div><br>
                            <div class="form-group col-md-6">
                              <label for="image">Email Address</label>
                              <input type="email" class="form-control" name="email" >
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <select name="gender" class="form-control">
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                </select>
                            </div><br>
                            <div class="form-group col-md-6">
                              <label for="dob">Date Of Birth</label><br/>
                              <select name="year">
                                <option>Year</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                              </select>
                              <select name="month">
                                <option>Month</option>
                                <option value="jan">January</option>
                                <option value="feb">February</option>
                                <option value="mar">March</option>
                                <option value="apr">April</option>
                                <option value="may">May</option>
                                <option value="jun">June</option>
                                <option value="jul">July</option>
                                <option value="aug">August</option>
                                <option value="sep">September</option>
                                <option value="oct">October</option>
                                <option value="nov">November</option>
                                <option value="dec">December</option>
                              </select>
                              <select name="date">
                                <option>Date</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="slug">Street No</label>
                                <input type="text" class="form-control" name="strno">
                            </div><br>
                            <div class="form-group col-md-6">
                              <label for="image">Street Address</label>
                              <input type="text" class="form-control" name="stradd" >
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="slug">City</label>
                                <input type="text" class="form-control" name="city">
                            </div><br>
                            <div class="form-group col-md-3">
                                <label for="status">Active/Inactive</label><br/>
                                <input type="checkbox" name="status"/>
                              </div>
                        </div><br>
                            <button type="submit" class="btn btn-primary float-end">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection