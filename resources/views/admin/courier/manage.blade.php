@extends('admin.master')
@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Courier</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Courier</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courier Manage</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Basic Datatable</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Sl</th>
                                            <th class="wd-15p border-bottom-0">Courier Name</th>
                                            <th class="wd-15p border-bottom-0">Cost</th>
                                            <th class="wd-15p border-bottom-0">Email</th>
                                            <th class="wd-15p border-bottom-0">Mobile</th>
                                            <th class="wd-15p border-bottom-0">Address</th>
                                             <th class="wd-20p border-bottom-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($courierData as $courier)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$courier->name}}</td>
                                                <td>{{$courier->cost}}</td>
                                                <td>{{$courier->email}}</td>
                                                <td>{{$courier->mobile}}</td>
                                                <td>{{$courier->address}}</td>
                                                <td  class="d-flex">
                                                    <a href="{{route('courier.edit',$courier->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                                                   <form action="{{route('courier.destroy', $courier->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                                </td>
                                            </tr>
                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
