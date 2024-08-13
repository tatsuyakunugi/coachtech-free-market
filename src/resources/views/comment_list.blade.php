<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/comment_list.css') }}" />
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
        <div class="comment-list__alert">
            @if (session('message'))
            <div class="comment-list__alert--success">{{ session('message') }}</div>
            @endif 
        </div>
        <div class="comment-list__content">
            @if(empty($comments))
            <div class="message">
                <p>コメントはありません</p>
            </div>
            @else
            <div class="message">
                <p>コメント一覧</p>
            </div>
            @foreach($comments as $comment)
            <div class="comment-list__item">
                <div class="comment-card">
                    <div class="comment-card__heading">
                        <p>{{ $comment->user->profile->name }}</p>
                    </div>
                    <div class="comment-card__body">
                        <p>{{ $comment->comment }}</p>
                    </div>
                    <div class="comment-card__date">
                        <p>{{ $comment->created_at }}</p>
                    </div>
                    @if(($comment->user->id) == ($user->id))
                    <div class="delete-form">
                        <form class="delete-form__button" action="{{ route('comment.destroy', $comment->item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                            <button class="delete-form__button-submit" type="submit">コメントを削除する</button>
                        </form>
                    </div>
                    @else(($comment->item->user_id) == ($user->id))
                    <div class="reply-form">
                        <form class="reply-form__button" action="{{ route('reply.create', $comment->id) }}" method="get">
                            @csrf
                            <button class="reply-form__button-submit" type="submit">このコメントに返信する</button>
                        </form>
                    </div>
                    @endif
                </div>
                @foreach($comment->replies as $reply)
                <div class="reply-card">
                    <div class="reply-card__heading">
                        <p>{{ $reply->user->profile->name }}</p>
                    </div>
                    <div class="reply-card__body">
                        <p>{{ $reply->reply }}</p>
                    </div>
                    <div class="reply-card__date">
                        <p>{{ $reply->created_at }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
            @endif
        </div>
    </main>
</body>
</html>