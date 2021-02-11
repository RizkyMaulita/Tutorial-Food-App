<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body class="container">
  <h1 class="text-center my-5">Form Create Food</h1>
  <div class="col-6 mx-auto">
    <form action="/foods" method="post">
      @csrf
      <div class="form-group">
        <label for="Food Name" class="form-label">Food Name</label>
        <input type="text" class="form-control" name="food_name" value="{{ old('food_name', '') }}">
      </div>
      <div class="form-group">
        <label for="Food Price" class="form-label">Food Price</label>
        <input type="number" class="form-control" name="price" value="{{ old('price', '') }}">
      </div>
      <div class="d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">Create</button>
      </div>
    </form>
    <div class="d-flex justify-content-center my-3">
      <button class="btn btn-light" onclick="window.location = '{{ route('foods') }}'">Cancel</button>
    </div>
  </div>
</body>
</html>