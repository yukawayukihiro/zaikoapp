//ここからトークン送信処理
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(function() {
	$('#searchBtn').click(function () {
		$.ajax({
			url: "/zaiko.search",
			type: "POST",
            datatype: "html",
        }).done(function(data) {
			//成功時の処理
			//alert("検索に成功しました");
		}).fail(function(data) {
			console.log('error');
			//alert("検索結果の取得に失敗しました");
           });
		});
});
