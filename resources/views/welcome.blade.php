<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel React application</title>
  <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="container">
    <h2 style="text-align: center"> George's wonderful guestbook</h2>
    <div class="entry area">
      <input type="text" name="message" value="" placeholder="Please add your message">
      <button type="button" name="button">Please submit your feedback</button>
    </div>
    <div class="entries"></div>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{mix('js/app.js')}}" ></script>
</html>
