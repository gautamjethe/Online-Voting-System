<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Registeration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link rel="stylesheet" href="tabler.css">
    <script src="tabler.js"></script>  
<body class="antialiased border-top-wide border-primary d-flex flex-column ">
<div class="flex-fill d-flex flex-column justify-content-center py-4">
<div class="container-tight py-4">
<div class="text-center mb-4">
<a href="#"><img src="../free-logo-a3qrwflcnn-8m7pfgqbk1.jpg" height="36" alt="InfinityFree"></a>
</div>
<div class="card card-md">
<div class="card-body">
<h2 class="card-title text-center mb-4">Sign up for a free account</h2>
<form action="/general/api/register.php" method="post" enctype="multipart/form-data" autocomplete="off" id="auth-form">

<div class="mb-3">
<label class="form-label" for="email">Name</label>
<input type="text" class="form-control" placeholder="you@example.com" required value="" id="email" name="name">
</div>
<div class="mb-3">
<label class="form-label" for="email">Email address</label>
<input type="email" class="form-control" pattern=".+@nhitm\.ac\.in" placeholder="you@example.com" required value="" id="email" name="mob">
</div>
<div class="mb-3">
<label class="form-label" for="password">Password</label>
<input type="password" class="form-control" placeholder="Your password" required id="password" name="pass" autocomplete="off">
</div>
<div class="mb-3">
<label class="form-label" for="password_confirmation">Confirm Password</label>
<input type="password" class="form-control" placeholder="Confirm your password" required id="password_confirmation" name="cpass" autocomplete="off">
</div>
<div class="mb-3">
<label class="form-label" for="email">Address</label>
<input type="text" class="form-control"  required value="" id="email" name="add">
</div>
<div class="alert alert-success" role="alert">
  Upload Image at  — <a href="https://gravatar.com" target="_blank"class="alert-link">gravatar</a>!
</div>


<div class="form-footer">
<button type="submit" class="btn btn-primary w-100"name="registerbtn">Create new account</button>
</div>
</form>
 </div>
</div>
<div class="text-center text-muted mt-3">
Already have account? <a href="/general">Sign in</a>
</div>
</div>
</div>
<body>
       