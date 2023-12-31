@extends('layouts.app')

@section('title','商品情報詳細画面');

@section('content')
    <h1>商品情報詳細画面</h1>
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
            <th>商品ID</th><th>商品名</th><th>価格</th><th>在庫数</th><th>コメント</th>
        </tr>
        @foreach ($product_items as $item)
        <tr>
            <td>{{$item->company_id}}</td><td>{{$item->product_name}}</td><td>{{$item->price}}</td><td>{{$item->stock}}</td><td>{{$item->comment}}</td>
        </tr>
        @endforeach
    </table>
    <button onclick="location.href='{{url('/zaiko.list')}}'">戻る</button>
    <button onclick="location.href='{{url('/zaiko.topedit')}}'">商品情報編集</button>
@endsection