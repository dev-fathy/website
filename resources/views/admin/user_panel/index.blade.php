@extends('admin.layouts.app')

@section('title')
<title>List of Users</title>
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
                                    <a href="#">Users' list</a>
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
        <h3 class="title-5 m-b-35">Users</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                    <select class="js-select2" name="property">
                        <option selected="selected">Users</option>
                        <option value="">Admins</option>
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
<!--                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add User</button>-->
            </div>
        </div>
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>creation date</th>
                        <th>No. of purchases</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td class="process">Will be estimated in future</td>
                        <td>
                            <div class="table-data-feature">
                                <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                    <i class="zmdi zmdi-mail-send"></i>
                </button>
                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="zmdi zmdi-edit"></i>
                </button> -->
                                <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Delete"
                                    href="{{ url('/user/destroy', $user->id)}}">
                                    <i class="zmdi zmdi-delete"></i>
                                </button> -->

                                <form action="{{route('userpanel.destroy', $user->id)}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                    @csrf
                                    <button type="submit" class="submit-previous-form" data-toggle="tooltip" data-placement="top"
                                        title="Delete">
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
