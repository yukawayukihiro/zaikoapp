//商品情報一覧画面と商品情報詳細画面でソート機能を実装
$(function() {
    $('#selectPrice').change(function () {
        $('#contentsForm').submit();
    });
});