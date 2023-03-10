@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="d-flex align-items-center user-member__title mb-30 mt-30">
               <h4 class="text-capitalize">edit information</h4>
            </div>
         </div>
      </div>
      <div class="card mb-50">
         <div class="row justify-content-center">
            <div class="col-sm-5 col-10">
               <div class="mt-40 mb-50">
                  <div class="edit-profile__body">
                     <form method="POST" action="{{ route('firestore.update', $basicInfo->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="account-profile d-flex align-items-center mb-4 ">
                           <div class="ap-img pro_img_wrapper">
                              <input id="file-upload" type="file" name="image" class="d-none">
                              <input type="hidden" name="old_image" value="{{ $basicInfo->image }}"
                              class="form-control">
                              <!-- Profile picture image-->
                              <label for="file-upload">
                              <img class="ap-img__main rounded-circle wh-120 bg-lighter d-flex" src="{{ asset('img/author/profile.png') }}" alt="profile">
                              <span class="cross" id="remove_pro_pic">
                              <span data-feather="camera"></span>
                              </span>
                              </label>
                           </div>
                           <div class="account-profile__title">
                              <h6 class="fs-15 ml-20 fw-500 text-capitalize">profile photo</h6>
                           </div>
                        </div>
                        <div class="form-group mb-25">
                           <label for="name1">name</label>
                           <input type="text" class="form-control" id="name1" name="name" placeholder="Name" value="{{ (!empty($basicInfo->name) ? $basicInfo->name : '') }}">
                        </div>
                        
                        <div class="form-group mb-25">
                           <label for="name2">Email</label>
                           <input type="email" class="form-control" id="name2" name="email" placeholder="sample@email.com" value="{{ (!empty($basicInfo->email) ? $basicInfo->email : '') }}">
                        </div>
                        <div class="form-group mb-25">
                           <label for="phoneNumber5">phone number</label>
                           <input type="tel" class="form-control" id="phoneNumber5" name="phone" placeholder="+440 2546 5236" value="{{ (!empty($basicInfo->phone) ? $basicInfo->phone : '') }}">
                        </div>
                        <div class="form-group mb-25">
                           <div class="countryOption">
                              <label for="countryOption">
                              country
                              </label>
                              <select class="js-example-basic-single js-states form-control" id="countryOption" name="country">
                                 <option {{ ($basicInfo->country=='USA' ? 'selected' : '') }} value="USA">USA</option>
                                 <option {{ ($basicInfo->country=='Bangladesh' ? 'selected' : '') }} value="Bangladesh">Bangladesh</option>
                                 <option {{ ($basicInfo->country=='Japan' ? 'selected' : '') }} value="Japan">Japan</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group mb-25">
                           <div class="cityOption">
                              <label for="cityOption">
                              city
                              </label>
                              <select class="js-example-basic-single js-states form-control" id="cityOption" name="city">
                                 <option {{ ($basicInfo->city=='Mymensingh' ? 'selected' : '') }} value="Mymensingh">Mymensingh</option>
                                 <option {{ ($basicInfo->city=='Dhaka' ? 'selected' : '') }} value="Dhaka">Dhaka</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group mb-25">
                           <label for="name3">company name</label>
                           <input type="text" class="form-control" id="name3" name="company" placeholder="company" value="{{ (!empty($basicInfo->company) ? $basicInfo->company : '') }}">
                        </div>
                        <div class="form-group mb-25">
                           <label for="phoneNumber2">Position</label>
                              <select class="js-example-basic-single js-states form-control" id="position" name="position" required>
                                 <option value="" selected disabled>Select Position</option>
                                 <option {{ ($basicInfo->position=='Senior Manager' ? 'selected' : '') }} value="Senior Manager">Senior Manager</option>
                                 <option {{ ($basicInfo->position=='Content Writer' ? 'selected' : '') }} value="Content Writer">Content Writer</option>
                                 <option {{ ($basicInfo->position=='Graphic Designer' ? 'selected' : '') }} value="Graphic Designer">Graphic Designer</option>
                                 <option {{ ($basicInfo->position=='Marketer' ? 'selected' : '') }} value="Marketer">Marketer</option>
                                 <option {{ ($basicInfo->position=='Project Manager' ? 'selected' : '') }} value="Project Manager">Project Manager</option>
                                 <option {{ ($basicInfo->position=='UI Designer' ? 'selected' : '') }} value="UI Designer">UI Designer</option>
                                 <option {{ ($basicInfo->position=='Business Development' ? 'selected' : '') }} value="Business Development">Business Development</option>
                              </select>
                        </div>
                        <div class="form-group mb-25 status-radio">
                           <label class="mb-15" for="phoneNumber2">status</label>
                           <div class="d-flex">
                              <div class="radio-horizontal-list d-flex flex-wrap">
                                 <div class="radio-theme-default custom-radio ">
                                    <input class="radio" type="radio" name="status" value="active" id="radio-hl1" {{ ($basicInfo->status=='active' ? 'checked' : '') }}>
                                    <label for="radio-hl1">
                                    <span class="radio-text">Active</span>
                                    </label>
                                 </div>
                                 <div class="radio-theme-default custom-radio ">
                                    <input class="radio" type="radio" name="status" value="deactivated" id="radio-hl2" {{ ($basicInfo->status=='deactivated' ? 'checked' : '') }}>
                                    <label for="radio-hl2">
                                    <span class="radio-text">Deactivated</span>
                                    </label>
                                 </div>
                                 <div class="radio-theme-default custom-radio ">
                                    <input class="radio" type="radio" name="status" value="blocked" id="radio-hl3" {{ ($basicInfo->status=='blocked' ? 'checked' : '') }}>
                                    <label for="radio-hl3">
                                    <span class="radio-text">Blocked</span>
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="button-group d-flex pt-25 justify-content-end">
                           <button class="btn btn-success btn-default btn-squared text-capitalize radius-md shadow2">Update
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