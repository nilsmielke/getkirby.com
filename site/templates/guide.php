<?php layout('article') ?>

<?php slot('sidebar') ?>
<?php snippet('sidebar', [
	'title'         => 'Guide',
	'link'          => '/docs/guide',
	'menu'          => collection('guides'),
	'hasCategories' => true,
]) ?>
<?php endslot() ?>

<?php slot('prevNext') ?>
<?php snippet('layouts/prevnext') ?>
<?php endslot() ?>
