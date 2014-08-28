<?php
/**
 * Migration file
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Notepads.Config.Migration
 */

/**
 * Notepads CakeMigration
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @package app.Plugin.Notepads.Config.Migration
 */
class Notepads extends CakeMigration {

/**
 * Migration description
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var string
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'notepads' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'notepad_block_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => '2'),
					'is_auto_translated' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
					'translation_engine' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'content' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'notepads_blocks' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1)
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'notepad_settings' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'notepad_block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1)
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'notepad_part_settings' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'notepad_block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
					'part_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'readable_content' => array('type' => 'boolean', 'null' => false, 'default' => false),
					'editable_content' => array('type' => 'boolean', 'null' => false, 'default' => false),
					'creatable_content' => array('type' => 'boolean', 'null' => false, 'default' => false),
					'publishable_content' => array('type' => 'boolean', 'null' => false, 'default' => false),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1)
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
			)
		),
		'down' => array(
			'drop_table' => array(
				'notepads',
				'notepads_blocks',
				'notepad_settings',
				'notepad_part_settings',
			)
		)
	);

/**
 * recodes
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array $records
 */
	public $records = array();

/**
 * Before migration callback
 *
 * @param string $direction up or down direction of migration process
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @return boolean Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction up or down direction of migration process
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @return boolean Should process continue
 */
	public function after($direction) {
		if ($direction === 'down') {
			return true;
		}

		foreach ($this->records as $model => $records) {
			if (!$this->updateRecords($model, $records)) {
				return false;
			}
		}

		return true;
	}

/**
 * Update model records
 *
 * @param string $model model name to update
 * @param string $records records to be stored
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @return boolean Should process continue
 */
	public function updateRecords($model, $records) {
		$Model = $this->generateModel($model);
		foreach ($records as $record) {
			$Model->create();
			if (!$Model->save($record, false)) {
				return false;
			}
		}

		return true;
	}

}
