<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <form action="" class="form-horizontal" method="post" role="form">
            <div class="form-group">
                <label for="voornaam" class="col-sm-2 control-label">voornaam</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="voornaam" name="voornaam" placeholder="Vul je voornaam in">
                    <span class="help-block"><?php echo $this->getFieldMessage('voornaam'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="naam" class="col-sm-2 control-label">naam</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="naam" name="naam" placeholder="Vul je achternaam in">
                    <span class="help-block"><?php echo $this->getFieldMessage('naam'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">e-mail</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Vul je e-mail adres in">
                    <span class="help-block"><?php echo $this->getFieldMessage('email'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="geboortedatum" class="col-sm-2 control-label">geboortedatum</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="geboortedatum" name="geboortedatum" placeholder="Vul je geboortedatum in (yyyy-mm-dd vb 2014-05-13)">
                    <span class="help-block"><?php echo $this->getFieldMessage('geboortedatum'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="geslacht" class="col-sm-2 control-label">geslacht</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="geslacht" name="geslacht" placeholder="Vul je geslacht in (m/v)">
                    <span class="help-block"><?php echo $this->getFieldMessage('geslacht'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="gebruikersnaam" class="col-sm-2 control-label">gebruikersnaam</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="gebruikersnaam" name="gebruikersnaam" placeholder="Vul je gebruikersnaam in">
                    <span class="help-block"><?php echo $this->getFieldMessage('gebruikersnaam'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">wachtwoord</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password">
                    <span class="help-block"><?php echo $this->getFieldMessage('password'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">wachtwoord</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="confirm" name="confirm">
                    <span class="help-block"><?php echo $this->getFieldMessage('confirm'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">register</button>
                </div>
            </div>
        </form>

    </div>
</div>