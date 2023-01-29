@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="social-dash-wrap">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">Knowledgebase</h4>
                  <div class="breadcrumb-action justify-content-center flex-wrap">
                     <div class="action-btn">
                        <div class="form-group mb-0">
                           <div class="input-container icon-left position-relative">
                              <span class="input-icon icon-left">
                              <span data-feather="calendar"></span>
                              </span>
                              <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                              <span class="input-icon icon-right">
                              <span data-feather="chevron-down"></span>
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="dropdown action-btn">
                        <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="la la-download"></i> Export
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                           <span class="dropdown-item">Export With</span>
                           <div class="dropdown-divider"></div>
                           <a href="" class="dropdown-item">
                           <i class="la la-print"></i> Printer</a>
                           <a href="" class="dropdown-item">
                           <i class="la la-file-pdf"></i> PDF</a>
                           <a href="" class="dropdown-item">
                           <i class="la la-file-text"></i> Google Sheets</a>
                           <a href="" class="dropdown-item">
                           <i class="la la-file-excel"></i> Excel (XLSX)</a>
                           <a href="" class="dropdown-item">
                           <i class="la la-file-csv"></i> CSV</a>
                        </div>
                     </div>
                     <div class="dropdown action-btn">
                        <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="la la-share"></i> Share
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                           <span class="dropdown-item">Share Link</span>
                           <div class="dropdown-divider"></div>
                           <a href="" class="dropdown-item">
                           <i class="la la-facebook"></i> Facebook</a>
                           <a href="" class="dropdown-item">
                           <i class="la la-twitter"></i> Twitter</a>
                           <a href="" class="dropdown-item">
                           <i class="la la-google"></i> Google</a>
                           <a href="" class="dropdown-item">
                           <i class="la la-feed"></i> Feed</a>
                           <a href="" class="dropdown-item">
                           <i class="la la-instagram"></i> Instagram</a>
                        </div>
                     </div>
                     <div class="action-btn">
                        <a href="" class="btn btn-sm btn-primary btn-add">
                        <i class="la la-plus"></i> Add New</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="knowledgebase py-50">
            <div class="row justify-content-center">
               <div class="cus-6 col-md-10">
                  <div class="kb text-center">
                     <div class="kb__header-search" tabindex="0">
                        <form class="kb__header-search-form">
                           <div class="input-group">
                              <div class="kb__select-wrapper">
                                 <select class="kb__select">
                                    <option value=" ">All products</option>
                                    <option value="kb">Articles</option>
                                    <option value="post">Posts</option>
                                    <option value="dvfaq">FAQ</option>
                                    <option value="page">Pages</option>
                                 </select>
                              </div>
                              <input type="text" class="form-control ui-autocomplete-input" placeholder="Search anything" name="s" autocomplete="off">
                              <div class="input-group-append">
                                 <button type="submit" class="btn">Search
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="knowledgebase-details">
            <div class="row justify-content-center">
               <div class="col-lg-10">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="knowledgebase-breadcrumb">
                           <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#">Demo Home</a></li>
                                 <li class="breadcrumb-item"><a href="#">Plugins</a></li>
                                 <li class="breadcrumb-item"><a href="#">Introduction to Plugin</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Switch between accounts
                                 </li>
                              </ol>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="knowledgebase-adv">
                     <div class="row">
                        <div class="col-xxl-4 col-md-5">
                           <div class="card knowledgebase-adv__card  shadow-none radius-xs">
                              <div class="card-header px-20">
                                 <h6>Plugins</h6>
                              </div>
                              <div class="card-body">
                                 <div class="knowledgebase__list">
                                    <ul>
                                       <li>
                                          <div class="accordion" id="accordionExample1">
                                             <div class="d-flex flex-wrap">
                                                <div id="headingOne">
                                                   <div role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="knowledgebase__list-collapsed">
                                                      <div class="changelog__accordingArrow">
                                                         <span data-feather="chevron-right"></span>
                                                      </div>
                                                      Introduction to Plugin
                                                   </div>
                                                </div>
                                                <div id="collapseOne" class="collapse  show collapse-adv__area" aria-labelledby="headingOne" data-parent="#accordionExample1">
                                                   <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Switch between accounts</a>
                                                      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Installing vendor
                                                      marketplace
                                                      lorem vendor marketplace </a>
                                                      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Stop getting emails from
                                                      lorem</a>
                                                      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Threads to organize
                                                      discussions</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="accordion" id="accordionExample2">
                                             <div>
                                                <div id="headingOne2">
                                                   <div role="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2" class="collapsed knowledgebase__list-collapsed">
                                                      <div class="changelog__accordingArrow">
                                                         <span data-feather="chevron-right"></span>
                                                      </div>
                                                      Introduction to Plugin
                                                   </div>
                                                </div>
                                                <div id="collapseOne2" class="collapse collapse-adv__area" aria-labelledby="headingOne2" data-parent="#accordionExample2">
                                                   <div class="card-body p-0 pt-20 ml-3">
                                                      <ul>
                                                         <li>
                                                            <div class="accordion" id="accordionExample3">
                                                               <div class="d-flex flex-wrap">
                                                                  <div id="headingOne3">
                                                                     <div role="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3" class="collapsed knowledgebase__list-collapsed">
                                                                        <div class="changelog__accordingArrow">
                                                                           <span data-feather="chevron-right"></span>
                                                                        </div>
                                                                        Installing lorem marketplace
                                                                     </div>
                                                                  </div>
                                                                  <div id="collapseOne3" class="collapse collapse-adv__area" aria-labelledby="headingOne3" data-parent="#accordionExample3">
                                                                     <div class="nav flex-column nav-pills" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                                                                        <a class="nav-link" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Installing
                                                                        vendor
                                                                        marketplace
                                                                        lorem vendor marketplace
                                                                        </a>
                                                                        <a class="nav-link" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Stop
                                                                        getting emails from
                                                                        lorem</a>
                                                                        <a class="nav-link" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Threads
                                                                        to organize
                                                                        discussions</a>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </li>
                                                         <li>
                                                            <div class="accordion" id="accordionExample4">
                                                               <div class="d-flex flex-wrap">
                                                                  <div id="headingOne4">
                                                                     <div role="button" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4" class="collapsed knowledgebase__list-collapsed">
                                                                        <div class="changelog__accordingArrow">
                                                                           <span data-feather="chevron-right"></span>
                                                                        </div>
                                                                        Understand your actions in
                                                                        lorem
                                                                     </div>
                                                                  </div>
                                                                  <div id="collapseOne4" class="collapse collapse-adv__area" aria-labelledby="headingOne4" data-parent="#accordionExample4">
                                                                     <div class="nav flex-column nav-pills" id="v-pills-tab3" role="tablist" aria-orientation="vertical">
                                                                        <a class="nav-link" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Installing
                                                                        vendor
                                                                        marketplace
                                                                        lorem vendor marketplace
                                                                        </a>
                                                                        <a class="nav-link" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Stop
                                                                        getting emails from
                                                                        lorem</a>
                                                                        <a class="nav-link" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Threads
                                                                        to organize
                                                                        discussions</a>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="accordion" id="accordionExample5">
                                             <div class="d-flex flex-wrap">
                                                <div id="headingOne5">
                                                   <div role="button" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5" class="collapsed knowledgebase__list-collapsed">
                                                      <div class="changelog__accordingArrow">
                                                         <span data-feather="chevron-right"></span>
                                                      </div>
                                                      Productivity tools for your Plugin admin & change
                                                      password
                                                   </div>
                                                </div>
                                                <div id="collapseOne5" class="collapse collapse-adv__area" aria-labelledby="headingOne5" data-parent="#accordionExample5">
                                                   <div class="nav flex-column nav-pills" id="v-pills-tab4" role="tablist" aria-orientation="vertical">
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Installing
                                                      vendor
                                                      marketplace
                                                      lorem vendor marketplace
                                                      </a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Stop
                                                      getting emails from
                                                      lorem</a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Threads
                                                      to organize
                                                      discussions</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="accordion" id="accordionExample6">
                                             <div class="d-flex flex-wrap">
                                                <div id="headingOne6">
                                                   <div role="button" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6" class="collapsed knowledgebase__list-collapsed">
                                                      <div class="changelog__accordingArrow">
                                                         <span data-feather="chevron-right"></span>
                                                      </div>
                                                      Download, install, and upgrade
                                                   </div>
                                                </div>
                                                <div id="collapseOne6" class="collapse collapse-adv__area" aria-labelledby="headingOne6" data-parent="#accordionExample6">
                                                   <div class="nav flex-column nav-pills" id="v-pills-tab6" role="tablist" aria-orientation="vertical">
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Installing
                                                      vendor
                                                      marketplace
                                                      lorem vendor marketplace
                                                      </a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Stop
                                                      getting emails from
                                                      lorem</a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Threads
                                                      to organize
                                                      discussions</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="accordion" id="accordionExample7">
                                             <div class="d-flex flex-wrap">
                                                <div id="headingOne7">
                                                   <div role="button" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="false" aria-controls="collapseOne7" class="collapsed knowledgebase__list-collapsed">
                                                      <div class="changelog__accordingArrow">
                                                         <span data-feather="chevron-right"></span>
                                                      </div>
                                                      Explore plans & features
                                                   </div>
                                                </div>
                                                <div id="collapseOne7" class="collapse collapse-adv__area" aria-labelledby="headingOne7" data-parent="#accordionExample7">
                                                   <div class="nav flex-column nav-pills" id="v-pills-tab7" role="tablist" aria-orientation="vertical">
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Installing
                                                      vendor
                                                      marketplace
                                                      lorem vendor marketplace
                                                      </a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Stop
                                                      getting emails from
                                                      lorem</a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Threads
                                                      to organize
                                                      discussions</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="accordion" id="accordionExample8">
                                             <div class="d-flex flex-wrap">
                                                <div id="headingOne8">
                                                   <div role="button" data-toggle="collapse" data-target="#collapseOne8" aria-expanded="false" aria-controls="collapseOne8" class="collapsed knowledgebase__list-collapsed">
                                                      <div class="changelog__accordingArrow">
                                                         <span data-feather="chevron-right"></span>
                                                      </div>
                                                      Profile Settings
                                                   </div>
                                                </div>
                                                <div id="collapseOne8" class="collapse collapse-adv__area" aria-labelledby="headingOne8" data-parent="#accordionExample8">
                                                   <div class="nav flex-column nav-pills" id="v-pills-tab8" role="tablist" aria-orientation="vertical">
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Installing
                                                      vendor
                                                      marketplace
                                                      lorem vendor marketplace
                                                      </a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Stop
                                                      getting emails from
                                                      lorem</a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Threads
                                                      to organize
                                                      discussions</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="accordion" id="accordionExample9">
                                             <div class="d-flex flex-wrap">
                                                <div id="headingOne9">
                                                   <div role="button" data-toggle="collapse" data-target="#collapseOne9" aria-expanded="false" aria-controls="collapseOne9" class="collapsed knowledgebase__list-collapsed">
                                                      <div class="changelog__accordingArrow">
                                                         <span data-feather="chevron-right"></span>
                                                      </div>
                                                      Listings Management
                                                   </div>
                                                </div>
                                                <div id="collapseOne9" class="collapse collapse-adv__area" aria-labelledby="headingOne9" data-parent="#accordionExample9">
                                                   <div class="nav flex-column nav-pills" id="v-pills-tab9" role="tablist" aria-orientation="vertical">
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Installing
                                                      vendor
                                                      marketplace
                                                      lorem vendor marketplace
                                                      </a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Stop
                                                      getting emails from
                                                      lorem</a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Threads
                                                      to organize
                                                      discussions</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="accordion" id="accordionExample10">
                                             <div class="d-flex flex-wrap">
                                                <div id="headingOne10">
                                                   <div role="button" data-toggle="collapse" data-target="#collapseOne10" aria-expanded="false" aria-controls="collapseOne10" class="collapsed knowledgebase__list-collapsed">
                                                      <div class="changelog__accordingArrow">
                                                         <span data-feather="chevron-right"></span>
                                                      </div>
                                                      Explore plans & features
                                                   </div>
                                                </div>
                                                <div id="collapseOne10" class="collapse collapse-adv__area" aria-labelledby="headingOne10" data-parent="#accordionExample10">
                                                   <div class="nav flex-column nav-pills" id="v-pills-tab10" role="tablist" aria-orientation="vertical">
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Installing
                                                      vendor
                                                      marketplace
                                                      lorem vendor marketplace
                                                      </a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Stop
                                                      getting emails from
                                                      lorem</a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Threads
                                                      to organize
                                                      discussions</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="accordion" id="accordionExample11">
                                             <div class="d-flex flex-wrap">
                                                <div id="headingOne11">
                                                   <div role="button" data-toggle="collapse" data-target="#collapseOne11" aria-expanded="false" aria-controls="collapseOne11" class="collapsed knowledgebase__list-collapsed">
                                                      <div class="changelog__accordingArrow">
                                                         <span data-feather="chevron-right"></span>
                                                      </div>
                                                      Miscellaneous
                                                   </div>
                                                </div>
                                                <div id="collapseOne11" class="collapse collapse-adv__area" aria-labelledby="headingOne11" data-parent="#accordionExample11">
                                                   <div class="nav flex-column nav-pills" id="v-pills-tab11" role="tablist" aria-orientation="vertical">
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Installing
                                                      vendor
                                                      marketplace
                                                      lorem vendor marketplace
                                                      </a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Stop
                                                      getting emails from
                                                      lorem</a>
                                                      <a class="nav-link" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Threads
                                                      to organize
                                                      discussions</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-8 col-md-7">
                           <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                 <div class="knowledgebase-adv__right">
                                    <h1>Switch between accounts</h1>
                                    <div class="knowledgebase-adv__content">
                                       <article>
                                          <h3>Configuration</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <a href="#">Read More</a>
                                       </article>
                                       <article>
                                          <h3>Research and experiments</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <img src="{{ asset('img/NoPath.png') }}" alt="img" class="w-100">
                                       </article>
                                       <article id="accordion-post1">
                                          <div id="article1">
                                             <div role="button" class="d-flex flex-wrap justify-content-between knowledgebase-adv__collapse collapsed " data-toggle="collapse" data-target="#article1area" aria-expanded="false" aria-controls="article1area">
                                                <h3>Measuring
                                                   elevation
                                                </h3>
                                                <div class="changelog__accordingArrow">
                                                   <span data-feather="chevron-right"></span>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="article1area" class="collapse" aria-labelledby="article1" data-parent="#accordion-post1">
                                             <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam
                                                nonumy eirmod tempor invidunt ut labore et dolore magna
                                                aliquyam
                                                erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                dolores et ea rebum. Stet clita kasd gubergren, no sea
                                                takimata
                                                sanctus est Lorem ipsum dolor sit amet….
                                             </p>
                                             <a href="#">Read More</a>
                                          </div>
                                       </article>
                                       <article id="accordion-post2">
                                          <div id="article2">
                                             <div role="button" class="d-flex flex-wrap justify-content-between knowledgebase-adv__collapse collapsed " data-toggle="collapse" data-target="#article2area" aria-expanded="false" aria-controls="article2area">
                                                <h3>Research and experiments
                                                </h3>
                                                <div class="changelog__accordingArrow">
                                                   <span data-feather="chevron-right"></span>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="article2area" class="collapse" aria-labelledby="article2" data-parent="#accordion-post2">
                                             <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam
                                                nonumy eirmod tempor invidunt ut labore et dolore magna
                                                aliquyam
                                                erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                dolores et ea rebum. Stet clita kasd gubergren, no sea
                                                takimata
                                                sanctus est Lorem ipsum dolor sit amet….
                                             </p>
                                             <a href="#">Read More</a>
                                          </div>
                                       </article>
                                       <p class="knowledgebase-updateDate">
                                          Last updated: <span> June 7, 2019</span>
                                       </p>
                                       <div class="card knowledgebase-help">
                                          <div class="card-body">
                                             <div class="mx-n20 my-n10 content-center flex-wrap">
                                                <h6 class="mx-20 my-10">Was this article helpful?</h6>
                                                <div class="mx-20 my-10">
                                                   <div class="button-group">
                                                      <button class="btn btn-sm btn-squared btn-outline-success "><span data-feather="smile"></span> yes</button>
                                                      <button class="btn btn-sm btn-squared btn-outline-warning "><span data-feather="frown"></span> No</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="knowledgebase-help-request d-flex align-items-center justify-content-between">
                                          <p>Still need help? <a href="#">Submit a Request</a></p>
                                          <div class="knowledgebase__share d-flex align-items-center">
                                             <p>Share this article:</p>
                                             <ul>
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-pinterest"></i></a></li>
                                                <li><a href="#"><i class="las la-link"></i></a></li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="knowledgebase-hr">
                                       </div>
                                       <div class="post-pagination d-flex justify-content-between">
                                          <div class="prev-post">
                                             <span><i class="las la-angle-left"></i>Previous article</span>
                                             <p><a href="#" class="title">Stop getting emails from lorem</a>
                                             </p>
                                          </div>
                                          <div class="next-post">
                                             <span>Next article <i class="las la-angle-right"></i></span>
                                             <p><a href="#" class="title">Use threads to organize
                                                discussions</a>
                                             </p>
                                          </div>
                                       </div>
                                       <div class="related-article card">
                                          <div class="card-body">
                                             <h4>Related articles</h4>
                                             <ul>
                                                <li><i class="las la-file-invoice"></i>Installing lorem
                                                   multi vendor marketplace
                                                </li>
                                                <li><i class="las la-file-invoice"></i>Copyright and
                                                   trademarks
                                                </li>
                                                <li><i class="las la-file-invoice"></i>Stop getting emails
                                                   from lorem
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div id="respond" class="comment-respond">
                                          <h4>Leave comment</h4>
                                          <form class="comment_form_wrapper row">
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label class="required" for="exampleInputEmail1">Name</label>
                                                   <input type="text" class="form-control cr-form-control" id="exampleInputEmail1" aria-describedby="exampleInputEmail1" required>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label class="required" for="exampleInputEmail2">Email</label>
                                                   <input type="email" class="form-control cr-form-control" id="exampleInputEmail2" aria-describedby="exampleInputEmail2" required>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="exampleFormControlTextarea1">Comment</label>
                                                   <textarea class="form-control cr-form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-default btn-squared btn-shadow-primary">Submit
                                                Comment</button>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                 <div class="knowledgebase-adv__right">
                                    <h1>Installing vendor marketplace
                                       lorem vendor marketplace 
                                    </h1>
                                    <div class="knowledgebase-adv__content">
                                       <article>
                                          <h3>Configuration</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <a href="#">Read More</a>
                                       </article>
                                       <article>
                                          <h3>Research and experiments</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <img src="{{ asset('img/NoPath.png') }}" alt="img" class="w-100">
                                       </article>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                 <div class="knowledgebase-adv__right">
                                    <h1>Stop getting emails from lorem</h1>
                                    <div class="knowledgebase-adv__content">
                                       <article>
                                          <h3>Configuration</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <a href="#">Read More</a>
                                       </article>
                                       <article>
                                          <h3>Research and experiments</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <img src="{{ asset('img/NoPath.png') }}" alt="img" class="w-100">
                                       </article>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                 <div class="knowledgebase-adv__right">
                                    <h1>Threads to organize discussions</h1>
                                    <div class="knowledgebase-adv__content">
                                       <article>
                                          <h3>Configuration</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <a href="#">Read More</a>
                                       </article>
                                       <article>
                                          <h3>Research and experiments</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <img src="{{ asset('img/NoPath.png') }}" alt="img" class="w-100">
                                       </article>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-profile2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                 <div class="knowledgebase-adv__right">
                                    <h1>Installing vendor marketplace
                                       lorem vendor marketplace 
                                    </h1>
                                    <div class="knowledgebase-adv__content">
                                       <article>
                                          <h3>Configuration</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <a href="#">Read More</a>
                                       </article>
                                       <article>
                                          <h3>Research and experiments</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <img src="{{ asset('img/NoPath.png') }}" alt="img" class="w-100">
                                       </article>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-profile3" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                 <div class="knowledgebase-adv__right">
                                    <h1>Installing vendor marketplace
                                       lorem vendor marketplace 
                                    </h1>
                                    <div class="knowledgebase-adv__content">
                                       <article>
                                          <h3>Configuration</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <a href="#">Read More</a>
                                       </article>
                                       <article>
                                          <h3>Research and experiments</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <img src="{{ asset('img/NoPath.png') }}" alt="img" class="w-100">
                                       </article>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-profile4" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                 <div class="knowledgebase-adv__right">
                                    <h1>Installing vendor marketplace
                                       lorem vendor marketplace 
                                    </h1>
                                    <div class="knowledgebase-adv__content">
                                       <article>
                                          <h3>Configuration</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <a href="#">Read More</a>
                                       </article>
                                       <article>
                                          <h3>Research and experiments</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <img src="{{ asset('img/NoPath.png') }}" alt="img" class="w-100">
                                       </article>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-profile5" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                 <div class="knowledgebase-adv__right">
                                    <h1>Installing vendor marketplace
                                       lorem vendor marketplace 
                                    </h1>
                                    <div class="knowledgebase-adv__content">
                                       <article>
                                          <h3>Configuration</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <a href="#">Read More</a>
                                       </article>
                                       <article>
                                          <h3>Research and experiments</h3>
                                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                             nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                             erat, sed diam voluptua. At vero eos et accusam et justo duo
                                             dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                             sanctus est Lorem ipsum dolor sit amet….
                                          </p>
                                          <img src="{{ asset('img/NoPath.png') }}" alt="img" class="w-100">
                                       </article>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection