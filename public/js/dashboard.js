function showModal(idModal, dadosInput)
{
    $(`#${idModal}`).modal('show');

    $(`#input_id`).val(dadosInput.id)
    $(`#input_sacador`).val(dadosInput.sacador)
    $(`#input_descricao`).val(dadosInput.descricao)
    $(`#input_vlr_total`).val(dadosInput.vlr_total)
    $(`#input_vlr_parcela`).val(dadosInput.vlr_parcela)
    $(`#input_dt_vencimento`).val(dadosInput.vencimento)
    $(`#input_qtd_parcelas`).val(dadosInput.qtd_parcelas)
    $(`#input_dt_pagamento`).val(dadosInput.dt_pagamento)
    $(`#input_status`).val(dadosInput.status)
    $(`#input_responsavel`).val(dadosInput.responsavel)
    $(`#input_observacao`).val(dadosInput.obs)
}









