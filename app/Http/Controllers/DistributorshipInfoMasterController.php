<?php

namespace App\Http\Controllers;

use App\Models\DistributorshipInfoMaster;
use Illuminate\Http\Request;

class DistributorshipInfoMasterController extends Controller
{
    public function index()
    {
        return DistributorshipInfoMaster::with(['applicantDetail', 'officeInfo', 'warehouseAddress'])->get();
    }

    public function store(Request $request)
    {
        $distributorshipInfoMaster = DistributorshipInfoMaster::create($request->all());
        
        // Create associated child records if available
        if ($request->has('applicant_detail')) {
            $distributorshipInfoMaster->applicantDetail()->create($request->input('applicant_detail'));
        }

        if ($request->has('office_info')) {
            $distributorshipInfoMaster->officeInfo()->create($request->input('office_info'));
        }

        if ($request->has('warehouse_address')) {
            $distributorshipInfoMaster->warehouseAddress()->create($request->input('warehouse_address'));
        }

        return $distributorshipInfoMaster;
    }

    public function show($id)
    {
        return DistributorshipInfoMaster::with(['applicantDetail', 'officeInfo', 'warehouseAddress'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $distributorshipInfoMaster = DistributorshipInfoMaster::findOrFail($id);
        $distributorshipInfoMaster->update($request->all());

        // Update associated child records if available
        if ($request->has('applicant_detail')) {
            $distributorshipInfoMaster->applicantDetail()->update($request->input('applicant_detail'));
        }

        if ($request->has('office_info')) {
            $distributorshipInfoMaster->officeInfo()->update($request->input('office_info'));
        }

        if ($request->has('warehouse_address')) {
            $distributorshipInfoMaster->warehouseAddress()->update($request->input('warehouse_address'));
        }

        return $distributorshipInfoMaster;
    }

    public function destroy($id)
    {
        $distributorshipInfoMaster = DistributorshipInfoMaster::findOrFail($id);
        $distributorshipInfoMaster->delete();

        return 204;
    }
}
