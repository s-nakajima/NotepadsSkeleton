<?php
/**
 * latest template
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Notepads.View.Notepads.index
 */
?>
<?php echo $this->Html->script('/notepads/js/notepads.js'); ?>

<div>
	<?php
		//本文の表示
		echo $this->element('index/notepad');
	?>
</div>

<div ng-controller="Notepads"
	ng-init="initialize(<?php echo h(json_encode($notepad)); ?>,
				<?php echo (int)$frameId; ?>)">
	<?php
		//状態の表示
		echo $this->element('index/status_label');
	?>
</div>
