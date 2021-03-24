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
                                    <a href="#">Category's page </a>
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
                <h3 class="title-3"> Category title: <strong> {{ $categories->title}} </strong></h3>

                <div class="chart-info-wrap">
                    <div class="chart-note">

                        <span>
                            <form action="{{route('categories.destroy', $categories->id)}}" method="POST">
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
                            <a class="item" href="{{route('categories.edit', $categories->id)}}" title="Edit">
                                Edit Category </a>
                        </span>
                    </div>
                </div>

            </div>




        </div>
        <!-- END RECENT REPORT-->

        <div class="card">
            <div class="card-header">
                <h4><center>Brand List</center></h4>
            </div>
            <div class="card-body">
                <p class="text-muted m-b-15">This product belongs to these brands:
                    
                </p>

                <ul class="list-inline">
                    @foreach($categories->brands as $brand)
                    <li class="list-inline-item">
                        <a href="#">{{ $brand->name }}</a>
                    </li>
                    @endforeach
                </ul>

            </div>


    </div>


    <div class="back-link" style="text-align:center; display:block;">
    <p style="display:inline">Back to categories page.  </p><a  href="{{ url('categories')}}"> Click here</a>
        </div>




</div>


@endsection