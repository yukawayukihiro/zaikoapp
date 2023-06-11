@extends('layouts.app')

@section('title','商品情報詳細画面');

@section('content')
    <h1>商品情報詳細画面</h1>
    <table border="1">
        <tr>
            <th>商品ID</th><th>商品名</th><th>価格</th><th>在庫数</th><th>コメント</th>
        </tr>
        @foreach ($product_items as $item)
        <tr>
            <td>{{$item->company_id}}</td><td>{{$item->product_name}}</td><td>{{$item->price}}</td><td>{{$item->stock}}</td><td>{{$item->comment}}</td>
        </tr>
        @endforeach
    </table>
@endsection