<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
<form action="/prodread" method="post">
{{ csrf_field() }}
<table class="table table-borderless">
<tr>
    <td>Product Code</td>
    <td><input name="pc" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Product Name</td>
    <td><input name="pn" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Description</td>
    <td><input name="pd" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Price</td>
    <td><input name="pi" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Manufactring date</td>
    <td><input name="pm" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Expiry date</td>
    <td><input name="pe" type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-secondary">Sumbit</button></td>
</tr>
</table>
</form>

</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>     
@endsection  
</body>
</html>