<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo baseUrl(); ?>">Iccan</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php foreach ($this->menuItems as $menuItem) { ?>
                    <li class="<?php echo ($menuItem->getLink() == getCurrentPath()) ? 'active' : ''; ?>"><a
                            href="<?php echo baseUrl($menuItem->getLink()); ?>"><?php echo $menuItem->getDescription(); ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
