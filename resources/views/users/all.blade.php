@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="contact-breadcrumb">
               <div class="breadcrumb-main add-contact justify-content-sm-between ">
                  <div class=" d-flex flex-wrap justify-content-center ml-auto breadcrumb-main__wrapper">
                     <div class="action-btn mt-sm-0 mt-15">
                        <a href="{{ route('user.addNew') }}" class="btn px-20 btn-primary ">
                        <i class="las la-plus fs-16"></i>Add New
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ends: contact-breadcrumb -->
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 mb-30">
            <div class="card">
               <div class="card-header color-dark fw-500">
                  Users
               </div>
               <div class="card-body">
                  <div class="userDatatable adv-table-table global-shadow border-0 bg-white w-100 adv-table">
                     <div class="table-responsive">
                        @include('users.data_table')
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection