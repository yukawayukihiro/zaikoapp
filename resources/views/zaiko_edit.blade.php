@extends('layouts.app')

@section('title','商品情報編集')

@section('content')
    <h1>商品情報編集</h1>
    @if (count ($errors) > 0)
        <p>入力内容に誤りがあります。再入力してください。</p>
    @endif
    <form action="/zaiko.update" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$product_items->id}}">
            @error ('company_id')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>商品ID</th><td><input type="text" name="company_id" value="{{old('company_id')}}"></td></tr>
            @error ('product_name')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>商品名</th><td><input type="text" name="product_name" value="{{old('product_name')}}"></td></tr>
            @error ('price')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>価格</th><td><input type="text" name="price" value="{{old('price')}}"></td></tr>
            @error ('stock')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>在庫数</th><td><input type="text" name="stock" value="{{old('stock')}}"></td></tr>
            @error ('comment')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>商品情報コメント</th><td><input type="text" name="comment" value="{{old('comment')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="編集"></td></tr>
        </table>
    </form>
    <button onclick="location.href='{{url('/zaiko.topedit')}}'">戻る</button>
@endsection