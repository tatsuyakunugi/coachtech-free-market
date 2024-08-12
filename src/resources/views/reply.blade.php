<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/reply.css') }}" />
    <link href="https://use.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__item">
                <a class="header__logo" href="/">
                    <img src="{{ Storage::url('public/logo/bBd0bvlYq4GEcqhlYtDj3KfPAZtCCUM6t2XB8N9i.svg') }}" alt="">
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="reply__alert">
            @if (session('message'))
            <div class="reply__alert--success">{{ session('message') }}</div>
            @endif 
        </div>
        <div class="reply__content">
            <div class="reply__content--inner">
                <div class="comment-info">
                    <div class="comment-info__heading">
                        <span>投稿者：</span>
                        <p>{{ $comment->user->profile->name }}さん</p>
                    </div>
                    <div class="comment-info__body">
                        <span>投稿内容：</span>
                        <p>{{ $comment->comment }}</p>
                    </div>
                    <div class="comment-info__date">
                        <span>投稿日時：</span>
                        <p>{{ $comment->created_at }}</p>
                    </div>
                </div>
                <div class="reply__body">
                    <div class="reply__body--inner">
                        <form class="reply-form" action="{{ route('reply.store', $comment->id) }}" method="post">
                            @csrf
                            <div class="form__group">
                                <div class="form__group-title">
                                    <p>コメントへの返信</p>
                                </div>
                                <div class="form__input--reply">
                                    <textarea rows=10 name="reply"></textarea>
                                </div>
                                @error('reply')
                                <div class="form__error">
                                    {{ $errors->first('reply') }}
                                </div>
                                @enderror
                            </div>
                            <div class="form__button">
                                <button class="form__button-submit" type="submit">
                                    このコメントに返信する
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>