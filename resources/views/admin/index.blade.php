@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admins') }}</div>

                <div class="card-body">
                    <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">{{ __('Create Admin') }}</a>
                    @if($admins->count() > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>{{ __('ID') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admins as $admin)
                            <tr>
                                <td>{{ $admin->id }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>
                                    <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-primary btn-sm mr-2">{{ __('Edit') }}</a>
                                    <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" class="d-inline-block" id="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this?')">{{ __('Delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p>{{ __('No admins found.') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    document.getElementById("delete-form").addEventListener("submit", function(event) {
        var confirmDelete = confirm("Are you sure you want to delete this?");
        if (!confirmDelete) {
            event.preventDefault();
        }
    });
</script>
