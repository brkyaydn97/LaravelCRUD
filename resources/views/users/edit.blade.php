<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Abone Ekle</title>
</head>
<body>
    <form method="POST" action="{{ route('user.update',$user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="col">
                <div class="row mt-2">
                    <label>Abone Kodu</label> </br>
                    <input class="form-control" type="text" name="code" id="code" value="{{ $user->id }}" readonly>
                </div>
                <div class="row mt-2">
                    <label>İsim Soyisim*</label> </br>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}" required>
                </div>
                <div class="row mt-2 mt-2">
                    <label>E-posta </label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}">
                </div>
                <div class="row mt-2">
                    <label>Şifre* </label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ $user->password}}" required >
                </div>
                <div class="row mt-2">
                    <label>Plaka* </label>
                    <input class="form-control" type="text" name="plate" id="plate" value="{{ $user->plate }}" required>
                </div>
                <div class="row mt-2">
                    <label>Adres </label>
                    <input class="form-control" type="text" name="address" id="addres" value="{{ $user->address }}" >
                </div>
                <div class="row mt-2">
                    <label>TC No </label>
                    <input class="form-control" type="text" name="tcno" id="tcno" value="{{ $user->tcno }}" >
                </div>
                <div class="row mt-2">
                    <label>Telefon Numarası </label>
                    <input class="form-control" type="text" name="phone" id="phone" value="{{ $user->phone }}" >
                </div>
                <div class="row mt-2">        
                    <label>Dosya </label>
                    <input class="form-control" type="file" name="file" id="file" value="{{ $user->file }}" >
                </div>
            </div> 
        </div> 
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Geri </a>
        <button type="submit" class="btn btn-primary">Güncelle</button> 
    </form>
</body>
</html>