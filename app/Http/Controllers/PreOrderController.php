<?php

namespace App\Http\Controllers;

use App\Models\PreOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePreOrderRequest;

class PreOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preOrders = PreOrder::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(9);
        return view('frontend.user.pre_order.index', compact('preOrders'));
    }


    public function admin_index(Request $request)
    {
         $sort_search =null;
        $preOrders = PreOrder::orderBy('created_at', 'desc');
        // if ($request->has('search')){
        //     $sort_search = $request->search;
        //     $tickets = $tickets->where('code', 'like', '%'.$sort_search.'%');
        // }
        $preOrders = $preOrders->paginate(15);
        return view('backend.reports.Pre_order_history', compact('preOrders', 'sort_search'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
            'email' => 'required',
            'phone' => 'required',
            'address' => 'nullable',
            'product_name' => 'required',
            'product_size' => 'nullable',
            'details' => 'nullable'
            ]);
            // dd($validatedData);
            PreOrder::create($validatedData + [
                'user_id' => auth()->id(),
                'name' => auth()->user()->name,
            ]);
             
            flash(translate('Pre Order has been inserted successfully'))->success();
            return redirect()->route('pre_order.index');
        } catch (\Throwable $th) {
            //  dd($th->getMessage());
            // throw $th;
            // Log::debug($th);    
            flash(translate('Something went wrong Try Again'))->error();
            // return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PreOrder  $preOrder
     * @return \Illuminate\Http\Response
     */
    public function show(PreOrder $preOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PreOrder  $preOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(PreOrder $preOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PreOrder  $preOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PreOrder $preOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PreOrder  $preOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreOrder $preOrder)
    {
        //
    }
}
