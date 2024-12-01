<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Sub Category</h1>
        <button class="btn btn-info text-align-end"><a href="{{route('sub-categories.create')}}" class="text-decoration-none text-white" href="">Create</a></button>
        <table class="table">
            <thead>
              <tr>
                
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
        @php
            $count=0;
        @endphp
            @foreach ($categories as $category)
            <tr id="">
                <td> {{++$count}} </td>
                <td> {{$category->name}} </td>
                <td> {{$category->category->name}} </td>
                <td> {{$category->status}} </td>
                
                <td><button class="btn btn-info"><a href="{{route('sub-categories.edit',$category->id)}}">Edit</a>
                </button> <button class="btn btn-danger"><a href="{{route('sub-categories.destroy',$category->id)}}">Delete</a></button></td>
              </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
