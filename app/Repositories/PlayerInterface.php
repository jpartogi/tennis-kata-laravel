<?php 

namespace App\Repositories;

/**
 * RepositoryInterface provides the standard functions to be expected of ANY 
 * repository.
 */

interface PlayerInterface {
	
	//public function create(array $attributes);

	public function findPlayerByName($playerName);

}