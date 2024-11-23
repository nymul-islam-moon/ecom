@include('header.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-4">

        @if($shop)
        <div class="d-flex gap-4 justify-content-center">
            <h1 class="text-center"> {{$shop->name}} </h1>
            <a class="btn btn-outline-warning d-flex align-items-center " href="{{route('admin.shops.edit',$shop->id)}}">
                <i class="fas fa-edit me-1"></i> Edit
            </a>
        </div>

        <p class="text-center">{{$shop->name}}</p>
        <div class='bg-secondary-subtle mt-4 fs-4 rounded text-center p-5'>
            <p>{{$shop->status}}</p>
        </div>

        <!-- Displaying Comments -->


        <!-- Comment Submission Form -->


        @endif
    </div>
</body>
</html>
