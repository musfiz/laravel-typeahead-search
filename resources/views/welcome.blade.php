<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
  /* stylelint-disable selector-list-comma-newline-after */
  .blog-header {
    line-height: 1;
    border-bottom: 1px solid #e5e5e5;
  }

  .blog-header-logo {
    font-family: "Playfair Display", Georgia, "Times New Roman", serif;
    font-size: 2.25rem;
  }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  

<title>Laravel Typehead</title>
</head>
<body>
  <div class="container">
    <header class="blog-header py-3">
      <div class="row text-center">         
        <div class="col-12 text-center">
          <a class="blog-header-logo text-dark" href="#">Laravel Typeahead Autocomplete Search</a>
        </div>        
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav">
        <a class="p-2 text-muted" href="{{url('/')}}">Add Item</a>      
        <a class="p-2 text-muted" href="{{url('list')}}">View List</a>
      </nav>
    </div>
    @yield('content')
  </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>