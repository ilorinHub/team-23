@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="d-flex align-items-center user-member__title mb-30 mt-30">
               <h4 class="text-capitalize">add information</h4>
            </div>
         </div>
      </div>
      <div class="card mb-50">
         <div class="row justify-content-center">
            <div class="col-sm-5 col-10">
               <div class="mt-40 mb-50">
                  <div class="edit-profile__body">
                     <form method="POST" action="{{ route('ministry.store') }}" enctype="multipart/form-data">
                        @csrf
                        <br>
                        <br>
                        <div class="form-group mb-25">
                           <label for="name1">name</label>
                           <input type="text" class="form-control @error('name') is-invalid @enderror" id="name1" name="name" placeholder="Name" required>
                           @error('name')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="button-group d-flex pt-25 justify-content-end">
                           <button class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2">Submit
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection