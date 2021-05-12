<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;
class CompanieController extends Controller
{
    public function index(){
        $companies = Companie::all();
        //return $companies;
       return view('companie.index', compact('companies'));
    }

    public function create()
    {
        return view('companie.create');
    }

    public function store(Request $request)
    {
       $companie = Companie::create($request->all());

       return redirect('companies');
    }

    public function show($id){

        $companie = Companie::find($id);

        return view('companie.show', compact('companie'));

    }
}
