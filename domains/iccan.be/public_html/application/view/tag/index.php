<div class="row">
    <div class="col-md-12">
        <?php if ($this->_categories): ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Tag</th>
                    <th>aantal vragen</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->_categories as $tag): ?>
                    <tr data-id="<?php echo $tag->id; ?>">
                        <td><?php echo $tag->naam; ?></td>

                        <td><a href="<?php echo baseUrl('tag/edit/'.$tag->id); ?>">bewerk</a></td>
                        <td><a href="<?php echo baseUrl('tag/delete/'.$tag->id); ?>">wissen</a></td>
                        <td><a href="<?php echo baseUrl('tag/questions/'.$tag->id); ?>">toon alle vragen</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Geen categorieën gevonden.</p>
        <?php endif; ?>
        <a href="<?php echo baseUrl('tag/add/'); ?>" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-plus"></span> voeg tag toe</a>
    </div>
</div>