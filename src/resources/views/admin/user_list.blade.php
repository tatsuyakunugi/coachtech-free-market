@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user_list.css') }}">
@endsection

@section('content')
<div class="list-page__content">
    <div class="list-page__heading">
        <a href="/admin"><</a>
        <p>ユーザー一覧</p>
    </div>
    <div class="list-table">
        <table class="list-table__inner">
            <tr class="list-table__row">
                <th class="list-table__title">ID：</th>
            </tr>            
            <tr class="list-table__row">
                <th class="list-table__title">名前：</th>
            </tr>
            <tr class="list-table__row">
                <th class="list-table__title"></th>
            </tr>
            @foreach($users as $user)
            <tr class="list-table__row">
                <td class="list-table__item">{{ $user->id }}</td>
            </tr>
            <tr class="list-table__row">
                <td class="list-table__item">{{ $user->profile->name }}</td>
            </tr>
            <tr class="list-table__row">
                <td class="list-table__item">
                    <a href="/admin/comment_detail/{{ $user->id }}">投稿一覧</a>
                </td>
                <td  class="list-table__item">
                    <a href="/admin/user_detail/{{ $user->id }}">ユーザー詳細</a>
                </td>
            </tr>
            @endforeach
        </table>  
    </div>                
</div>
@endsection