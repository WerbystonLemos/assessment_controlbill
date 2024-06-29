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

function showModalAskDeleteBill(id)
{
    $(`#idBillDelete`).modal('show');
    $(`#input_idBillDelete`).val(id);
}

function deleteBill()
{
    let idBill = $("#input_idBillDelete").val()

    $.ajax({
        url: `/registerBill/${idBill}`,
        method: 'delete',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    })

    window.location.href = '/dashboard'

}
