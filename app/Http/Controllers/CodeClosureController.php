<?php

namespace App\Http\Controllers;

use App\Models\CodeClosure;
use Illuminate\Http\Request;

class CodeClosureController extends Controller
{
    public function index()
    {
        return CodeClosure::all();
    }

    public function store(Request $request)
    {
        return CodeClosure::create($request->all());
    }

    public function show($id)
    {
        return CodeClosure::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $codeClosure = CodeClosure::findOrFail($id);
        $codeClosure->update($request->all());

        return $codeClosure;
    }

    public function destroy($id)
    {
        $codeClosure = CodeClosure::findOrFail($id);
        $codeClosure->delete();

        return 204;
    }
}