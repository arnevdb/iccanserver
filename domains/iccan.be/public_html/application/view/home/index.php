<div class="row">
    <div class="col-md-12">
        <p>Welkom bij Iccan</p>
        <?php if ($this->_checkIfUserHasRequiredAccessLevel(2)): ?>
            <p>Welkom admin!</p>
        <?php elseif ($this->_checkIfUserHasRequiredAccessLevel(1)): ?>
            <p>Welkom <?php echo $this->_getCurrentUser(); ?></p>
        <?php else: ?>
            <p>Je bent niet ingelogd: <a href="<?php echo baseUrl('home/login'); ?>">log in</a> of <a href="<?php echo baseUrl('home/add'); ?>"> registreer </a></p>
        <?php endif; ?>
    </div>
</div>