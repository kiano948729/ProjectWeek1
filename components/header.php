<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!-- Start Footer-->
<header>
    <div class="header-container">
        <div class="title"> 
            <a href="../index.php"><img src="../img/gif/Ontwerp zonder titel (3).gif" alt="Logo"></a>
        </div>
        <nav class="nav-links">
            <a href="../index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a>
            <a href="../resource/lessen.php" class="<?php echo $current_page == 'lessen.php' ? 'active' : ''; ?>">Lessen</a>
            <a href="../resource/reizen.php"class="<?php echo $current_page == 'reizen.php' ? 'active' : ''; ?>">Voorzieningen</a>
            <a href="../resource/overig.php"class="<?php echo $current_page == 'overig.php' ? 'active' : ''; ?>">Overig</a>
        </nav>
        <div class="login-link">
            <a href="https://www.roc-nijmegen.nl/mbo-opleidingen/ict-media/ict/software-developer-bol"class="<?php echo $current_page == 'login.php' ? 'active' : ''; ?>">Registeren</a>
        </div>

    </div>
    <!-- Einde Footer-->
</header>