@extends('layout');

@section('content')
<div id="wrapper">
	<div id="page" class="container">

    @foreach ($article as $article) 
		<div id="content">
			<div class="title">


				<h2>
                    <a href="/articles/{{ $article->id }}">
                {{ $article->title }}
                    </a>
                </h2>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			<p>
			
			</p>

            {{!! $article->excerpt  !!}}
		</div>
		
	</div>
    @endforeach
</div>

@endsection