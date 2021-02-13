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
      <a class="nav-item nav-link active" style="color:#60C236" href="/all-posts">Blog <span class="sr-only">(current)</span></a>
      <!-- <a class="nav-item nav-link" href="#">Features</a> -->
      <!-- <a class="nav-item nav-link" href="#">Pricing</a> -->
      <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
    </div>
  </div>
</nav>

<h1 class="text-center" style="color:#60C236"> <i>  We were born to tell stories.  </h1> </i>
<hr>




<div class="container-fluid">
<div class="jumbotron jumbotron-fluid mt-2">
  <div class="container">
    <h2 class="text-center"> <i>  {{$post->post_title}}</h2> </i>
    <p class="lead"> <i> {{$post->post}}</p> </i>
  </div>
  <p class="text-right pr-5 pt-4"> <i> Views: {{$post->views}}</p> </i>
  <p class="text-right pr-5"> <i> Created By: {{$post->posted_by}}.</p> </i>

</div>

</div>
	<a href="javascript:history.go(-1)" class="btn float-right mr-5 btn-sm mt-3" title="Return to the previous page">&laquo; Go back</a>


















     
    
                                        
</body>
</html>