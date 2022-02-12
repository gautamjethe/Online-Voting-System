<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="hsl(171, 100%, 41%)">
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a href="/index.php" class="navbar-item">
        Home
      </a>

      <a href="/general/index.php" class="navbar-item">
        General
      </a>

      <a href="/cultural/index.php" class="navbar-item">
        Cultural
      </a>
      <a href="/technical/index.php" class="navbar-item">
        Technical
      </a>
      <a href="/sports/index.php" class="navbar-item">
        Sports
      </a>
      <a href="/media/index.php" class="navbar-item">
        Media
      </a>
      <a href="/finance/index.php" class="navbar-item">
        Finance
      </a>

      
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a href="logout.php"class="button is-primary" >
            <strong>Logout</strong>
          </a>

        </div>
      </div>
    </div>
  </div>
</nav>
<hr>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/stylesheet.css">
<script src="https://use.fontawesome.com/99c7b35dc8.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

<script src="https://bulma.io/vendor/clipboard-1.7.1.min.js"></script>
<script src="https://bulma.io/vendor/js.cookie-2.1.4.min.js"></script>
<script src="https://bulma.io/vendor/cupcakes-3.1.0.min.js"></script>

<script src="https://bulma.io/lib/main.js?v=202110262113"></script>




 



  <script src="https://bulma.io/lib/start.js?v=202110262113"></script>
            <center>
            <div id="headerSection">
            
            
            <link rel="stylesheet" href="../css/stylesheet.css">
            </div>
            </center>

            <div id="mainSection">
                <div id="profileSection">
                    <center><img src="/general/uploads/<?php echo $data['photo']?>" height="100" width="100"></center><br>
                    <b>Name : </b><?php echo $data['name'] ?><br><br>
                    <b>Email : </b><?php echo $data['mobile'] ?><br><br>
                    <b>Address : </b><?php echo $data['address'] ?><br><br>
                    <b>Status : </b><?php echo $status ?>
                </div>
                <br>
                
                <div id="groupSection">
                
                <div class="buttons">
                    <button class="button is-info">General Secretary</button>
                </div>    

                
                <hr>  
                   
                    <?php

                    if(isset($_SESSION['groups'])){
                        $groups = $_SESSION['groups'];
                        for($i=0; $i<count($groups); $i++){
                            ?>
                     
                                <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <img style="float: right" src="/uploads/<?php echo $groups[$i]['photo']?>" height="80" width="80">
                                <b>Group Name : </b><?php echo $groups[$i]['name']?><br><br>
                                
                
                                
                                <form method="POST" action="/general/api/vote.php">
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
                                <?php

                                if($_SESSION['status']==1){
                                    ?>
                                    <button class="input is-primary" disabled style="padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px;" type="button">Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button style="padding: 5px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px;" type="submit">Vote</button>
                                    <?php
                                }
                                ?>
                                </form>
                                </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <b>No groups available right now.</b>    
                            </div>
                        <?php
                    }  
                    ?>
                </div>
            </div> 
    </body>
</html>