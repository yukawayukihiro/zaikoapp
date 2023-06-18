@extends('layouts.app')

@section('title','検索結果')

@section('content')
    <h1>検索結果</h1>
    @if (isset($product_items))
    <table>
        <tr>
            <th>商品ID</th><th>商品名</th><th>価格</th><th>在庫数</th><th>商品情報コメント</th>
        </tr>
        @foreach ($product_items as $item)
        <tr>
            <td>{{$item->company_id}}</td><td>{{$item->product_name}}</td><td>{{$item->price}}</td><td>{{$item->stock}}</td><td>{{$item->comment}}</td>
        </tr>
        @endforeach
    </table>
    @endif
    <button onclick="location.href='{{url('/zaiko.list')}}'">戻る</button>
@endsection