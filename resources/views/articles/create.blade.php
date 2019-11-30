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
       <div class="control">
            <label for="title" class="label">Title</label>
               
             <div class="field">
                <input type="text" class="input" name="title" id="title">
            </div>
       
        </div>
        <div class="control">
            <label for="excerpt" class="label"></label>
            <div class="field">
                <input type="text" name="excerpt" id="excerpt">
            </div>
        </div>

        <div class="div">
            <label for="body" class="label"></label>
            <div class="div">
                <textarea name="body" id="body" ></textarea>
            </div>
        </div>
        <div class="div">
            <button type="submit">Submit</button>
        </div>
        
    </form>
</body>
</html>


@endsection