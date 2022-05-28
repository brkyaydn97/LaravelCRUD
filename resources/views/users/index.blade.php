<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <title>Aboneler</title>
</head>
<body>
    <a class="btn btn-success" href="{{ route('user.create') }}"> Abone ekle</a>
<div style="margin-top:10px">
<table id="table_id" class="display" >
    <thead>
        <tr>
            <th>Abone Kodu</th>
            <th>Ad-Soyad</th>
            <th>Plaka</th>
            <th>Telefon</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user )
            <tr>    
                <td>{{ $user->id }} </td>
                <td>{{ $user->name }} </td>
                <td>{{ $user->plate }} </td>
                <td>{{ $user->phone }} </td>
                <td>
                    <a href="{{ route('user.edit',$user->id) }}">Düzenle</a>
                    <a href="{{ route('user.show',$user->id) }}">Görüntüle</a>
                </td>
            </tr>
        @endforeach
       
       
    </tbody>
</table>
</div>
</body>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
    </script>
</html>