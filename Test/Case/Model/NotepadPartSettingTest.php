<?php
/**
 * NotepadPartSettingTest Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Notepads.Test.Model.Case
 */

App::uses('NotepadPartSetting', 'Notepads.Model');

/**
 * NotepadsPart Test Case
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @package app.Plugin.Notepads.Model
 */
class NotepadPartSettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array
 */
	public $fixtures = array(
		'plugin.notepads.notepad_part_setting',
		'plugin.notepads.block',
		'plugin.notepads.language',
		'plugin.notepads.blocks_language',
		'plugin.notepads.part',
		'plugin.notepads.languages_part',
		'plugin.notepads.notepads_block',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NotepadPartSetting = ClassRegistry::init('Notepads.NotepadPartSetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NotepadPartSetting);

		parent::tearDown();
	}

/**
 * testFindById
 *
 * @return void
 */
	public function testFindById() {
		$id = 1;
		$rtn = $this->NotepadPartSetting->findById($id);
		$this->assertTrue(is_array($rtn));
	}

}
