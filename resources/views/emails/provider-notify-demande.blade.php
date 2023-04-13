
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
.container{
    width:50%;
    height:30%;
    padding:20px;
}
</style>
</head>
 
<body>
    <div class="container">
        <div class="row">
          <legend>request Notification</legend>
          <p>TO Dear {{$name}}</p>
          <br><br>
          <p>{{$message}}</p>
          <p><b>Regards,</b></p>
          <img src="user/assets/img/icon.png" width="118" alt="logo" />
          <p><strong>MAINTENANCE SERVICES </strong></p>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</body>
</html>