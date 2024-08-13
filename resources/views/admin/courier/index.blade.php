@extends('admin.master')
@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Courier Add</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Courier</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courier Add</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Courier Add</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-success">{{session('message')}}</p>

                                <form class="needs-validation"  action="{{route('courier.store')}}" method="POST">
                                    @csrf

                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="category_name">Courier name</label>
                                            <input type="text" class="form-control" name="name" id="" value="">
                                            <p class="text-danger mt-2">{{$errors->has('name') ? $errors->first('name') : ''}}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email" id="" value="">
                                            <p class="text-danger mt-2">{{$errors->has('email') ? $errors->first('email') : ''}}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="">Mobile</label>
                                            <input type="number" class="form-control" name="mobile" id="" value="">
                                            <p class="text-danger mt-2">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="">Address</label>
                                            <textarea class="form-control" name="address" id=""></textarea>
                                            <p class="text-danger mt-2">{{$errors->has('address') ? $errors->first('address') : ''}}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="">Cost</label>
                                            <input type="number" class="form-control" name="cost" id="" value="">
                                            <p class="text-danger mt-2">{{$errors->has('cost') ? $errors->first('cost') : ''}}</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Create New Courier</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
