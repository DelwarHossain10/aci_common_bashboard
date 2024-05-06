<?php

namespace App\Http\Controllers;

use App\Models\BusinessInformation;
use Illuminate\Http\Request;

class BusinessInformationController extends Controller
{
    public function index()
    {
        return BusinessInformation::all();
    }

    public function store(Request $request)
    {
        return BusinessInformation::create($request->all());
    }

    public function show($id)
    {
        return BusinessInformation::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $businessInformation = BusinessInformation::findOrFail($id);
        $businessInformation->update($request->all());

        return $businessInformation;
    }

    public function destroy($id)
    {
        $businessInformation = BusinessInformation::findOrFail($id);
        $businessInformation->delete();

        return 204;
    }
}
