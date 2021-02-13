<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/" style="color:#F40505" >Milestone</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" style="color:#60C236" href="/">Home <span class="sr-only">(current)</span></a>
      <!-- <a class="nav-item nav-link" href="#">Features</a> -->
      <!-- <a class="nav-item nav-link" href="#">Pricing</a> -->
      <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
    </div>
  </div>
</nav>

<h1 class="text-center" style="color:#60C236">Posts</h1>
<hr>



<div class="container-fluid">
@foreach($allPosts as $post)
<div class="jumbotron jumbotron-fluid mt-2">
  <div class="container">
    <h2 class="text-center">  {{$post->post_title}}</h2>
    <!-- <p class="lead">{{$post->post}}</p> -->
<a href=" /view-post/{{$post->id}}">
    <p class="text-center">Click here to open this post</p>
</a>
  </div>

  <p class="text-center">Views: {{$post->views}}</p>
  <p class="text-center">Created By: {{$post->posted_by}}</p>
</div>
@endforeach

</div>
	<a href="javascript:history.go(-1)" class="btn float-right mr-5 btn-sm mt-3" title="Return to the previous page">&laquo; Go back</a>

{{ $allPosts->links() }}
















     
    
                                        
</body>
</html>