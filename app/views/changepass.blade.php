<!DOCTYPE html>
@extends('admin')
<html>

<head>

</head>

<body>
@section('konten')
<div style="position:relative;margin-top:30px">
<h3>Ganti kata kunci</h3>
<!-- @if ($error) -->
   {{ $error }}
<!-- @endif -->
  <form class="form" style="width:400px" method="POST" action="/changepass">
      <fieldset>
        <div class="form-group">
            <input class="form-control" placeholder="Email" name="email" type="text" autofocus>
        </div>
        <div class="form-group">
            <input class="form-control" placeholder="Kata kunci lama" name="password" type="password">
        </div>
        <div class="form-group">
            <input class="form-control" placeholder="Kata kunci baru" name="new_password" type="password" value="">
        </div>
        <div class="form-group">
            <input class="form-control" placeholder="Ulangi kata kunci baru" name="new_password_confirm" type="password" value="">
        </div>
        
        <!-- Change this to a button or input when using this as a form -->
        <input type="submit" class="btn btn-lg btn-success btn-block" value="Ganti password">
    </fieldset>
  </form>
</div>
@stop

</body>

</html>
