@extends('master')

@section('title', 'Update Settings')

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            @include('includes.breadcum')
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="comon-card">
                                <div class="comon-card-body comon-form">
                                    <form method="POST" action="{{ route('settings.update', $setting->id) }}" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        @include('settings.fields')
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <a href="{{ route('settings.index') }}" class="btn btn-secondary waves-effect waves-light">Back</a>
                                                <button type="submit" class="btn btn-dark waves-effect waves-light">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- end col -->
            </div><!-- end row-->

        </div><!-- end row -->

    </div>

@endsection
