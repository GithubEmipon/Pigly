<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
    <main class="login-form">
        <h1 class="login-form__heading">PiGLy</h1>
        <h3 class="login-form__heading_title">ログイン</h3>
        <div class="login-form__inner">
            <form class="login-form__form" action="/login" method="post">
            @csrf
            <div class="login-form__group">
                <label class="login-form__label" for="email">メールアドレス</label><br>
                <input class="login-form__input" type="mail" name="email" id="email" placeholder="メールアドレスを入力" value="{{ old('email') }}" />
                <p class="register-form__error-message">
                @error('email')
                {{ $message }}
                @enderror
                </p>
            </div>
            <div class="login-form__group">
                <label class="login-form__label" for="password">パスワード</label><br>
                <input class="login-form__input" type="password" name="password" id="password" placeholder="パスワードを入力" value="{{ old('password') }}" />
                <p>
                @error('password')
                {{ $message }}
                @enderror
                </p>
            </div>
            <input class="login-form__btn btn" type="submit" value="ログイン">
            <div class="button_content">
                    <a href="/register" class="back">
                    アカウント作成はこちら</a>
            </form>
        </div>
    </main>
</body>
</html>