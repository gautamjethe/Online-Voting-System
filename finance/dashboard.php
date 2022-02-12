<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = "<span class='badge bg-success'>Voted</span>";
    }
    else{
        $status = "<span class='badge bg-danger'>Not Voted</span>";
    }

    error_reporting(0);


?>
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
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link rel="stylesheet" href="tabler.css">
    <script src="tabler.js"></script>
    <header class="navbar navbar-expand-md navbar-dark d-print-none">
<div class="container-xl">

<h1 class="navbar-brand d-none-navbar-horizontal pe-0 pe-md-3" style="filter: brightness(0) invert(1);">

<b>Voting Platform</b>
</a>
</h1>
<div class="navbar-nav flex-row order-md-last">
<div class="nav-item d-none d-md-flex me-3">
<div class="btn-list">

<div class="nav-item dropdown">
<a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
<span class="avatar avatar-sm" style="background-image: url(https://en.gravatar.com/images/gravatars/no_gravatar.gif)"></span>
<div class="d-none d-xl-block ps-2">
<div><?php echo $data['name'] ?></div>
<div class="mt-1 small text-muted"><?php echo $data['mobile'] ?></div>
</div>
</a>
<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">


<a class="dropdown-item" href="/finance/logout.php">Logout</a>
</div>
</div>
</div>
</div>
</header>
<?php
$connect4 = mysqli_connect("localhost", "root", "", "finance");
$sql=mysqli_query($connect4,"select * from user where role='1'");
if(mysqli_num_rows($sql)>0){
while($app=mysqli_fetch_assoc($sql)){
$id=$app['id'];
$name=$app['name'];
$email=$app['mobile'];
 
}}
$server=$data['mobile'];
$default = "https://img.icons8.com/cute-clipart/64/000000/test-account.png";
$size = 40;
$grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $server ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
?>
<div class="container">
<div class="row">
<div class="col-md-6"><br>
<div class="card mb shadow-sm rounded"><br>
<div class="card-body text-left">
<span class="avatar" style="background-image: url(<?php echo $grav_url; ?>)"></span><br><br>
<b>Name : </b><?php echo $data['name'] ?><br><br>
<b>Email : </b><?php echo $data['mobile'] ?><br><br>
<b>Address : </b><?php echo $data['address'] ?><br><br>
<b>Status : </b><?php echo $status ?><br><br>   

<h5 class="text-muted">User Information</h5>
</div>
</div>
</div>



</div>
</div>
</div>
<div class="page-body" style="height: auto !important;">
<div class="container-xl" style="height: auto !important;">
<div class="row row-cards">
<div class="col-12">
<div class="card">
<div class="table-responsive">
<table class="table table-hover table-vcenter text-nowrap card-table">
<thead>
<tr>
<th>Id</th>
<th>Profile</th>
<th>Candidate Name</th>
<th>Vote</th>
</tr>
</thead>
<tbody>
<?php
$connect4 = mysqli_connect("localhost", "root", "", "finance");
$sql=mysqli_query($connect4,"select * from user where role='2'");
if(mysqli_num_rows($sql)>0){
while($app=mysqli_fetch_assoc($sql)){
$id=$app['id'];
$name=$app['name'];
$ser=$app['mobile'];

//$re=$app['reason'];
?>
<?php
$default = "https://img.icons8.com/cute-clipart/64/000000/test-account.png";
$size = 40;
$grav = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $ser ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
?>
<tr>
<td><?php echo $id ?></td>
<td class='text-truncate'><span class="avatar" style="background-image: url(<?php echo $grav; ?>)"></span></td>
<td><?php echo $name ?></td>
<form method="POST" action="/finance/api/vote.php">
<input type="hidden" name="gvotes" value="<?php echo $app['votes']; ?>">
<input type="hidden" name = "gid" value="<?php echo $app['id']; ?>">
<?php
if($_SESSION['status']==1){
?>    
<td><button disabled class="btn btn-primary" type="button">Voted</button></td>
<?php } 
else{    
?>
<td><button class="btn btn-primary" type="submit">Vote</button></td>
</tr>;
<?php } ?>
<?php

}
}
else{
echo '<tr><td colspan="4" class="text-center">No Candidates available right Now !</td></tr>';
}
?>
</tbody>
</table>
</div>
</div>
</div>