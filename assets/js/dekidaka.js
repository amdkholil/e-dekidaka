$('#edit-prod').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var did = button.data('id')
    var id_prod = button.data('id_prod')
    var jam0 = button.data('jam0')
    var jam1 = button.data('jam1')
    var model = button.data('model')
    var qty = button.data('qty')
    var remark = button.data('remark')
    var modal = $(this)
    modal.find('.modal-body input#id').val(did)
    modal.find('.modal-body input#id_prod').val(id_prod)
    modal.find('.modal-body input#jam0').val(jam0)
    modal.find('.modal-body input#jam1').val(jam1)
    modal.find('.modal-body select#id_model').val(model)
    modal.find('.modal-body input#qty').val(qty)
    modal.find('.modal-body textarea#remark').val(remark)
})

$('#edit-ng').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var did = button.data('id')
    var id_prod = button.data('id_prod')
    var jam = button.data('jam')
    var model = button.data('id_model')
    var ng = button.data('id_ng')
    var qty = button.data('qty')
    var remark = button.data('remark')
    var modal = $(this)
    modal.find('.modal-body input#id').val(did)
    modal.find('.modal-body input#id_prod').val(id_prod)
    modal.find('.modal-body input#jam').val(jam)
    modal.find('.modal-body select#id_model').val(model)
    modal.find('.modal-body select#id_ng').val(ng)
    modal.find('.modal-body input#qty').val(qty)
    modal.find('.modal-body textarea#remark').val(remark)
})

$('#edit-bm').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var did = button.data('id')
    var id_prod = button.data('id_prod')
    var bm = button.data('id_bm')
    var jam = button.data('jam')
    var menit = button.data('menit')
    var mesin = button.data('mesin')
    var detail = button.data('detail')
    var penanganan = button.data('penanganan')
    var pic = button.data('pic')
    var modal = $(this)
    modal.find('.modal-body input#id_bd').val(did)
    modal.find('.modal-body input#id_prod_bd').val(id_prod)
    modal.find('.modal-body select#id_bm_bd').val(bm)
    modal.find('.modal-body input#jam_bd').val(jam)
    modal.find('.modal-body input#menit_bd').val(menit)
    modal.find('.modal-body input#mesin_bd').val(mesin)
    modal.find('.modal-body textarea#detail_bd').val(detail)
    modal.find('.modal-body textarea#penanganan_bd').val(penanganan)
    modal.find('.modal-body input#pic_bd').val(pic)
})

var url = window.location.pathname
var menuTab = url.substr(url.lastIndexOf('/') + 1)
document.getElementById('tes').innerHTML = menuTab
window.onload=function(){
    var akelas = document.getElementById('a-'+menuTab)
    var ckelas = document.getElementById('c-'+menuTab)
    if (akelas!==null || ckelas!==null) {
        akelas.setAttribute('aria-selected','true')
        akelas.classList += ' active'
        ckelas.classList += ' show active'
    }
}