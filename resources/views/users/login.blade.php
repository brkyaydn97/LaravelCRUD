<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form  action="{{ route('loginauth') }}" method="post">
            @csrf
            <label>Kullanıcı kodunuz </label>
            <input type="number" name="usercode" id="usercode">

            <label> Şifre</label>
            <input type="password" id="pwd" name="pwd"> 
            <button type="submit"> Giriş </button>

        </form>
    </div>
</body>
</html>