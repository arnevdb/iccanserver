<div class="row">
    <div class="col-md-12">
        <form action="" class="form-horizontal" method="post" role="form">
            <div class="form-group <?php echo $this->getFieldStatus('persoon'); ?>">
                <label for="type" class="col-sm-2 control-label">type</label>
                <div class="col-sm-10">
                    <select id="type" name="type" class="form-control">
                        <option value="user"<?php if($this->_player->getType()=="user") {echo selected;} ?>>user</option>
                        <option value="admin"<?php if($this->_player->getType()=="admin") {echo selected;} ?>>admin</option>
                        <option value="coach"<?php if($this->_player->getType()=="coach") {echo selected;} ?>>coach</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Opslaan</button> - <a href="<?php echo baseUrl('persoon/'); ?>" class="">annuleer</a>
                </div>
            </div>
        </form>

    </div>
</div>