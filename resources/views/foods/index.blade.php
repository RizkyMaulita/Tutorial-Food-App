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
  <h1 class="text-center my-3 mt-4">Food Data</h1>
  <div class="d-flex justify-content-center mb-5">
    <button class="btn btn-secondary" onclick="window.location = '{{ route('foods.create')}}' ">Create New Food</button>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Food Name</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach ($data as $food)
        <tr>
          <td> {{ $food -> id }} </td>
          <td> {{ $food -> food_name }} </td>
          <td> {{ $food -> price }} </td>
        </tr>
    @endforeach --}}
    @forelse ($data as $food)
      <tr>
        <td> {{ $food -> id }} </td>
        <td> {{ $food -> food_name }} </td>
        <td> {{ $food -> price }} </td>
        <td class="d-flex ">
          <button class="btn btn-primary mx-2" onclick="window.location = '{{ route('foods.edit', ['id' => $food -> id]) }}' ">Edit</button>
          {{-- <button class="btn btn-danger" onclick="{{ route('foods.delete', ['id' => $food -> id]) }}">Delete</button> --}}
          {{-- kalau delete ga bisa pakai onclick saja, mesti pakai form ... --}}
          <form action="/foods/{{ $food -> id }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="4"> No Data</td>
      </tr>
    @endforelse
  </tbody>
</table>


</body>
</html>