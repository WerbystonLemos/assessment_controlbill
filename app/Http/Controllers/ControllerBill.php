<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\User;

class ControllerBill extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard', ['bills' => Bill::orderBy('id', 'desc')->get(), 'users' => User::get() ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("registerBill", ['users' => User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validacao = $request->validate([
            'input_sacador'       => ['required','string'],
            'input_descricao'     => ['required','string'],
            'input_vlr_total'     => ['required'],
            'input_vlr_parcela'   => ['required'],
            'input_dt_vencimento'    => ['required'],
            'input_qtd_parcelas'  => ['required','integer'],
            'input_dt_pagamento'  => ['required'],
            'input_status'        => ['required','string'],
            'input_responsavel'   => ['required','string'],
            'input_obs'           => ['string']
        ]);

        $bill = new Bill();
        $bill->sacador      = $request->input_sacador;
        $bill->descricao    = $request->input_descricao;
        $bill->vlr_total    = $request->input_vlr_total;
        $bill->vlr_parcela  = $request->input_vlr_parcela;
        $bill->vencimento   = $request->input_dt_vencimento;
        $bill->qtd_parcelas = $request->input_qtd_parcelas;
        $bill->dt_pagamento = $request->input_dt_pagamento;
        $bill->status       = $request->input_status;
        $bill->responsavel  = $request->input_responsavel;
        $bill->obs          = $request->input_observacao;
        $bill->save();
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validacao = $request->validate([
            'input_sacador'       => ['required','string'],
            'input_descricao'     => ['required','string'],
            'input_vlr_total'     => ['required'],
            'input_vlr_parcela'   => ['required'],
            'input_dt_vencimento'    => ['required'],
            'input_qtd_parcelas'  => ['required','integer'],
            'input_dt_pagamento'  => ['required'],
            'input_status'        => ['required','string'],
            'input_responsavel'   => ['required','string'],
            'input_obs'           => ['string']
        ]);

        $bill = Bill::find($request->input_id);
        $bill->sacador      = $request->input_sacador;
        $bill->descricao    = $request->input_descricao;
        $bill->vlr_total    = $request->input_vlr_total;
        $bill->vlr_parcela  = $request->input_vlr_parcela;
        $bill->vencimento   = $request->input_dt_vencimento;
        $bill->qtd_parcelas = $request->input_qtd_parcelas;
        $bill->dt_pagamento = $request->input_dt_pagamento;
        $bill->status       = $request->input_status;
        $bill->responsavel  = $request->input_responsavel;
        $bill->obs          = $request->input_observacao;
        $bill->save();
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return Bill::where('id', $id)->delete();
    }
}
