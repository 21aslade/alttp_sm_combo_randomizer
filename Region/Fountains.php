<?php namespace Randomizer\Region;

use Randomizer\Location;
use Randomizer\Region;
use Randomizer\Support\LocationCollection;
use Randomizer\World;

/**
 * Region to hold the Fairy Fountain prizes in the world
 */
class Fountains extends Region {
	/**
	 * Create a new Fountains to hold fountain prizes
	 *
	 * @param World $world World this Region is part of
	 *
	 * @return void
	 */
	public function __construct(World $world) {
		parent::__construct($world);

		$this->locations = new LocationCollection([
			new Location("Waterfall Bottle", 0x348FF, null, $this),
			new Location("Pyramid Bottle", 0x3493B, null, $this),
		]);
	}
}
