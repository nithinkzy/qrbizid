<?php

namespace App\Http\Controllers;

use App\Models\Business_Card;
use App\Http\Requests\StoreBusiness_CardRequest;
use App\Http\Requests\UpdateBusiness_CardRequest;

class BusinessCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(request()->tag);
        return view('bizcards.index', [
            'listings'  => Business_Card::paginate(1)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bizcards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBusiness_CardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusiness_CardRequest $request)
    {
        $formFields = $request->validated();

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        if ($request->hasFile('profile_picture')) {
            $formFields['profile_picture'] = $request->file('profile_picture')->store('profile_picture', 'public');
        }
        if ($request->hasFile('document')) {
            $formFields['document'] = $request->file('document')->store('document', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Business_Card::create($formFields);
        return redirect('/')->with('message', 'Biz Card created successfully !');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Business_Card  $business_Card
     * @return \Illuminate\Http\Response
     */
    public function show(Business_Card $business_Card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Business_Card  $business_Card
     * @return \Illuminate\Http\Response
     */
    public function edit(Business_Card $business_Card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusiness_CardRequest  $request
     * @param  \App\Models\Business_Card  $business_Card
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusiness_CardRequest $request, Business_Card $business_Card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Business_Card  $business_Card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business_Card $business_Card)
    {
        //
    }
}
