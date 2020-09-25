<?php

namespace App\Http\Controllers;

use App\Account;
use App\AccountType;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $accounts = Account::all();
        $accounts = Account::with(['account_type','client'])->get();
        // $accounts = Account::with('account_type')->get()->toArray();
        // $accounts = Account::with('account_type')->first();
        // dd($accounts['account_number']);
        // $account_types = AccountType::with('accounts')->get();
        // dd($account_type);
        // foreach ($account_types as $key => $account_type) {
        //     // dd($account);
        //     foreach ($account_type->accounts as $key => $account) {
        //         dd($account->account_number);
        //     }
        // }
        // dd($accounts);
        $data = compact('accounts');
        return view('accounts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
