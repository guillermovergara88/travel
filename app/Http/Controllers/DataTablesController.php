<?php

namespace App\Http\Controllers;

use App\Models\User;
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
}
