<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Despesas') }}
        </h2>
    </x-slot>

    <div class="container">
        <form>

            <div class="row">
                <div class="col-md-6">
                    <label for="input_sacador" class="form-label">Sacador</label>
                    <input type="text" class="form-control" id="input_sacador" aria-describedby="sacador_dica">
                    <div id="sacador_dica" class="form-text">
                        Digite o nome do credor.
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="input_descricao" class="form-label">Descirção</label>
                    <input type="text" class="form-control" id="input_descricao" aria-describedby="descricao_dica">
                    <div id="descricao_dica" class="form-text">
                        Digite a justificativa dessa despesa.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <label for="input_vlr_total" class="form-label">Valor total</label>
                    <input type="number" class="form-control" id="input_vlr_total" aria-describedby="vlr_total_dica">
                    <div id="vlr_total_dica" class="form-text">
                        Digite o valor total da despesa.
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="input_vlr_parcela" class="form-label">Valor da parcela</label>
                    <input type="number" class="form-control" id="input_vlr_parcela" aria-describedby="vlr_parcela_dica">
                    <div id="vlr_parcela_dica" class="form-text">
                        Digite o valor da parcela ou do pagamento único.
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="input_dt_vencimento" class="form-label">DT Vencimento</label>
                    <input type="date" class="form-control" id="input_dt_vencimento" aria-describedby="vencimento_dica">
                    <div id="vencimento_dica" class="form-text">
                        Digite a data a ser pago caso haja.
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="input_qtd_parcelas" class="form-label">QTD Parcelas</label>
                    <input type="number" class="form-control" id="input_qtd_parcelas" aria-describedby="parcelas_dica">
                    <div id="parcelas_dica" class="form-text">
                        Digite a quantidade de parcelas que essa despesa tenha caso haja.
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="input_dt_pagamento" class="form-label">Pago em</label>
                    <input type="date" class="form-control" id="input_dt_pagamento" aria-describedby="dt_pagamento_dica">
                    <div id="dt_pagamento_dica" class="form-text">
                        Caso esteja pago, digite essa data.
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="input_status" class="form-label">Status</label>
                    <select name="" id="input_status" class="form-select" aria-describedby="sacador_dica">
                        <option value="pago">Pago</option>
                        <option value="aberto">Em Aberto</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="input_responsavel" class="form-label">Responsável</label>
                    <input type="email" class="form-control" id="input_responsavel" aria-describedby="sacador_dica">
                    <div id="sacador_dica" class="form-text">
                        Caso haja, informe o responsável por pagar esta conta.
                    </div>
                </div>

                <div class="col-md-8">
                    <label for="input_observacao" class="form-label">Observações</label>
                    <input type="text" class="form-control" id="input_observacao" aria-describedby="observacao_dica">
                    <div id="observacao_dica" class="form-text">
                        Tome qualquer nota a respeito desta despesa.
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

          </form>
    </div>

</x-app-layout>

