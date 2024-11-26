<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>
<body>
    <main class="register-form">
        <h1 class="register-form__heading content__heading">PiGLy</h1>
        <h3 class="register_heading">新規会員登録</h3>
        <h6 class="register_heading_1">STEP1 アカウント情報の登録</h6>
        <div class="register-form__inner">
            <form class="register-form__form" action="/register" method="post">
            @csrf
                <div class="register-form__group">
                    <label class="register-form__label" for="name">お名前</label><br>
                    <input class="register-form__input" type="text" name="name" id="name" placeholder="お名前を入力" value="{{ old('name') }}" />
                    <p class="register-form__error-message">
                    @error('name')
                    {{ $message }}
                    @enderror
                    </p>
                    <label class="register-form__label" for="email">メールアドレス</label><br>
                    <input class="register-form__input" type="mail" name="email" id="email" placeholder="メールアドレスを入力" value="{{ old('email') }}" />
                    <p class="register-form__error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                    </p>
                    <label class="register-form__label" for="password">パスワード</label><br>
                    <input class="register-form__input" type="password" name="password" id="password" placeholder="パスワードを入力" value="{{ old('password') }}" />
                    <p>
                    @error('password')
                    {{ $message }}
                    @enderror
                    </p>
                </div>

                <input class="register-form__btn btn" type="submit" value="次に進む">
                <div class="button_content">
                    <a href="/login" class="back">
                        ログインはこちら</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>