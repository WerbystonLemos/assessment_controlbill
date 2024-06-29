<div class="modal modal-xl fade" id="modaleditar" tabindex="-1" aria-labelledby="modaleditarLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="modaleditarLabel">Editar Despesa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <form action="{{ route('registerBill.edit')}}" method="POST">
                @csrf
                @method('put')

                <div class="hidden">
                    <input type="hidden" id="input_id" name="input_id" value="" />
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="input_sacador" class="form-label">Sacador</label>
                        <input type="text" class="form-control" id="input_sacador" name="input_sacador" aria-describedby="sacador_dica" value="">
                    </div>

                    <div class="col-md-6">
                        <label for="input_descricao" class="form-label">Descirção</label>
                        <input type="text" class="form-control" id="input_descricao" name="input_descricao" aria-describedby="descricao_dica">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label for="input_vlr_total" class="form-label">Valor total</label>
                        <input type="number" class="form-control" id="input_vlr_total" name="input_vlr_total" aria-describedby="vlr_total_dica">
                    </div>

                    <div class="col-md-2">
                        <label for="input_vlr_parcela" class="form-label">Valor da parcela</label>
                        <input type="number" class="form-control" id="input_vlr_parcela" name="input_vlr_parcela" aria-describedby="vlr_parcela_dica">
                    </div>

                    <div class="col-md-2">
                        <label for="input_dt_vencimento" class="form-label">DT Vencimento</label>
                        <input type="date" class="form-control" id="input_dt_vencimento" name="input_dt_vencimento" aria-describedby="vencimento_dica">
                    </div>

                    <div class="col-md-2">
                        <label for="input_qtd_parcelas" class="form-label">QTD Parcelas</label>
                        <input type="number" class="form-control" id="input_qtd_parcelas" name="input_qtd_parcelas" aria-describedby="parcelas_dica">
                    </div>

                    <div class="col-md-2">
                        <label for="input_dt_pagamento" class="form-label">Pago em</label>
                        <input type="date" class="form-control" id="input_dt_pagamento" name="input_dt_pagamento" aria-describedby="dt_pagamento_dica">
                    </div>

                    <div class="col-md-2">
                        <label for="input_status" class="form-label">Status</label>
                        <select id="input_status" name="input_status" class="form-select">
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
                        <input type="text" class="form-control" id="input_observacao" name="input_observacao">
                    </div>
                </div>

                <div class="row">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>
        </div>

      </div>
    </div>
</div>
