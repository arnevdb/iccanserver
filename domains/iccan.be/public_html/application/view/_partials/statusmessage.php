<?php if (isset($this->statusMessage)): ?>
<div class="alert alert-<?php echo ($this->getStatusMessage()->getStatus())? 'success' : 'danger'; ?> alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo $this->getStatusMessage()->getMessage(); ?>
    </div>
<?php endif ?>