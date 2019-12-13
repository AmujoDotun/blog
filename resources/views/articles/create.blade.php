@extends('layout');

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="/articles" method="post">
     @csrf

     <div class="form-group">
            <label for="title" class="label">Title</label>
             <div class="field">
                <input type="text" class="form-control" name="title" id="title">
            </div>
       
        </div>
        <div class="form-group">
            <label for="excerpt" class="label">Excerpt:</label>
            <textarea class="form-control" name="excerpt"  id="excerpt"></textarea>
        </div>
        <div class="form-group">
            <label for="body" class="label">Body:</label>
            <textarea class="form-control" name="body"  id="body"></textarea>
        </div>
        <div class="div">
            <button type="submit">Submit</button>
        </div>
        
        
    </form>
</body>
</html>


@endsection