@extends('layouts.admin')

@section('title','Clients')

@section('content')

<div class="modal fade" tabindex="-1" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">

   <form action="{{ route('admin.deleteclient') }}" method="post">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title">Are You Sure</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="client_delete_id" id="client_delete_id"/>
        <h3>Do you want to Delete the selected Client?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <button type="submit" class="btn btn-danger">YES</button>
      </div>
   </form>
 
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" id="showModal">
  <div class="modal-dialog">
    <div class="modal-content">

   {{-- <form action="{{ route('admin.deleteclient') }}" method="post">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title">Are You Sure</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="client_delete_id" id="client_delete_id"/>
        <h3>Do you want to Delete the selected Client?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <button type="submit" class="btn btn-danger">YES</button>
      </div>
   </form> --}}
   <div class="modal-header">
    <h5 class="modal-title">Client Details</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    <input type="hidden" name="client_delete_id" id="client_delete_id"/>
    <div>
      @foreach($clients as $client)
       <img src="{{ asset('assets/uploads/images/image.jpeg')}}" height="50px" width="50px" alt="alt"/><br/>
       First Name : {{$client->first_name}}<br/>
       Last Name : {{$client->last_name}}<br/>
       Name : {{$client->first_name . "" . $client->last_name}}<br/>
       Contact : {{$client->contact}}<br/>
       Email Address : {{$client->email}}<br/>
       Date of Birth : {{$client->dob_year  . "" . $client->dob_month  . " ". $client->dob_date}}<br/>
       Address : {{$client->str_add}}
       @endforeach
    </div>
  </div>

    </div>
  </div>
</div>

<div class="container-fluid px-4">
    <a href="{{ route('admin.addclient') }}" class="btn btn-primary float-end mt-3">+CREATE NEW</a><br>
    <div class="mt-3">
    <h2>CLIENTS</h2>
    </div>
    <div class="row">
                        
    </div><br>
                        @if(session('message'))
                            <div class="alert alert-success">
                                  {{ session('message') }}
                            </div>
                        @endif
                      <div class="table-responsive">
                       <table id="myDataTable" class="table table-dark">
                          <thead>
                            <tr>
                               <th>#</th>
                               <th>Image</th>
                               <th>Name</th>
                               <th>Contact</th>
                               <th>Email</th>
                               <th>Status</th>
                               <th>Actions</th>
                            </tr>
                          </thead>
                           
                          <tbody>
                          @foreach($clients as $client)
                             <tr>
                               <td>{{ $client->id }}</td>
                               <td>
                                  <img src="{{ asset('assets/uploads/images/image.jpeg')}}" height="50px" width="50px" alt="alt"/>
                               </td>
                               <td>{{ $client->first_name . " " . $client->last_name  }}</td>
                               <td>{{ $client->contact  }}</td>
                               <td>{{ $client->email  }}</td>
                               <td>{{ $client->status == 1 ? 'Active' : 'InActive'}}</td>
                               <td>
                                   <a href="{{ route('admin.editclient',$client->id)}}" class="btn btn-success">Edit</a>
                                   <button type="button" value="{{ $client->id }}" class="btn btn-danger deleteClientBtn">Delete</button>
                                   <button type="button" value="{{ $client->id }}" class="btn btn-info getClientBtn">View</button>
                               </td>
                             </tr>
                          @endforeach
                          </tbody>
                       </table>
                      </div>
</div>

@endsection

@section('scripts')

  <script>
      $(document).ready(function() {
        //  $('.deleteCategoryBtn').click(function() {
          $(document).on('click','.deleteClientBtn',function() {
            let client_id = $(this).val();
            $('#client_delete_id').val(client_id);
            $('#deleteModal').modal('show');
         });

         $(document).on('click','.getClientBtn',function() {
            let client_id = $(this).val();
            $('#client_delete_id').val(client_id);
            $('#showModal').modal('show');
         });
      });
  </script>

@endsection