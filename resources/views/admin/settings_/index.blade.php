@extends('master')

@section('title', 'List Settings')

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            @include('includes.breadcum')
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="row">

                        <div class="col-12">
                            <div class="comon-card">
                                <div class="card-header mb-4">
                                    {{-- <div class="title">
                                        <h3>Striped Rows</h3>
                                    </div> --}}
                                    {{-- <div class="head-right">
                                        <ul>
                                            <li>
                                                <div class="dropdown card-dropdown dropstart">
                                                    <button class="dropdown-toggle " type="button" id="dropdownMenuButton2"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="comon-card-body">
                                    <div class="table-responsive comon-table1">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Setting Name</th>
                                                    <th>Value</th>
                                                    <th colspan="3">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($adminSettings))
                                                    @foreach ($adminSettings as $setting)
                                                        <tr>
                                                            <td>{{ $setting->display_name }}</td>
                                                            <td>
                                                                @if ($setting->input_type == 'file')
                                                                    <img src="{{ asset('storage/' . $setting->value) }}"
                                                                        alt="" height="50px"
                                                                        width="100px">
                                                                @else
                                                                    {!! $setting->value ?? '' !!}
                                                                @endif
                                                            </td>

                                                            <td style="width: 120px">
                                                                <div class='btn-group'>
                                                                    <a href="{{ route('settings.edit', [$setting->id]) }}"
                                                                        class='btn btn-default btn-xs '>
                                                                        <i class="far fa-edit"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row-->

        </div><!-- end row -->

    </div>

@endsection
