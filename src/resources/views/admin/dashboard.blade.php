<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <img src="{{ Storage::url('public/logo/bBd0bvlYq4GEcqhlYtDj3KfPAZtCCUM6t2XB8N9i.svg') }}" alt="">
            </div>
        </div>
    </header>
    <main>
        <div>管理ページTOP</div>
        <form action="{{ url('admin/logout') }}" method="post">
            @csrf
            <button type="submit">ログアウト</button>
        </form>
    </main>
</body>
</html>