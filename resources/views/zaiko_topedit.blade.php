@extends('layouts.app')

@section('title','商品情報編集')

@section('content')
    <h1>商品情報編集</h1>
    <table border="1">
        <tr>
            <th>商品ID</th><th>商品名</th><th>価格</th><th>在庫数</th><th>商品情報コメント</th><th>編集</th>
        </tr>
        @foreach ($product_items as $item)
        <tr>
            <td>{{$item->company_id}}</td><td>{{$item->product_name}}</td><td>{{$item->price}}</td><td>{{$item->stock}}</td><td>{{$item->comment}}</td>
            <td>
                <a href="/zaiko.edit/{{$item->id}}">編集</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection