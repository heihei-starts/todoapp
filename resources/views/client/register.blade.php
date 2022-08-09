<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>登録画面</h1>
    <p>{{ $name }}</p>
    <form action="{{ route('client.create')}}" method="post" class="form-example">
        @csrf
        <div class="form-example">
            <label for="name">名前を入力してください。</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-example">
            <label for="email">メールアドレスを入力してください。 </label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-example">
            <label for="password">パスワードを入力してください。 </label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-example">
            <input type="submit" value="Subscribe!">
        </div>
    </form>
</body>
</html>
