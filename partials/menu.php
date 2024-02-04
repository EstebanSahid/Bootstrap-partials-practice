<?php 
    $menus = ['Home', 'Services','Pricing','Contact'];
?>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
    <ul class="navbar-nav me-auto">
        <?php foreach($menus as $index => $menu){?>
        <li class="nav-item">
            <a class="page-scroll <?= $index == 0 ? 'active' : '' ?>" href="#<?= strtolower($menu) ?>">
                <?= $menu ?>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>