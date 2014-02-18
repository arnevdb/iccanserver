<div class="row">
    <div class="col-md-12">
        <?php if ($this->_questions): ?>
            <table class="table table-striped">
                <tbody>
                <?php foreach ($this->_questions as $question): ?>
                    <tr data-id="<?php echo $question->id; ?>">
                        <td><?php echo $question->getQuestiontext(); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Geen vragen gevonden.</p>
        <?php endif; ?>
        <a href="<?php echo baseUrl('category/index'); ?>" class="btn btn-lg btn-primary">Terug</a>
    </div>
</div>