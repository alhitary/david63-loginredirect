<?php
/**
*
* @package User Login Redirect
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\loginredirect\migrations;

class version_1_0_0 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('redirect_announce', '0')),
			array('config.add', array('redirect_announce_refresh', '0')),
			array('config.add', array('redirect_enabled', '0')),
			array('config.add', array('redirect_group', '0')),
			array('config.add', array('redirect_group_all', '0')),
			array('config.add', array('redirect_group_id', '5')),
			array('config.add', array('redirect_group_refresh', '0')),
			array('config.add', array('redirect_group_topic_id', '')),
			array('config.add', array('redirect_welcome', '0')),
			array('config.add', array('redirect_welcome_refresh', '0')),
			array('config.add', array('redirect_welcome_topic_id', '')),
			array('config.add', array('version_loginredirect', '1.0.0')),

			// Add the ACP module
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'REDIRECT')),

			array('module.add', array(
				'acp', 'REDIRECT', array(
					'module_basename'	=> '\david63\loginredirect\acp\loginredirect_module',
					'modes'				=> array('manage'),
				),
			)),
		);
	}
}
