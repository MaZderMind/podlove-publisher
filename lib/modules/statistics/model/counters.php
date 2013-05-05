<?php
namespace Podlove\Modules\Statistics\Model;

/**
 * Counters table model
 */
class Counters extends \Podlove\Model\Base {

	//

}

Counters::property( 'norm_timestamp', 'DATETIME' );
Counters::property( 'post_id', 'INT' );
Counters::property( 'episode_asset_id', 'INT' );
Counters::property( 'source', 'VARCHAR(16)' );
Counters::property( 'user_agent_id', 'INT' );
Counters::property( 'hits', 'INT UNSIGNED' );
Counters::property( 'uniques', 'INT UNSIGNED' );
