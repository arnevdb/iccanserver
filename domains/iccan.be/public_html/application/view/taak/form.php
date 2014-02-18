<div class="row">
    <div class="col-md-12">
        <form action="" class="form-horizontal" method="post" role="form">
            <div class="form-group">
                <label for="volgnummer" class="col-sm-2 control-label">volgnummer</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="volgnummer" name="volgnummer" placeholder="Vul het volgnummer in"value="<?php echo $this->_question->getVolgnummer(); ?>">
                    <span class="help-block"><?php echo $this->getFieldMessage('volgnummer'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="naam" class="col-sm-2 control-label">vraag</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="naam" name="naam" placeholder="Vul de vraag in"value="<?php echo $this->_question->getNaam(); ?>">
                    <span class="help-block"><?php echo $this->getFieldMessage('naam'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="type" class="col-sm-2 control-label">type</label>
                <div class="col-sm-10">
                <select name="type">
                        <option value="schaal">schaal</option>
                        <option value="ja-nee">ja-nee</option>
                </select>
            </div>
                </div>
                <div class="form-group">
                    <label for="omschrijving" class="col-sm-2 control-label">omschrijving</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="omschrijving" name="omschrijving" placeholder="vul het aantal punten voor deze vraag in." value="<?php echo $this->_question->getOmschrijving(); ?>">
                        <span class="help-block"><?php echo $this->getFieldMessage('omschrijving'); ?></span>
                    </div>
                </div>
            <div class="form-group">
                <label for="belangrijkheid" class="col-sm-2 control-label">belangrijkheid</label>
                <div class="col-sm-10">
                    <select name="belangrijkheid">
                        <option value="1"> hoofdvraag</option>
                        <option value="0">subvraag</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="tags" class="col-sm-2 control-label">tags</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tags" name="tags" placeholder="vul het aantal tags voor deze vraag in. (gescheiden door / )" value="<?php echo $this->_question->getTags(); ?>">
                    <span class="help-block"><?php echo $this->getFieldMessage('tags'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Opslaan</button> - <a href="<?php echo baseUrl('vraag/'); ?>" class="">annuleer</a>
                </div>
            </div>
        </form>

    </div>
</div>