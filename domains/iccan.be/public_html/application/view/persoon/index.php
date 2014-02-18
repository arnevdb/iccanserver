<div class="row">
    <div class="col-md-12">
        <?php if ($this->_players): ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>naam</th>
                    <th>e-mail</th>
                    <th>niveau</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->_players as $player): ?>
                    <tr data-id="<?php echo $player->id; ?>">
                        <td><?php echo $player->getGebruikersnaam(); ?></td>
                        <td><?php echo $player->getEmail(); ?></td>
                       <td><?php echo $player->getType(); ?></td>
                        <td><a href = "<?php echo baseUrl('persoon/edit/'.$player->id)?>">bewerk</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Geen spelers gevonden.</p>
        <?php endif; ?>
    </div>
</div>