<?php

namespace App\Http\Controllers;

use App\Models\DistributorPending;
use Illuminate\Http\Request;

class DistributorPendingController extends Controller
{
    public function index()
    {
        return DistributorPending::all();
    }

    public function store(Request $request)
    {
        return DistributorPending::create($request->all());
    }

    public function show($id)
    {
        return DistributorPending::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $distributorPending = DistributorPending::findOrFail($id);
        $distributorPending->update($request->all());

        return $distributorPending;
    }

    public function destroy($id)
    {
        $distributorPending = DistributorPending::findOrFail($id);
        $distributorPending->delete();

        return 204;
    }
}
