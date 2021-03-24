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
                                    <a href="#">Product' list</a>
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
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Products</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                    <select class="js-select2" name="property">
                        <option selected="selected">Products</option>
                        <option value="">Every User</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <div class="rs-select2--light rs-select2--sm">
                    <select class="js-select2" name="time">
                        <option selected="selected">Pages</option>
                        <option value="">Page 1</option>
                        <option value="">Page 2</option>
                        <option value="">Page 3</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
            <div class="table-data__tool-right">
                <a class="au-btn au-btn-icon au-btn--green au-btn--small"  href="{{ route('product.create') }}">
                    <i class="zmdi zmdi-plus"></i>add Product</a>
            </div>
        </div>


        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Product Name</th>
                        <th>Product image</th>
                        <th>SKE</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $prod)

                    <tr>
                        <td>{{ $prod->id }}</td>
                        <td><a href="{{ route('product.show', $prod->id  )}}"> {{ $prod->name }} </a></td>
                        <td>
                            <img  src="{{ asset('/storage/images/products/'. $prod->image) }}"  width="90px"/>
                        </td>
                        <td>{{ $prod->SKE }}</td>
                        <td>{{ $prod->price }}</td>
                        @foreach($prod->categories as $category)
                        <td>{{ $category->title }}</td>
                        @endforeach

                        <td>
                            <div class="table-data-feature">
                                <a class="item" data-toggle="tooltip" href="{{route('product.edit', $prod->id)}}" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a> 

                                <form action="{{route('product.destroy', $prod->id)}}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    @csrf
                                    <button class="item" type="submit" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>

                                <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                    <i class="zmdi zmdi-more"></i>
                </button> -->
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <!-- END DATA TABLE -->
    </div>
</div>


@endsection
