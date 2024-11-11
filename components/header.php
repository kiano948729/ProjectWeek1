<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div class="header-container">
        <div class="nav-links">
            <a href="../index.php" 
                class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a>
            <a href="../resource/lessen.php"
                class="<?php echo $current_page == 'learn.php' ? 'active' : ''; ?>">Lessen</a>
            <a href="../resource/reizen.php"
                class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>">reizen</a>
            <a href="../resource/overig.php"
                class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">overig</a>
        </div>
        <div class="login-link">
            <a href="../resource/login.php"
                class="<?php echo $current_page == 'login.php' ? 'active' : ''; ?>">Login</a>
        </div>
    </div>
</header>