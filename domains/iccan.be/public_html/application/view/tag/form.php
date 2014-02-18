<div class="row">
    <div class="col-md-12">
        <form action="" class="form-horizontal" method="post" role="form">
            <div class="form-group <?php echo $this->getFieldStatus('naam'); ?>">
                <label for="naam" class="col-sm-2 control-label">Tagnaam</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="naam" name="naam" placeholder="Vul de tagnaam in" value="<?php echo $this->_category->getNaam(); ?>">
                    <span class="help-block"><?php echo $this->getFieldMessage('naam'); ?></span>
                </div>
            </div>
            <div class="form-group <?php echo $this->getFieldStatus('omschrijving'); ?>">
                <label for="omschrijving" class="col-sm-2 control-label">Omschrijving</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="omschrijving" name="omschrijving" placeholder="Vul de omschrijving in" value="<?php echo $this->_category->getOmschrijving(); ?>">
                    <span class="help-block"><?php echo $this->getFieldMessage('omschrijving'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Opslaan</button> - <a href="<?php echo baseUrl('tag/'); ?>" class="">annuleer</a>
                </div>
            </div>
        </form>

    </div>
</div>