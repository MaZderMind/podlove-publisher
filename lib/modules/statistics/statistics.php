<?php 
namespace Podlove\Modules\Statistics;

/**
 * Podcast-Statistics Module
 *
 * Having Statistics is essential for any of Publisher. For Podcasters
 * there are not that many tools: the rancid Feedburner, the adolescent uri.lv
 * and basically those are all I'm aware of.
 * tbc;
 */
class Statistics extends \Podlove\Modules\Base {

	protected $module_name = 'Statistics';
	protected $module_description = 'Sweet Podcast Statistics';

	protected function __construct()
	{
		parent::__construct();

		// hooks for establishing statistics model
		add_action( 'podlove_module_was_activated_statistics', array( $this, 'activate_module' ) );
		add_action( 'podlove_module_was_deactivated_statistics', array( $this, 'deactivate_module' ) );
	}

	public function load() {
		require_once('model/counters.php');
		require_once('model/user_agents.php');
	}

	public function activate_module() {
			Model\Counters::build();
			Model\UserAgents::build();
	}

	public function deactivate_module() {
		Model\Counters::destroy();
		Model\UserAgents::destroy();
	}



	private function debug($msg) {
		file_put_contents('/tmp/podlove.log', $msg, FILE_APPEND);
	}

}
