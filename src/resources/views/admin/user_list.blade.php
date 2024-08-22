@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user_list.css') }}">
@endsection

@section('content')
<div class="list-page__content">
    <div class="list-page__heading">
        <a class="top-page__link" href="/admin"><</a>
        <p>ユーザー一覧</p>
    </div>
    <div class="list-table">
        <table class="list-table__inner">
            <tbody>
                <tr class="list-table__title-row">
                    <th class="list-table__title">ID</th>
                    <th class="list-table__title">名前</th>
                    <th class="list-table__title"></th>
                    <th class="list-table__title"></th>
                </tr>            
                @foreach($users as $user)
                <tr class="list-table__item-row">
                    <td class="list-table__item">{{ $user->id }}</td>
                    <td class="list-table__item">{{ $user->profile->name }}</td>
                    <td class="list-table__item">
                        <a class="comment_detail__link" href="{{ route('admin.showCommentDetail', $user->id) }}">投稿一覧</a>
                    </td>
                    <td  class="list-table__item">
                        <a class="user_detail__link" href="{{ route('admin.showUserDetail', $user->id) }}">ユーザー詳細</a>
                    </td>                        
                </tr>
                @endforeach
            </tbody>
        </table>  
    </div>                
</div>
@endsection