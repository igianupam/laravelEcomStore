@extends('master')

@section('title', 'Brand')


@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                @include('includes.breadcum')
               <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('brands.store') }}">
                                    @csrf
                                    @include('brands.fields')
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <a href="{{ route('brands.index') }}" class="btn btn-secondary waves-effect waves-light">Back</a>
                                            <button type="submit" class="btn btn-dark waves-effect waves-light">Save</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    @endsection
