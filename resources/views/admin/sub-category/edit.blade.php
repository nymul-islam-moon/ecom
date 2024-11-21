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
    <h1>Edit Category</h1>
    <form class="form-control" action="{{route('sub-categories.update',$subCategory->id)}}" method="post">
        @method('PATCH')
        @csrf
        <input class="form-control mt-4" value="{{$subCategory->name}}" type="text" name="name" id="">
        <select name="category" class="form-select mt-4" id=""> 
            @foreach ($categories as $category)
            @if ($category->id == $subCategory->category->id)
                        <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                        @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
            @endforeach
          </select>
        <select name="status" class="form-select mt-4" id=""> 
            <option value="0" {{ $subCategory->status == 0 ? 'selected' : '' }}>Inactive</option>
            <option value="1" {{ $subCategory->status == 1 ? 'selected' : '' }}>Active</option>
        </select>
        <button class="btn btn-info mt-4" type="submit">Submit</button>
    </form>
</div>
</body>
</html>