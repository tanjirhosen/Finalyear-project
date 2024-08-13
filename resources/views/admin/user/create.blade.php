@extends('admin.master')
@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">User Module</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Courier</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Add</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">User Add Form</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-success">{{session('message')}}</p>

                                <form class="needs-validation"  action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="category_name">Full name</label>
                                            <input type="text" class="form-control" name="name" id="" value="">
                                            <p class="text-danger mt-2">{{$errors->has('name') ? $errors->first('name') : ''}}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="">Email Address</label>
                                            <input type="email" class="form-control" name="email" id="" value="">
                                            <p class="text-danger mt-2">{{$errors->has('email') ? $errors->first('email') : ''}}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="">Mobile Number</label>
                                            <input type="number" class="form-control" name="mobile" id="" value="">
                                            <p class="text-danger mt-2">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control" name="password" id="">
                                            <p class="text-danger mt-2">{{$errors->has('password') ? $errors->first('password') : ''}}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="">Role</label>
                                            <select class="form-control" name="role" required>
                                                <option value="" disabled selected> -- Select User Role</option>
                                                <option value="1"> Manager </option>
                                                <option value="2"> Admin </option>
                                                <option value="3"> Executive </option>
                                            </select>
                                            <p class="text-danger mt-2">{{$errors->has('role') ? $errors->first('role') : ''}}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="">Image</label>
                                            <input type="file" class="form-control-file" name="image" id="" accept="image/*">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Create New User</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


