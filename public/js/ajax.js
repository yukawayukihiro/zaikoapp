//ここからトークン送信処理
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#searchBtn').click(function () {
    //event.preventDefault(); // 既定の動作をキャンセルする

    // 以降のコードは変更なし
    $.ajax({
        url: "/zaiko.search",
        type: "POST",
        dataType: "json",
        data: {
            keyword: $('#keywordInput').val() // 検索キーワードを取得して指定する例
        }
    }).done(function(data) {
        // 成功時の処理
        // alert("検索に成功しました");
    }).fail(function(data) {
        console.log('error');
        // alert("検索結果の取得に失敗しました");
    });
});

$(document).ready(function () {
	$.ajax({
		url: "/zaiko.list",
		type: "GET",
		datatype: "json",
	}).done(function(data) {
		//成功時の処理alert("表示に成功しました");
	}).fail(function(data) {
		console.log('error');
		//alert("表示に失敗しました");
	   });
	});

//削除処理の非同期処理化
$('.deleteform').submit(function (event) {
	var deleteConfirm = confirm('削除してよろしいでしょうか？');

	if(deleteConfirm == true) {
		var clickEle = $(this)
		// 削除ボタンにユーザーIDをカスタムデータとして埋め込み。
		var userID = clickEle.attr('data-user-id');

		$.ajax({
			url: '/zaiko.del' + userID,
			type: 'POST',
			data: {'id': userID,
				   '_method': 'DELETE'} 
		  })
	
		 .done(function() {
			// 通信が成功した場合、クリックした要素の親要素の <tr> を削除
			clickEle.parents('tr').remove();
		  })
	
		 .fail(function() {
			alert('エラー');
		  });
	
		} else {
		  (function(e) {
			e.preventDefault()
		  });
		};
	  
});
