<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>目標体重設定</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/create.css') }}" />
</head>
<body>
    <div class="app">
        <header class="header">
        <h1 class="header__heading">PiGLy</h1>
        </header>
    </div>
    <main class="form">
        <h2>目標体重設定</h2>
        <div class="form__inner">
            <form class="form_create" action="/create" method="post">
                @csrf
                <table class="form__group">
                    <tr><input type="text" name="number">kg<br>
                    <div class="button_content">
                    <a class="button_create" href="/weight_logs" class="back">
                    戻る</a>
                    <button type="submit" class="button-register">登録</button>
                    </div>
                    </tr>
                </table>
            </form>
        </div>
    </main>
</body>
</html>