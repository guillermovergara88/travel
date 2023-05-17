@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">{{ __('Super Admin Dashboard') }}</h3>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="text-center mb-3">
                        {{ __('You are logged in as SUPERADMIN.') }}
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('admin.index') }}" class="btn btn-primary">{{ __('View All Admins') }}</a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('admin.create') }}" class="btn btn-success">{{ __('Add New Admin') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
<style>
    .card-header {
        background-color: #f8fafc;
        border-bottom: none;
    }

    .card-body {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        padding: 1.25rem;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
</style>