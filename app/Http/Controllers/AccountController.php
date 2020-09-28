<?php

namespace App\Http\Controllers;

use App\Account;
use App\Client;
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
        $usernames = Client::all()->pluck('username', 'id');
        $account_types = AccountType::all()->pluck('account_type', 'id');
        $data = compact('usernames', 'account_types');
        // dd($data);
        return view('accounts.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Account::create($request->all());
        return redirect()->route('accounts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        $owner = $account->client->first_name . $account->client->last_name;
        dd($owner);

        $info = [
            'Number' => $account->account_number,
            'Type' => $account->account_type->account_type,
            'Owner' => $owner,
            'Owner Username' => $account->client->username,
            'Owner Phone' => $account->client->phone_number,
            'Owner Email' => $account->client->email,
            'Active' => $account->active === 1 ? 'YES' : 'NO'
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
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
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
