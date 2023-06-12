@extends('layouts.app')

@section('title','商品情報一覧')

@section('content')
    <h1>商品情報一覧</h1>
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
@endsection