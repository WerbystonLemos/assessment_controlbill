<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Despesas') }}
        </h2>
    </x-slot>

    <div class="container">
        <form action="{{ route('registerBill.save') }}" method="POST">
            @csrf
            @method('POST')

            <div class="row">
                <div class="col-md-6">
                    <label for="input_sacador" class="form-label">Sacador</label>
                    <input type="text" class="form-control" id="input_sacador" name="input_sacador" />
                </div>

                <div class="col-md-6">
                    <label for="input_descricao" class="form-label">Descirção</label>
                    <input type="text" class="form-control" id="input_descricao" name="input_descricao" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <label for="input_vlr_total" class="form-label">Valor total</label>
                    <input type="number" class="form-control" id="input_vlr_total" name="input_vlr_total" />
                </div>

                <div class="col-md-2">
                    <label for="input_vlr_parcela" class="form-label">Valor da parcela</label>
                    <input type="number" class="form-control" id="input_vlr_parcela" name="input_vlr_parcela" />
                </div>

                <div class="col-md-2">
                    <label for="input_dt_vencimento" class="form-label">DT Vencimento</label>
                    <input type="date" class="form-control" id="input_dt_vencimento" name="input_dt_vencimento" />
                </div>

                <div class="col-md-2">
                    <label for="input_qtd_parcelas" class="form-label">QTD Parcelas</label>
                    <input type="number" class="form-control" name="input_qtd_parcelas" id="input_qtd_parcelas" />
                </div>

                <div class="col-md-2">
                    <label for="input_dt_pagamento" class="form-label">Pago em</label>
                    <input type="date" class="form-control" id="input_dt_pagamento" name="input_dt_pagamento" />
                </div>

                <div class="col-md-2">
                    <label for="input_status" class="form-label">Status</label>
                    <select name="input_status" id="input_status" class="form-select" aria-describedby="sacador_dica">
                        <option value="pago">Pago</option>
                        <option value="aberto">Em Aberto</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="input_responsavel" class="form-label">Responsável</label>
                    <input type="text" class="form-control" id="input_responsavel" name="input_responsavel" />
                </div>

                <div class="col-md-8">
                    <label for="input_observacao" class="form-label">Observações</label>
                    <input type="text" class="form-control" id="input_observacao" name="input_observacao" />
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>

        </form>
    </div>

</x-app-layout>

<script src={{ asset("./js/registerBill.js") }}></script>

