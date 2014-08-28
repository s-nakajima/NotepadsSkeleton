<?php
/**
 * NotepadSettingFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Notepads.Test.Model.Fixture
 */

/**
 * NotepadsSettingFixture
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @package app.Plugin.Notepads.Model
 */
class NotepadSettingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'notepad_block_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'notepad_block_id' => 1,
		),
	);

}
