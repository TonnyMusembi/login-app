<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyName;

class CompanyNameController extends Controller
{
    //

    public function index(){

        $company_names = CompanyName::all()->toArray();
        return array_reverse($company_names);    }


        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $company = new CompanyName([
            'company_name' => $request->input('company_name'),
            'detail' => $request->input('detail')
        ]);
        $company->save();

        return response()->json('Company created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = CompanyName::find($id);
        return response()->json($company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = CompanyName::find($id);
        $company->update($request->all());

        return response()->json('Company updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = CompanyName::find($id);
        $company->delete();
        return response()->json('Company deleted!');
    }
    
}
