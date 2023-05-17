@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.3.3/css/rowReorder.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.3.3/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>

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
                    <table id="passengers-table" class="table table-hover">
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
                                <th scope="col">{{ __('Company') }}</th>
                                <th scope="col">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    $(document).ready(function() {
        $('#passengers-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('dt.passengers') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'code', name: 'code' },
                { data: 'dni', name: 'dni' },
                { data: 'allergies', name: 'allergies' },
                { data: 'medications', name: 'medications' },
                { data: 'observations', name: 'observations' },
                { data: 'company_name', name: 'company_name' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false },
            ],
           rowReorder: {
            selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });
</script>