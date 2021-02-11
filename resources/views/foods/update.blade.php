<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

</head>
<body>
  <h1 class="text-center">Form Update Food</h1>
  <form action="/foods/{{ $food -> id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="Food Name" class="form-label">Food Name</label>
      <input type="text" class="form-control" name="food_name" value="{{ old('food_name', $food -> food_name) }}">
    </div>
    <div class="form-group">
      <label for="Food Price" class="form-label">Food Price</label>
      <input type="number" class="form-control" name="price" value="{{ old('price', $food -> price) }}">
    </div>
    <button class="btn btn-primary" type="submit">Create</button>
  </form>
</body>
</html>