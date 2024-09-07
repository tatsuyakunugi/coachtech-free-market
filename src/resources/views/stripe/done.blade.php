<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/done.css') }}" />
    <link href="https://use.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet">
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
        <div class="done__content">
            <div class="done__content-card">
                <div class="done__content-card--inner">
                    <div class="message">
                        <p>商品の購入が完了しました。</p>
                    </div>
                    <div class="top-page__link">
                        <form class="done-form" action="{{ route('sell_item.status', $item->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="status" value="1">
                            <button class="top-page__link--button" type="submit">
                                TOPページへ戻る
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>