@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="main__content">
    <div class="main__content--heading">
        <div class="">
            <a href="">おすすめ</a>
        </div>
        <div class="">
            <a href="">マイリスト</a>
        </div>
    </div>
    <div class="main__content--body">
        <div class="item__wrapper">
            <div class="item-card">
                <a class="item__link" href="/item">商品画像</a>
            </div>
        </div>
    </div>
</div>
@endsection