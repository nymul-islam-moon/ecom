<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Create Category</h1>
    <form class="form-control" action="{{route('sub-categories.store')}}" method="post">
        @csrf
        <input class="form-control mt-4" type="text" name="name" id="">
        <select name="category_id" class="form-select mt-4" id=""> 
          @foreach ($categories as $category)
          <option value="{{$category->id}}"> {{$category->name}} </option>
          @endforeach
        </select>
        <select name="status" class="form-select mt-4" id=""> 
            <option value="0">Inactive</option>
            <option value="1">Active</option>
        </select>
        <button class="btn btn-info mt-4" type="submit">Submit</button>
    </form>
</div>
</body>
</html>