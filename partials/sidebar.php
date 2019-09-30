<div class="sidebar" data-image="../assets/img/b1.png" data-color="grey">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:;" class="simple-text">
                <img src="../assets/img/header.png">
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item <?php echo (strpos($_SERVER['REQUEST_URI'], 'index.php') !== FALSE)? 'active' : '' ?>">
                <a class="nav-link" href="index.php">
                    <i class="nc-icon nc-icon nc-paper-2"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item <?php echo (strpos($_SERVER['REQUEST_URI'], 'about.php') !== FALSE)? 'active' : '' ?>">
                <a class="nav-link" href="about.php">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>About</p>
                </a>
            </li>
            <li class="nav-item <?php echo (strpos($_SERVER['REQUEST_URI'], 'dynamic.php') !== FALSE)? 'active' : '' ?>">
                <a class="nav-link" href="dynamic.php">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Product Manager</p>
                </a>
            </li>
            <li class="nav-item <?php echo (strpos($_SERVER['REQUEST_URI'], 'staff.php') !== FALSE)? 'active' : '' ?>">
             <a class="nav-link" href="#">
                <i class="nc-icon nc-bell-55"></i>
                <p>Employee Data</p>
            </a>
        </li>
        <li class="nav-item active active-pro">
            <a class="nav-link active" href="javascript:;">
                <i class="nc-icon nc-alien-33"></i>
                <p>Get eKomi Pro</p>
            </a>
        </li>
    </ul>
</div>
</div>