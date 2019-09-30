<?php
session_start();
?>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
    <?php echo '<a href="#" class = "navbar-brand">Welcome to eKomi, '. $_SESSION["user"].'</a>';   ?>
        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar burger-lines"></span>
        <span class="navbar-toggler-bar burger-lines"></span>
        <span class="navbar-toggler-bar burger-lines"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown" style="margin-right: 50px;">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                style="border: 1px solid #59980b; color: #59980b;">
                <img src="../assets/img/dd.png" width="32" height="32">
            </button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="divider"></div>
                <a class="dropdown-item" href = "../authentication/logout.php">Logout</a>
            </div>
        </li>
    </ul>
</div>
</div>
</nav> 




<!-- <nav class="navbar navbar-expand-lg" style = "position: fixed; left: 0; top: 0; width: 100%; margin: auto;"> -->