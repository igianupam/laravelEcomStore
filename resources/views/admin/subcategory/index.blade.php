@extends('admin.master')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3 d-flex justify-content-between">
                <h1 class="h3 d-inline align-middle">Sub Category</h1>
                <a href="{{ route('admin.sub-categories.create') }}" class="btn btn-primary">Create</a>
            </div>

            <div class="row">

                <div class="card">
                    <div class="card-body">
                        <div class="col-12 col-lg-12 col-xxl-12">
                            @include('admin.category.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
