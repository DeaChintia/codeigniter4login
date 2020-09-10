<?php

namespace App\Controllers;

use Ratchet\Server\IoServer;
use App\Libraries\Chat;

class Server extends BaseController
{
	public function index()
	{


		require COMPOSER_PATH;

		$server = IoServer::factory(
			new Chat(),
			8080
		);

		$server->run();
	}

	//--------------------------------------------------------------------

}
