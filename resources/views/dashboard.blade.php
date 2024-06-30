<link rel="stylesheet" href="{{ asset('./css/index.css') }}">
<link rel="stylesheet" href="{{ asset('./css/dashboard.css') }}">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   <div id="containerContentDashboard" class="container-fluid">

        <table class="table table-striped table-hover">
            <thead>
                <tr class="small">
                    <th class="small">#ID</th>
                    <th class="small">SACADOR</th>
                    <th class="small">DESCRIÇÃO</th>
                    <th class="small">VENCIMENTO</th>
                    <th class="small">STATUS</th>
                    <th class="small">R$ PARCELA</th>
                    <th class="small">QTD PARCELAS</th>
                    <th class="small">R$ TOTAL</th>
                    <th class="small">DATA PAGAMENTO</th>
                    <th class="small">COMENTÁRIOS</th>
                    <th class="small">RESPONSÁVEL</th>
                    <th class="small">AÇÔES</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $bills as $bill )
                    <tr>
                        <td class="small">{{ $bill->id }}</td>
                        <td class="small">{{ $bill->sacador }}</td>
                        <td class="small">{{ $bill->descricao }}</td>
                        <td class="small">{{ $bill->vencimento }}</td>
                        <td class="small text-center" title={{$bill->status}}>
                            <button class="btn btn-lg">
                                <i class="bi {{
                                ($bill->status == "aberto")
                                ? 'bi-ban text-danger'
                                : 'bi-check2-circle text-success'
                                }}">
                                </i>
                            </button>
                        </td>
                        <td class="small text-center">{{ $bill->vlr_parcela }}</td>
                        <td class="small text-center">{{ $bill->qtd_parcelas }}</td>
                        <td class="small text-center">{{ $bill->vlr_total }}</td>
                        <td class="small text-center">{{ $bill->dt_pagamento }}</td>
                        <td class="small">{{ $bill->obs }}</td>
                        <td class="small">{{ $bill->responsavel }}</td>
                        <td class="small">
                            @can('level')
                                <button class="btn btn-sm btn-warning" onclick="showModal('modaleditar', {{ $bill }})">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" onclick="showModalAskDeleteBill({{$bill->id}})">
                                    <i class="bi bi-trash"></i>
                                </button>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <x-dashboard-edit-modal />
    <x-dashboard-delete-modal />

</x-app-layout>

<script src={{asset("./js/dashboard.js")}}></script>
