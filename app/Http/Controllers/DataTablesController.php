<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DataTablesController extends Controller
{
    public function users(Request $request)
    {
        $users = User::with('company')
            ->where('role', 'user')
            ->get(['id', 'name', 'email', 'role', 'company_id']);

        return DataTables::of($users)
            ->addColumn('company_name', function ($user) {
                return $user->company->name;
            })
            ->make(true);
    }

    public function passengers(Request $request)
    {
        $passengers = Passenger::with('user.company')->get();

        return DataTables::of($passengers)
            ->addColumn('company_name', function ($passenger) {
                return $passenger->user->company->name;
            })
            ->addColumn('actions', function ($passenger) {
                $editUrl = route('passenger.edit', $passenger->id);

                return '<a href="' . $editUrl . '" class="btn btn-primary btn-sm mr-2">' . __('Edit') . '</a>';
            })
            ->rawColumns(['actions'])
            ->make(true);

    }
}
