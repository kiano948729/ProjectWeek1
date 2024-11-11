<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div class="header-container">
        <div class="title">
            <img src="img/image copy.png" alt="Logo">
        </div>
        <nav class="nav-links">
            <a href="../index.php" 
                class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a>
            <a href="../resource/lessen.php"
                class="<?php echo $current_page == 'lessen.php' ? 'active' : ''; ?>">Lessen</a>
            <a href="../resource/reizen.php"
                class="<?php echo $current_page == 'reizen.php' ? 'active' : ''; ?>">Reizen</a>
            <a href="../resource/overig.php"
                class="<?php echo $current_page == 'overig.php' ? 'active' : ''; ?>">Overig</a>
        </nav>
        <div class="login-link">
            <a href="../resource/login.php"
                class="<?php echo $current_page == 'login.php' ? 'active' : ''; ?>">Login</a>
        </div>
    </div>
</header>
