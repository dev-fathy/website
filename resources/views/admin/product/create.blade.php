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
                                    <a href="#">Product's form </a>
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
            <strong>Create your</strong> Product
        </div>

        <form action="{{ url('product')  }}" method="post" enctype="multipart/form-data" class="form-horizontal">

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
                        <label for="text-input" class=" form-control-label">Product name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="Product name" class="form-control">
                        <small class="form-text text-muted">Type the name of your product</small>
                    </div>
                </div>



                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Product Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="image" class="form-control-file">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Product SKE</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="SKE" placeholder="SKE code of Product"
                            class="form-control">
                        <small class="form-text text-muted">Type the SKE of your product</small>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Product Price</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="price" placeholder="Price of Product"
                            class="form-control">
                        <small class="form-text text-muted">Type the price like 70.99</small>
                    </div>
                </div>



                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="multiple-select" class=" form-control-label">Select Category</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="category_id" id="multiple-select" class="form-control">
                            @foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Select Brand</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="brand_id" id="select" class="form-control">
                            @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
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



<!-- <div class="card">
    <form action="{{ url('product')  }}" class="was-validated" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="uname">Product name:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter product name" name="name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Product image:</label>
    <input type="file" class="form-control" id="pwd" placeholder="Enter image" name="image" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="ske">Product SKE:</label>
    <input type="text" class="form-control" id="ske" placeholder="Enter SKE" name="SKE" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div> -->
@endsection