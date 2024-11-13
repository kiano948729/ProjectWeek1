<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div class="header-container">
        <div class="title">
            <a href="../index.php"><img src="img/image copy.png" alt="Logo"></a>
        </div>
        <nav class="nav-links">
            <a href="../index.php" 
                class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a>
            <a href="../lessen.php"
                class="<?php echo $current_page == 'lessen.php' ? 'active' : ''; ?>">Lessen</a>
            <a href="../reizen.php"
                class="<?php echo $current_page == 'reizen.php' ? 'active' : ''; ?>">Reizen</a>
            <a href="../overig.php"
                class="<?php echo $current_page == 'overig.php' ? 'active' : ''; ?>">Overig</a>
        </nav>
        <div class="login-link">
            <a href="../login.php"
                class="<?php echo $current_page == 'login.php' ? 'active' : ''; ?>">Login</a>
        </div>
    </div>
</header>
