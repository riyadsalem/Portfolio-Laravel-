@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <h4 class="card-title">Edit Blog Category Page</h4><br>

                <form action="{{ route('update.blog.category') }}" method="post">
                    @csrf

                    <input type="hidden" name="id" value="{{ $blogCategory->id }}">

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">
                            Blog Category Name</label>
                        <div class="col-sm-10">
                            <input name="blog_category" class="form-control" type="text" id="example-text-input" value="{{ $blogCategory->blog_category }}">
                        </div>
                    </div>
                    <!-- end row -->


                    <input type="submit" class="btn btn-info waves-effect waves-light" 
                    value="Update Blog Category">

                </form><!-- End: form  -->


                </div>
            </div>
        </div> <!-- end col -->
    </div>

</div>
</div>


@endsection