<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <img src="{{ Storage::url('public/logo/bBd0bvlYq4GEcqhlYtDj3KfPAZtCCUM6t2XB8N9i.svg') }}" alt="">
            </div>
            <div class="header__item">
                <form class="logout-form" action="{{ url('admin/logout') }}" method="post">
                    @csrf
                    <button class="logout-form__button" type="submit">ログアウト</button>
                </form>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>