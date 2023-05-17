@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">{{ __('Passengers Dashboard') }}</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('passenger.create') }}" class="btn btn-success">{{ __('Add New
                                    Passenger') }}</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('ID') }}</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Last Name') }}</th>
                                <th scope="col">{{ __('Code') }}</th>
                                <th scope="col">{{ __('DNI') }}</th>
                                <th scope="col">{{ __('Allergies') }}</th>
                                <th scope="col">{{ __('Medications') }}</th>
                                <th scope="col">{{ __('Observations') }}</th>
                                <th scope="col">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($passengers as $passenger)
                            <tr>
                                <th scope="row">{{ $passenger->id }}</th>
                                <td>{{ $passenger->name }}</td>
                                <td>{{ $passenger->last_name }}</td>
                                <td>{{ $passenger->code}}</td>
                                <td>{{ $passenger->dni}}</td>
                                <td>{{ $passenger->allergies}}</td>
                                <td>{{ $passenger->medications}}</td>
                                <td>{{ $passenger->observations }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('passenger.edit', $passenger->id) }}"
                                            class="btn btn-primary btn-sm mr-2">{{ __('Edit') }}</a>
                                        <form action="{{ route('passenger.destroy', $passenger->id) }}" method="POST"
                                            class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">{{ __('Delete')
                                                }}</button>
                                        </form>
                                    </div>
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
@endsection