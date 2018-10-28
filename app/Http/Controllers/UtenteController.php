<?php

namespace App\Http\Controllers;

use App\Utente;
use Illuminate\Support\Facades\BD;
use Illuminate\Http\Request;
use Auth;
use Input;

class UtenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = new Utente;

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Utente  $utente
     * @return \Illuminate\Http\Response
     */
    public function show(Utente $utente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Utente  $utente
     * @return \Illuminate\Http\Response
     */
    public function edit(Utente $utente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Utente  $utente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utente $utente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Utente  $utente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utente $utente)
    {
        //
    }

//    public function doLogin(Request $request) {
//        $user = DB::table('utentes')
//            ->where('email', $request->email)
//            ->where('password', $request->password);
//
//        if (isset($user)){
//            return view('welcome');
//        }
//        else {
//            return redirect('signin');
//        }
//    }
}
