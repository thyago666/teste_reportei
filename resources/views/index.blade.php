<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
 
  
    <div class="container">
        <form method="post" action="{{url('/index')}}">
            @csrf
      <div class="form-group">
        <label for="formGroupExampleInput">Informe o Login do GitHub</label>
        <input type="text" class="form-control" id="login" name="login" placeholder="">
      </div>

      <button type="submit" class="btn btn-primary">Consultar</button>
      <br>      <br>  <br>      <br>
    </div>
    </form>
</body>
</html>