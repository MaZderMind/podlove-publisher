<?php
namespace Podlove\Modules\Statistics\Model;

/**
 * UserAgents table model
 */
class UserAgents extends \Podlove\Model\Base {

	//

}

UserAgents::property( 'id', 'INT NOT NULL AUTO_INCREMENT PRIMARY KEY' );
UserAgents::property( 'os', 'VARCHAR(255)' );
UserAgents::property( 'name', 'VARCHAR(255)' );
UserAgents::property( 'version', 'VARCHAR(255)' );
UserAgents::property( 'ua_regex', 'VARCHAR(255)' );
