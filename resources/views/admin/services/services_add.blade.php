@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <h4 class="card-title">Services Page</h4><br>

                <form action="{{ route('store.service') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service Title</label>
                        <div class="col-sm-10">
                            <input name="services_title" class="form-control" type="text" id="example-text-input">

                            @error('services_title')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service Short Description</label>
                        <div class="col-sm-10">
                        <textarea name="service_description" class="form-control" rows="5"></textarea>

                          @error('service_description')
                            <span class="text-danger">{{ $message }} </span>
                          @enderror

                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service Long Description</label>
                        <div class="col-sm-10">
                        <textarea id="elm1" name="service_long_description"></textarea>

                          @error('service_long_description')
                            <span class="text-danger">{{ $message }} </span>
                          @enderror


                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service Code</label>
                        <div class="col-sm-10">
                            <input name="service_code" class="form-control" type="text" id="example-text-input">

                            @error('service_code	')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </div>
                    </div>

                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service quantity</label>
                        <div class="col-sm-10">
                            <input name="service_qty" class="form-control" type="text" id="example-text-input">

                            @error('service_qty')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </div>
                    </div>

                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Selling Price</label>
                        <div class="col-sm-10">
                            <input name="selling_price" class="form-control" type="text" id="example-text-input">

                            @error('selling_price')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </div>
                    </div>

                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Discount Price</label>
                        <div class="col-sm-10">
                            <input name="discount_price" class="form-control" type="text" id="example-text-input">

                            @error('discount_price')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service List Description 1</label>
                        <div class="col-sm-10">
                            <input name="services__list_desc_1" class="form-control" type="text" id="example-text-input">

                            @error('services__list_desc_1')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service List Description 2</label>
                        <div class="col-sm-10">
                            <input name="services__list_desc_2" class="form-control" type="text" id="example-text-input">

                            @error('services__list_desc_2')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service List Description 3</label>
                        <div class="col-sm-10">
                            <input name="services__list_desc_3" class="form-control" type="text" id="example-text-input">

                            @error('services__list_desc_3')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service List Description 4</label>
                        <div class="col-sm-10">
                            <input name="services__list_desc_4" class="form-control" type="text" id="example-text-input">

                            @error('services__list_desc_4')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service List Description 5</label>
                        <div class="col-sm-10">
                            <input name="services__list_desc_5" class="form-control" type="text" id="example-text-input">

                            @error('services__list_desc_5')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service List Description 6</label>
                        <div class="col-sm-10">
                            <input name="services__list_desc_6" class="form-control" type="text" id="example-text-input">

                            @error('services__list_desc_6')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service Image</label>
                        <div class="col-sm-10">
                            <input name="services_image" class="form-control" type="file" id="image" >

                            
                            @error('services_image')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">

                    <img class="rounded avatar-lg" id="showImage" 
                    src=" {{ url('upload/no_image.jpg') }}" 
                     alt="Card image cap">
                     
                    </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Service Image Icon</label>
                        <div class="col-sm-10">
                            <input name="services_icon" class="form-control" type="file" id="icon" >

                            
                            @error('services_icon')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">

                    <img class="rounded avatar-lg" id="showIcon" 
                    src=" {{ url('upload/no_image.jpg') }}" 
                     alt="Card image cap">
                     
                    </div>
                    </div>
                    <!-- end row -->


                    <input type="submit" class="btn btn-info waves-effect waves-light" 
                    value="Insert Service Data">

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