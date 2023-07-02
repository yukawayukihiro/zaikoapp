@extends('layouts.app')

@section('title','商品情報一覧')

@section('content')
    <h1>商品情報検索フォーム</h1>
    <form action="/zaiko.search" method="post">
        @csrf
        <label>商品名</label>
        <input type="text" name="product_name" placeholder="商品名で検索"><br>
        <input type="submit" value="検索" id="searchBtn">
    </form>
    <h1>商品情報一覧</h1>
    <form id="contentsForm">
        @csrf
        <select name="price" id="selectPrice">
            <option value="1" {{$select_items == '1' ? 'selected': ''}}>指定なし</option>
            <option value="2" {{$select_items == '2' ? 'selected': ''}}>価格が高い順</option>
            <option value="3" {{$select_items == '3' ? 'selected': ''}}>価格が低い順</option>
        </select>
    </form>
    <table border="1">
        <tr>
            <th>商品ID</th><th>商品名</th><th>価格</th><th>在庫数</th><th>商品情報コメント</th><th>削除</th>
        </tr>
        @foreach ($product_items as $item)
        <tr>
            <td>{{$item->company_id}}</td><td>{{$item->product_name}}</td><td>{{$item->price}}</td><td>{{$item->stock}}</td><td>{{$item->comment}}</td>
            <td>
                <form action="/zaiko.del/{{$item->id}}" method="post">
                    @csrf
                    <button type="submit">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <button onclick="location.href='{{url('/zaiko.add')}}'">新規登録</button>
    <button onclick="location.href='{{url('/zaiko.detail')}}'">商品情報詳細</button>
@endsection