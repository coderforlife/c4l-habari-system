<?php
/**
 * @var array $_template_attributes
 * @var array $_attributes
 * @var array $actions
 * @var \Habari\FormControl $first
 * @var \Habari\FormControl $action
 * @var \Habari\Theme $theme
 */
?>
<div <?= $_template_attributes['div'] ?>>
	<?= $first->get($theme); ?><?php if(count($actions) > 0): ?><a href="#" class="dropdown"><span class="arrow icon-circle-arrow-down"></span></a>
	<ul <?= $_template_attributes['ul'] ?> >
		<?php foreach($actions as $action): ?>
			<li><?= $action->get($theme); ?></li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>
</div>
