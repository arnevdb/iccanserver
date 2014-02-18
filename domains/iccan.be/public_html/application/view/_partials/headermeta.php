<meta charset="utf-8">
<title><?php echo $this->getPagetitle(); ?></title>
<?php foreach ($this->_styles as $style): ?>
<link href="<?php echo baseUrl('../css/' . $style); ?>" rel="stylesheet">
<?php endforeach; ?>

<!-- JavaScript plugins (requires jQuery) -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo baseUrl('../js/bootstrap.min.js'); ?>"></script>