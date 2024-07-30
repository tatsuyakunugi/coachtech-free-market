<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/image.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner"></div>
    </header>
    <main>
        <div class="image__alert">
            @if (session('message'))
            <div class="image__alert--success">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <div class="image__content">
            <form class="image-form" action="{{ route('image_upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image" class="input_label">画像</label>
                    <input type="file" class="input_form" name="image">
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>