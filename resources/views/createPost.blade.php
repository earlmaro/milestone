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
  <a class="navbar-brand" href="#" style="color:#F40505" >Milestone</a>
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


<!-- <a href="/all-posts">Blog</a> -->
<div class="container">
 @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


<div class="jumbotron">
  <h1 class="display-4" style="color:#F40505"> Hello!</h1>
  <p class="lead">Welcome to milestone.test, we have had <em style="color:red">  {{$registeredIp}}  </em> people new visitors on this application, milestone.test allows you to share your stories with others, you can post stories or read other peoples stories by <a href="/all-posts">clicking here</a> , Lets take it for a spin!! create a new post.</p>
 
  <hr class="my-4">
  <h3 class= "text-center" style="color:#60C236">Post a New Story Today!!</h3>
  <form action="/createpost" method="POST">
  @csrf
<div class="form-group">
    <label for="">Post Title</label>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <input type="text" class="form-control" id="" name="post_title" placeholder="" required>
  </div>


<div class="form-group">
    <label for="Title">Post</label>
  <textarea class="form-control" autocomplete="off" name="post" rows="3" placeholder="Tell us a Story" required></textarea>
</div>


  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="" name="posted_by" placeholder="Enter Your First and Last name" required>
  </div>

  <div class="form-group" style=display:none>
    <input type="text" class="form-control"  value="0" name="views" >
  </div>

 <button type="submit " class="btn btn-primary">Submit</button>


</div>

</form>
  <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
  <!-- <p class="lead"> -->
    <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
  <!-- </p> -->
</div>












</body>
</html>