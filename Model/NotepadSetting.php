<?php
/**
 * NotepadSetting Model
 *
 * @property Block $Block
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Notepads.Model
 */

App::uses('NotepadsAppModel', 'Notepads.Model');

/**
 * NotepadSetting Model
 *
 * @property Block $Block
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @package app.Plugin.Notepads.Model
 */
class NotepadSetting extends NotepadsAppModel {

/**
 * Validation rules
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array
 */
	public $validate = array(
		'notepad_block_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
	);

/**
 * belongsTo associations
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array
 */
	public $belongsTo = array(
		'NotepadsBlock' => array(
			'className' => 'NotepadsBlock',
			'foreignKey' => 'notepad_block_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
