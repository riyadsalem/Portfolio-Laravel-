@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <h4 class="card-title">Update Services Page</h4><br>

                <form action="{{ route('update.service') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $service->id }}">

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service Title</label>
                        <div class="col-sm-10">
                            <input name="services_title" class="form-control" type="text" id="example-text-input" value="{{ $service->services_title }}">
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service Short Description</label>
                        <div class="col-sm-10">
                        <textarea name="service_description" class="form-control" rows="5">{{ $service->service_description }}</textarea>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service Long Description</label>
                        <div class="col-sm-10">
                        <textarea id="elm1" name="service_long_description">{{ $service->service_long_description }}</textarea>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service List Description 1</label>
                        <div class="col-sm-10">
                            <input name="services__list_desc_1" class="form-control" type="text" id="example-text-input" value="{{ $service->services__list_desc_1 }}">
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service List Description 2</label>
                        <div class="col-sm-10">
                            <input name="services__list_desc_2" class="form-control" type="text" id="example-text-input" value="{{ $service->services__list_desc_2 }}">
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service List Description 3</label>
                        <div class="col-sm-10">
                            <input name="services__list_desc_3" class="form-control" type="text" id="example-text-input" value="{{ $service->services__list_desc_3 }}">
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service List Description 4</label>
                        <div class="col-sm-10">
                            <input name="services__list_desc_4" class="form-control" type="text" id="example-text-input" value="{{ $service->services__list_desc_4 }}">
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service List Description 5</label>
                        <div class="col-sm-10">
                            <input name="services__list_desc_5" class="form-control" type="text" id="example-text-input" value="{{ $service->services__list_desc_5 }}">
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service List Description 6</label>
                        <div class="col-sm-10">
                            <input name="services__list_desc_6" class="form-control" type="text" id="example-text-input" value="{{ $service->services__list_desc_6 }}">
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service Image</label>
                        <div class="col-sm-10">
                            <input name="services_image" class="form-control" type="file" id="image" >
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">

                    <img class="rounded avatar-lg" id="showImage" 
                    src=" {{ asset($service->services_image) }}" 
                     alt="Card image cap">
                     
                    </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service Image Icon</label>
                        <div class="col-sm-10">
                            <input name="services_icon" class="form-control" type="file" id="icon" >
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">

                    <img class="rounded avatar-lg" id="showIcon" 
                    src="{{ asset($service->services_icon) }}" 
                     alt="Card image cap">
                     
                    </div>
                    </div>
                    <!-- end row -->


                    <input type="submit" class="btn btn-info waves-effect waves-light" 
                    value="Update Service Data">

                </form><!-- End: form  -->


                </div>
            </div>
        </div> <!-- end col -->
    </div>

</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $('#icon').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showIcon').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

    });
</script>

@endsection