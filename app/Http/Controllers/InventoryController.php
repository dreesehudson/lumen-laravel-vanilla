<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inventory::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $inventory = new Inventory;
        $inventory-> ref_book_id = request('ref_book_id');
        $inventory-> checked_out = request('checked_out')->default(false);
        $inventory-> check_out_date = request('checkout_date')->nullable();
        $inventory-> due_date = request('due_date')->nullable();
        $inventory-> notes = request('notes')->nullable();
        $inventory-> ref_user_id = request('ref_user_id')->nullable();

        $inventory->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Inventory::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Inventory $id)
    {
        $inventory = Inventory::find($id);
        $inventory-> ref_book_id = request('ref_book_id');
        $inventory-> checked_out = request('checked_out')->default(false);
        $inventory-> check_out_date = request('checkout_date')->nullable();
        $inventory-> due_date = request('due_date')->nullable();
        $inventory-> notes = request('notes')->nullable();
        $inventory-> ref_user_id = request('ref_user_id')->nullable();

        $inventory->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        Inventory::find($inventory->id)->delete();
    }
}
