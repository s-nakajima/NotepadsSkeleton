<?php
/**
 * NotepadsApp Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Notepads.Controller
 */

App::uses('AppController', 'Controller');
App::uses('NetCommonsFrameAppController', 'NetCommons.Controller');

/**
 * NotepadsApp Controller
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @package app.Plugin.Notepads.Controller
 */
class NotepadsAppController extends NetCommonsFrameAppController {

/**
 * use component
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array
 */
	public $components = array(
		'Security'
	);
}
