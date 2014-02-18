<div class="row">
    <div class="col-md-12">
        <?php if ($this->_tasks): ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>naam</th>
                    <th>type</th>
                    <th>tags</th>
                    <th>moeilijkheid</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->_tasks as $task): ?>
                    <tr data-id="<?php echo $task->id; ?>">
                        <td><?php echo $task->getNaam(); ?></td>
                        <td><?php echo $task->getType(); ?></td>
                        <td><?php echo $task->getTags(); ?></td>
                        <td><?php echo $task->getMoeilijkheid(); ?></td>
                        <td><a href="<?php echo baseUrl('taak/edit/'.$task->id);?>">bewerk</a></td>
                        <td><a href="<?php echo baseUrl('taak/delete/'.$task->id);?>">wissen</a></td>
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