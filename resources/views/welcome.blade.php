<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Guestbook</title>
  <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="container">
    <h2 style="text-align: center"> George's wonderful guestbook</h2>
    <!-- Text input-->
    <div class="form-group">
      <div class="col-md-12">
      <label for="name" class="control-label">Please leave your name</label>
      <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <div class="col-md-12">
      <label for="name" class="control-label">Comments</label>
        <textarea class="form-control" id="comment" name="comment">Let us know how we did :)</textarea>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <div class="col-md-12">
        <button id="submit button" name="submit button" class="btn btn-primary">Submit</button>
      </div>
    </div>

    <!-- Previous Entries -->

    <div class="col-md-12">
        <div class="entries"></div>
    </div>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{mix('js/app.js')}}" ></script>
</html>
