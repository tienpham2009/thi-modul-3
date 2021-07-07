<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    protected $agency;

    public function __construct(Agency $agency)
    {
        $this->agency = $agency;
    }

    public function show()
    {
        $agencys = $this->agency->all();
        return view('list', compact('agencys'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(CreateRequest $request)
    {
        $agency = new Agency();
        $agency->fill($request->all());
        $agency->save();

        return redirect()->route('show');
    }

    public function destroy($id)
    {
        $agency = $this->agency->findOrFail($id);
        $agency->delete();

        return redirect()->route('show');
    }

    public function edit($id)
    {
        $agency = $this->agency->findOrFail($id);

        return view('edit', compact('agency'));
    }

    public function update(Request $request, $id)
    {
        $agency = $this->agency->findOrFail($id);

        $agency->name = $request->name;
        $agency->code = $request->code;
        $agency->phone = $request->phone;
        $agency->email = $request->email;
        $agency->address = $request->address;
        $agency->manger_name = $request->manger_name;
        $agency->status = $request->status;

        $agency->save();

        return redirect()->route('show');
    }

    public function search(Request $request)
    {
        $text = $request->search;
        $agencys = $this->agency->where('name' , 'LIKE' , '%'.$text.'%' )->get();

       return view('list' , compact('agencys'));

    }
}
