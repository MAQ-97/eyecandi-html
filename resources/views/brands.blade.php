@extends('layouts.master')

@section('css')

@endsection

@section('breadcrumb')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">

                <h3 class="page-title">Brands</h3>
            </div>
        </div>
    </div>
    <!-- end page title -->
@endsection

@section('content')
    <div class="frame-topbar">
        <div class="">
            <div class="row">
                <div class="col-md-4">
                    <input name="" class="form-control" placeholder="Search...">
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-4">
                            <label style="margin-top: 5px;">Sort By</label>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control">
                                <option>All</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 offset-4">
                    <button class="btn btn-success float-right">Add New</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card-box brands">
                <div class="row">
                    <div class="col-md-12">
                        <a class="float-right trash-button"><i class="fe-trash"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="image-brand"><img src="{{asset('assets/images/brands/brand3small.png')}}"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Oakley</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center brand-company" >Company ID: 450392</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-12">
                        <button class="text-center btn btn-md btn-primary btn-frame">View Frames</button>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-4">
                        <h5 class="text-center color-grey">30-day Views</h5>
                        <h4 class="text-center">345</h4>
                    </div>
                    <div class="col-md-4 offset-4">
                        <h5 class="text-center color-grey">All Time Views</h5>
                        <h4 class="text-center">34k</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <img src="{{ url(asset('assets/images/image-brands.png')) }}">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-box brands">
                <div class="row">
                    <div class="col-md-12">
                        <a class="float-right trash-button"><i class="fe-trash"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="image-brand"><img src="{{asset('assets/images/brands/brand6small.png')}}"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Ray-Ban</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center brand-company" >Company ID: 450392</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-12">
                        <button class="text-center btn btn-md btn-primary btn-frame">View Frames</button>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-4">
                        <h5 class="text-center color-grey">30-day Views</h5>
                        <h4 class="text-center">345</h4>
                    </div>
                    <div class="col-md-4 offset-4">
                        <h5 class="text-center color-grey">All Time Views</h5>
                        <h4 class="text-center">34k</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <img src="{{ url(asset('assets/images/image-brands.png')) }}">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-box brands">
                <div class="row">
                    <div class="col-md-12">
                        <a class="float-right trash-button"><i class="fe-trash"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="image-brand"><img src="{{asset('assets/images/brands/brand1small.png')}}"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Nike</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center brand-company">Company ID: 450392</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-12">
                        <button class="text-center btn btn-md btn-primary btn-frame">View Frames</button>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-4">
                        <h5 class="text-center color-grey">30-day Views</h5>
                        <h4 class="text-center">345</h4>
                    </div>
                    <div class="col-md-4 offset-4">
                        <h5 class="text-center color-grey" >All Time Views</h5>
                        <h4 class="text-center">34k</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <img src="{{ url(asset('assets/images/image-brands.png')) }}">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-box brands">
                <div class="row">
                    <div class="col-md-12">
                        <a class="float-right trash-button"><i class="fe-trash"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="image-brand"><img src="{{asset('assets/images/brands/brand5small.png')}}"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Maui Jims</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center brand-company" >Company ID: 450392</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-12">
                        <button class="text-center btn btn-md btn-primary btn-frame">View Frames</button>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-4">
                        <h5 class="text-center color-grey">30-day Views</h5>
                        <h4 class="text-center">345</h4>
                    </div>
                    <div class="col-md-4 offset-4">
                        <h5 class="text-center color-grey">All Time Views</h5>
                        <h4 class="text-center">34k</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <img src="{{ url(asset('assets/images/image-brands.png')) }}">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-box brands">
                <div class="row">
                    <div class="col-md-12">
                        <a class="float-right trash-button"><i class="fe-trash"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="image-brand"><img src="{{asset('assets/images/brands/brand4small.png')}}"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Gucci</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center brand-company" >Company ID: 450392</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-12">
                        <button class="text-center btn btn-md btn-primary btn-frame">View Frames</button>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-4">
                        <h5 class="text-center color-grey">30-day Views</h5>
                        <h4 class="text-center">345</h4>
                    </div>
                    <div class="col-md-4 offset-4">
                        <h5 class="text-center color-grey">All Time Views</h5>
                        <h4 class="text-center">34k</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <img src="{{ url(asset('assets/images/image-brands.png')) }}">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-box brands">
                <div class="row">
                    <div class="col-md-12">
                        <a class="float-right trash-button"><i class="fe-trash"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="image-brand"><img src="{{asset('assets/images/brands/brand2small.png')}}"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">John Varvatos</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center brand-company" >Company ID: 450392</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-12">
                        <button class="text-center btn btn-md btn-primary btn-frame">View Frames</button>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-4">
                        <h5 class="text-center color-grey">30-day Views</h5>
                        <h4 class="text-center">345</h4>
                    </div>
                    <div class="col-md-4 offset-4">
                        <h5 class="text-center color-grey">All Time Views</h5>
                        <h4 class="text-center">34k</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <img src="{{ url(asset('assets/images/image-brands.png')) }}">
                </div>
            </div>
        </div>
    </div><!-- end col -->

    </div>

    <!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection