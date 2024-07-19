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
        <div class="item-card"></div>
    </div>
</div>
@endsection