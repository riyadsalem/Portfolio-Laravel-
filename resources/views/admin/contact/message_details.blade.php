@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Message Details</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <section id="cd-timeline" class="cd-container">

                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-success">
                                    <i class="mdi mdi-adjust"></i>
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h3>Name</h3>
                                    <p class="mb-0 text-muted font-14">{{ $messagedetails->name }}</p>
                                    <span class="cd-date"><i class="far fa-meh-rolling-eyes" style="font-size:25px; color:#6fd088;"></i></span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->

                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-danger">
                                    <i class="mdi mdi-adjust"></i>
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h3>Email</h3>
                                    <p class="m-b-20 text-muted font-14">{{ $messagedetails->email }}</p>
                                    <span class="cd-date"><i class="far fa-meh-rolling-eyes" style="font-size:25px; color:#6fd088;"></i></span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->

                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-success">
                                    <i class="mdi mdi-adjust"></i>
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h3>Subject</h3>
                                    <p class="mb-0 text-muted font-14">{{ $messagedetails->subject }}</p>
                                    <span class="cd-date"><i class="far fa-meh-rolling-eyes" style="font-size:25px; color:#6fd088;"></i></span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->

                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-danger">
                                    <i class="mdi mdi-adjust"></i>
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h3>Phone</h3>
                                    <p class="m-b-20 text-muted font-14">+{{ $messagedetails->phone }}</p>
                                    <span class="cd-date"><i class="far fa-meh-rolling-eyes" style="font-size:25px; color:#6fd088;"></i></span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->
                            
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-success">
                                    <i class="mdi mdi-adjust"></i>
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h3>Date</h3>
                                    <p class="mb-0 text-muted font-14">{{ $messagedetails->created_at }}</p>
                                    <span class="cd-date"><i class="far fa-meh-rolling-eyes" style="font-size:25px; color:#6fd088;"></i></span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->

                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-danger">
                                    <i class="mdi mdi-adjust"></i>
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h3>Message</h3>
                                    <p class="m-b-20 text-muted font-14">{{ $messagedetails->message }}</p>
                                    <span class="cd-date"><i class="far fa-meh-rolling-eyes" style="font-size:25px; color:#6fd088;"></i></span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->


                        </section> <!-- cd-timeline -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection