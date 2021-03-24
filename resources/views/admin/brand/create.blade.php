@extends('admin.layouts.app')

@section('title')
<title>Create Product</title>
@endsection



@section('content')

<!-- BREADCRUMB-->
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Brand's form </a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB-->


<div class="col-md-12">


<div class="card">
    <div class="card-header">
        <strong>Create your</strong> Brand
    </div>

    <form action="{{ url('brands')  }}" method="post" enctype="multipart/form-data" class="form-horizontal">

    <div class="card-body card-block">
        @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label">Position</label>
                </div>
                <div class="col-12 col-md-9">
                    <p class="form-control-static">Admin</p>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Brand Name</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="name" placeholder="Brand Name" class="form-control">
                    <small class="form-text text-muted">Type the name of your Brand</small>
                </div>
            </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</form>
</div>


</div>

@endsection
