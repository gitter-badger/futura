<?php 
namespace Futura\Database;

use PDO;
/*use Exception;*/

class Connection {

	/**
	 * PDO Object
	 * @var PDO
	 */
	protected $pdo;

	/**
	 * dns name
	 * @var $string
	 */
	protected $dns;

	/**
	 * username of database
	 * @var string
	 */
	protected $username;

	/**
	 * password of database
	 * @var string
	 */
	protected $password;

	public function createConnection($dns, $config) {
		$username = $config['username'];

		$password = $config['password'];

        return new PDO($dns, $config);
    }

}