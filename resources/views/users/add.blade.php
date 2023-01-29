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
                     <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
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
                        <div class="form-group mb-25">
                           <label for="name1">email</label>
                           <input type="text" class="form-control @error('name') is-invalid @enderror" id="name1" name="email" placeholder="Email" required>
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group mb-25">
                           <label for="name1">title</label>
                           <input type="text" class="form-control @error('name') is-invalid @enderror" id="title" name="title" placeholder="Title" required>
                           @error('title')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group mb-25">
                           <div class="countryOption">
                              <label for="countryOption">
                              Choose Ministry
                              </label>
                              <select class="js-example-basic-single js-states form-control" id="countryOption" name="ministry_id">
                                 @foreach ($ministries as $ministry) 
                                 <option value="{{$ministry->id}}">{{$ministry->name}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="form-group mb-25">
                           <div class="countryOption">
                              <label for="countryOption">
                              Choose Department
                              </label>
                              <select class="js-example-basic-single js-states form-control" id="countryOption" name="department_id">
                                 @foreach ($departments as $department) 
                                 <option value="{{$department->id}}">{{$department->name}}</option>
                                 @endforeach
                              </select>
                           </div>
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