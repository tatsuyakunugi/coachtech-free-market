<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__item">
                <a class="header__logo" href="/">COACHTECH</a>
            </div>
            <div class="header__item">
                <form class="search-form" action="/search" method="get">
                    @csrf
                    <input type="text" name="keyword" placeholder="何をお探しですか？">
                    <button class="form-button">検索</button>
                </form>
            </div>
            @if(Auth::check())
            <div class="header__item">
                <form class="logout-form" action="/logout" method="post">
                    @csrf
                    <button class="logout-form__button-submit">ログアウト</button>
                </form>
            </div>
            <div class="header__item">
                <a class="mypage-link" href="/mypage">マイページ</a>
            </div>
            @else
            <div class="header__item">
                <a class="login-link" href="/login">ログイン</a>
            </div>
            <div class="header__item">
                <a class="register-link" href="/register">会員登録</a>
            </div>
            @endif
            <div class="header__item">
                <form class="sell-form" action="/sell" method="get">
                    @csrf
                    <button class="sell-form__button-submit">出品</button>
                </form>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>