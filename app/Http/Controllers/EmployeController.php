<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Position;
use App\Http\Requests\StoreEmployeRequest;
use App\Http\Requests\UpdateEmployeRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class EmployeController extends Controller
{

    public function index(Request $request)
    {
        $data['q'] = $request->get('q');
        $employes = Employe::where('firstName', 'like', '%' . $data['q'] . '%')
            ->orderBy('id', 'DESC')
            ->paginate(15)
            ->withQueryString();
        return view('employee.index', compact('employes'));
    }


    public function create()
    {
        $positions = Position::all();
        return view('employee.create', compact('positions'));
    }


    public function store(StoreEmployeRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Employe::firstOrCreate($data);
        return redirect()->route('employes.index');
    }


    public function show(Employe $employe)
    {
        //
    }


    public function edit(Employe $employe)
    {
        $positions = Position::all();
        return view('employee.edit', compact('employe', 'positions'));
    }


    public function update(UpdateEmployeRequest $request, Employe $employe)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        $employe->update($data);
        return redirect()->route('employes.index', compact('employe'));
    }


    public function destroy(Employe $employe)
    {
        $employe->delete();
        return redirect()->route('employes.index', compact('employe'));
    }
}
