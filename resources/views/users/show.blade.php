<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Abone Detayları</title>
</head>
<body>
    <ul>
        <li><b>Ad-Soyad : </b>{{ $user->name }}</li>
        <li><b>Telefon : </b>{{ $user->phone }}</li>
        <li><b>E-Posta : </b>{{ $user->email }}</li>
        <li><b>Plaka : </b>{{ $user->plate }}</li>
        <li><b>TcNo : </b>{{ $user->tcno }}</li>
        <li><b> Adress : </b> {{ $user->address }}</li>
      </ul>
      <a href="{{ route('user.index') }}" class="btn btn-secondary">Geri </a>
</body>
</html>