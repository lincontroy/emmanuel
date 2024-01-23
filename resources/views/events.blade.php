@extends('layouts.main')
@section('content')

<div class="page-title-wrap typo-white">
                <div class="page-title-wrap-inner section-bg-img" data-bg="web/rs-plugin/assets/global.jpg">
					<span class="theme-overlay"></span>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-12">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-header -->
            <!-- Page Content -->
            <div class="content-wrapper pad-none">
                <div class="content-inner">
                    <!-- Events Section -->
                    <section id="events-section" class="events-section pad-top-120 pad-bottom-65">
                        <!-- Screan Reader Text -->
                        <h2 class="screen-reader-text">Events 2</h2>
                        <div class="container">
                            <!-- Row -->
                            <div class="row">
                                <!-- Col -->
                                <div class="col-md-12">
                                    <!--events Main wrap-->
                                    <div class="events-main-wrapper events-grid events-style-3">
                                        <div class="row">

                                        @foreach($events as $event)

                                            <!-- Col-md -->
                                            <div class="col-lg-4 col-md-6">
                                                <!--events Inner-->
                                                <div class="events-inner margin-bottom-35">
                                                    <!--events Thumb-->
													<div class="events-thumb margin-bottom-30 relative">
														<img src="web/images/chapel.jpg" class="img-fluid thumb w-100" width="768" height="550" alt="events-img" />
													</div>
                                                    <!--events details-->
                                                    <div class="events-details pad-none">
														<div class="event-date mb-2">{{$event->date}}<span class="event-time">{{$event->time}}</span>
														</div>
                                                        <div class="event-title pt-1 mb-3">
															<h5><a href="">{{$event->title}}</a></h5>
														</div>
														<div class="read-more">
															<a href="">{{$event->description}}</a>
														</div>                                                        
                                                    </div>
                                                    <!--events details-->
                                                </div>
                                                <!--events Inner Ends-->
                                            </div>
                                            <!--Col-md Ends-->

                                        @endforeach
                                  
                                                                                                                         

                                        </div>
                                        <!-- events Row -->
                                    </div>
                                    <!-- events Main wrap Ends -->
                                </div>
                                <!-- Col -->
                            </div>
                            <!-- Row -->
                        </div>
                    </section>
                    <!-- events Section Ends -->
                </div>
            </div>

@endsection