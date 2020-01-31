<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($data as $barang)
    Code Barang : {{$barang->Code_barang}}<br>
    Nama Barang : {{$barang->Nama_barang}}<br>
    Tipe Barang : {{$barang->Tipe_barang}}<br>
    Harga Barang : {{$barang->Harga_barang}}<br>
    Deskripsi : {{$barang->Deskripsi}}<br>
    Qty : {{$barang->Qty}}<br>
    Total Harga : {{$barang->Total_harga}}
    <hr>
    @endforeach
</body>
</html>
