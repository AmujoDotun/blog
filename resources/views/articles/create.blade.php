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
                <input 
                type="text" 
                class="form-control @error('title') alert alert-danger @enderror" 
                name="title"
                 id="title"
                 value="{{ old ('title') }}">

                @error('title')
                 <p class ="alert alert-danger">{{ $errors->first('title') }}</p>
                @enderror

            </div>
        </div>

        <div class="form-group">
            <label for="excerpt" class="label">Excerpt:</label>
            <textarea 
            class="form-control @error('excerpt') alert alert-danger @enderror" 
            name="excerpt"  
            id="excerpt">{{ old('excerpt') }} </textarea>
            @error('excerpt')
                <p class="alert alert-danger">{{$errors->first('excerpt') }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="body" class="label">Body:</label>
            <textarea
             class="form-control  @error('body') alert alert-danger @enderror" 
             name="body"  
             id="body">{{ old('body') }}   </textarea>

            @error('body')
                <p class="alert alert-danger">{{ $errors->first('excerpt') }}</p>
            @enderror
        </div>
        <div class="div">
            <button type="submit">Submit</button>
        </div>
        
        
    </form>
</body>
</html>


@endsection