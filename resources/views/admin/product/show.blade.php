@extends('admin.layouts.app')


@section('title')
<title>List of products</title>
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
                                    <a href="#">Product page</a>
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


<div class="row">
    <div class="col-md-12">
        <!-- RECENT REPORT-->
        <div class="recent-report3 m-b-40">
            <div class="title-wrap">
                <h3 class="title-3"> Product name: <strong> {{ $prods->name}} </strong></h3>

                <h5 class="title-3"> Product price: <strong> {{ $prods->price}} </strong></h5>
                <div class="chart-info-wrap">
                    <div class="chart-note">
                        
                        <span>
                        <form action="{{route('product.destroy', $prods->id)}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <span class="dot dot--red"></span>
                                    @csrf
                                    <button class="item" type="submit">Delete</button>
                                </form>
                        </span>
                    </div>
                    <div class="chart-note mr-0">
                    <span class="dot dot--green"></span>
                      <span>
                    <a class="item" href="{{route('product.edit', $prods->id)}}" title="Edit">
                    Edit product </a>
                     </span>
                    </div>
                </div>

            </div>

            <div class="chart-wrap">
            <div class="chart-wrap m-t-60">
                <img  src="{{ asset('/storage/images/products/'. $prods->image) }}"  height="30px" width="50%" class="product-photo"/>
            </div>
            </div>
        </div>
        <!-- END RECENT REPORT-->
    </div>

</div>


@endsection
