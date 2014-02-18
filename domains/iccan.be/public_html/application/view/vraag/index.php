<div class="row">
    <div class="col-md-12">
        <?php if ($this->_questions): ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>volgnummer</th>
                    <th>naam</th>
                    <th>type</th>
                    <th>tags</th>
                    <th>belangrijkheid</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->_questions as $question): ?>
                    <tr data-id="<?php echo $question->id; ?>">
                        <td><?php echo $question->getVolgnummer(); ?></td>
                        <td><?php echo $question->getnaam(); ?></td>
                        <td><?php echo $question->getType(); ?></td>
                        <td><?php echo $question->getTags(); ?></td>
                        <td><?php echo $question->getBelangrijkheid() ? 'hoofdvraag' : 'subvraag'; ?></td>
                        <td><a href="<?php echo baseUrl('vraag/edit/'.$question->id);?>">bewerk</a></td>
                        <td><a href="<?php echo baseUrl('vraag/delete/'.$question->id);?>">wissen</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Geen vragen gevonden.</p>
        <?php endif; ?>
        <a href="<?php echo baseUrl('vraag/add/'); ?>" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-plus"></span> voeg vraag toe</a>
    </div>
</div>