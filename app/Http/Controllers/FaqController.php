<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.website_settings.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.website_settings.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaqRequest $request)
    {

        try {
            Faq::create($request->validated());
            flash(translate('Faq has been inserted successfully'))->success();
            return redirect()->route('website.faq.index');
        } catch (\Throwable $th) {
            //throw $th;
            flash(translate('Something went wrong'))->error();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq  $faq)
    {
        return view('backend.website_settings.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaqRequest $request, Faq $faq)
    {

        try {
            $faq->update($request->validated());
        flash(translate('Faq has been Updated successfully'))->success();
        return redirect()->route('website.faq.index');

        } catch (\Throwable $th) {
            // throw $th;
            flash(translate('Something went wrong'))->error();
            return back();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq  $faq)
    {
        
        if($faq->delete()){
            flash(translate('Faq has been deleted successfully'))->success();
            return redirect()->route('website.faq.index');
        }
        else{
            flash(translate('Something went wrong'))->error();
            return back();
        }
    }
}
