<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    <div id="containerMain" class="container-fluid">

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>SACADOR</th>
                    <th>DESCRIÇÃO</th>
                    <th>VENCIMENTO</th>
                    <th>STATUS</th>
                    <th>VLR PARCELA</th>
                    <th>QTD PARCELAS</th>
                    <th>VLR TOTAL</th>
                    <th>DATA PAGAMENTO</th>
                    <th>COMENTÁRIOS</th>
                    <th>RESPONSÁVEL</th>
                    <th>AÇÔES</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $bills as $bill )
                    <tr>
                        <td>{{ $bill->id }}</td>
                        <td>{{ $bill->sacador }}</td>
                        <td>{{ $bill->descricao }}</td>
                        <td>{{ $bill->vencimento }}</td>
                        <td title={{$bill->status}}>
                            <button class="btn btn-lg">
                                <i class="bi {{
                                ($bill->status == "aberto")
                                ? 'bi-ban text-danger'
                                : 'bi-check2-circle text-success'
                                }}">
                                </i>
                            </button>
                        </td>
                        <td>{{ $bill->vlr_parcela }}</td>
                        <td>{{ $bill->qtd_parcelas }}</td>
                        <td>{{ $bill->vlr_total }}</td>
                        <td>{{ $bill->dt_pagamento }}</td>
                        <td>{{ $bill->obs }}</td>
                        <td>{{ $bill->responsavel }}</td>
                        <td>
                            @can('level')
                                <button class="btn btn-sm btn-warning" onclick="showModal('modaleditar', {{ $bill }})">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
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

</x-app-layout>

<script src={{asset("./js/dashboard.js")}}></script>
