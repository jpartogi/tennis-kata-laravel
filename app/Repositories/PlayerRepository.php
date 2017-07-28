<?php 

namespace App\Repositories;

class PlayerRepository implements PlayerInterface
{
	protected $modelClassName = '\App\Player';
	
	// This class only implements methods specific to the UserRepository
	public function findPlayerByName($playerName)
	{
		$clause = call_user_func_array("{$this->modelClassName}::where", array('name',$playerName));
		
		return $clause->get()->first();
	}
}