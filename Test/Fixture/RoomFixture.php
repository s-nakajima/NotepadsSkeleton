<?php
/**
 * RoomFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.PluginRoomManager.Test.Fixture
 */

/**
 * RoomFixture
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @package app.Plugin.PluginRoomManager.Test.Case
 */
class RoomFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'space_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'type' => array('type' => 'integer', 'null' => true, 'default' => null),
		'top_page_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'group_id' => 1,
			'space_id' => 1,
			'type' => 1,
			'top_page_id' => 1,
			'created_user_id' => 1,
			'created' => '2014-06-02 16:18:04',
			'modified_user_id' => 1,
			'modified' => '2014-06-02 16:18:04'
		),
	);

}
