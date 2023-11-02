@extends('layouts.admin')

@section('title','Add Category')

@section('content')

<div class="container-fluid px-4 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('UPDATE THE CLIENT') }} <a href="{{ route('admin.client') }}" class="btn btn-danger float-start"><-Back</a></div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                              <div> {{ $error }} </div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{route('admin.updateclient',$client->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group col-md-6">
                              <label for="name">First Name</label>
                              <input type="text" class="form-control" name="fname" value="{{ $client->first_name }}">
                            </div><br>
                            <div class="form-group col-md-6">
                              <label for="slug">Last Name</label>
                              <input type="text" class="form-control" name="lname" value="{{ $client->last_name }}">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="slug">Contact</label>
                                <input type="text" class="form-control" name="contact" value="{{ $client->contact }}">
                            </div><br>
                            <div class="form-group col-md-6">
                              <label for="image">Email Address</label>
                              <input type="email" class="form-control" name="email" value="{{ $client->email }}" >
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <select name="gender" class="form-control">
                                      <option value="male" {{ $client->gender == "male" ? 'selected' : '' ;}}>Male</option>
                                      <option value="female" {{ $client->gender == "female" ? 'selected' : '' ;}}>Female</option>
                                </select>
                            </div><br>
                            <div class="form-group col-md-6">
                              <label for="dob">Date Of Birth</label><br/>
                              <select name="year">
                                <option>Year</option>
                                <option value="1994" {{ $client->dob_year == "1994" ? 'selected' : '' ;}}>1994</option>
                                <option value="1995" {{ $client->dob_year == "1995" ? 'selected' : '' ;}}>1995</option>
                                <option value="1996" {{ $client->dob_year == "1996" ? 'selected' : '' ;}}>1996</option>
                                <option value="1997" {{ $client->dob_year == "1997" ? 'selected' : '' ;}}>1997</option>
                              </select>
                              <select name="month">
                                <option>Month</option>
                                <option value="jan" {{ $client->dob_month == "jan" ? 'selected' : '' ;}}>January</option>
                                <option value="feb" {{ $client->dob_month == "feb" ? 'selected' : '' ;}}>February</option>
                                <option value="mar" {{ $client->dob_month == "mar" ? 'selected' : '' ;}}>March</option>
                                <option value="apr" {{ $client->dob_month == "apr" ? 'selected' : '' ;}}>April</option>
                                <option value="may" {{ $client->dob_month == "may" ? 'selected' : '' ;}}>May</option>
                                <option value="jun" {{ $client->dob_month == "jun" ? 'selected' : '' ;}}>June</option>
                                <option value="jul" {{ $client->dob_month == "jul" ? 'selected' : '' ;}}>July</option>
                                <option value="aug" {{ $client->dob_month == "aug" ? 'selected' : '' ;}}>August</option>
                                <option value="sep" {{ $client->dob_month == "sep" ? 'selected' : '' ;}}>September</option>
                                <option value="oct" {{ $client->dob_month == "oct" ? 'selected' : '' ;}}>October</option>
                                <option value="nov" {{ $client->dob_month == "nov" ? 'selected' : '' ;}}>November</option>
                                <option value="dec" {{ $client->dob_month == "dec" ? 'selected' : '' ;}}>December</option>
                              </select>
                              <select name="date">
                                <option>Date</option>
                                <option value="1" {{ $client->dob_date == "1" ? 'selected' : '' ;}}>1</option>
                                <option value="2" {{ $client->dob_date == "2" ? 'selected' : '' ;}}>2</option>
                                <option value="3" {{ $client->dob_date == "3" ? 'selected' : '' ;}}>3</option>
                                <option value="4" {{ $client->dob_date == "4" ? 'selected' : '' ;}}>4</option>
                              </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="slug">Street No</label>
                                <input type="text" class="form-control" name="strno" value="{{ $client->str_no }}">
                            </div><br>
                            <div class="form-group col-md-6">
                              <label for="image">Street Address</label>
                              <input type="text" class="form-control" name="stradd" value="{{ $client->str_add }}">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="slug">City</label>
                                <input type="text" class="form-control" name="city" value="{{ $client->city }}">
                            </div><br>
                            <div class="form-group col-md-3">
                                <label for="status">Active/Inactive</label><br/>
                                <input type="checkbox" name="status" {{ $client->status == 1 ? 'checked' : '' ; }}/>
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