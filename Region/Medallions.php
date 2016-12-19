<?php namespace Randomizer\Region;

use Randomizer\Support\LocationCollection;
use Randomizer\Location\Medallion;
use Randomizer\Region;
use Randomizer\Item;
use Randomizer\World;

/**
 * Region to hold the Medallion Entry Locations in the world
 */
class Medallions extends Region {
	/**
	 * Create a new Medallions Region to hold sword locations. We initalize these locations with Items in them so when
	 * we fill in base Items for each region they can fill them, as Entry is not really a consideration for Keys, Maps,
	 * and Compasses
	 *
	 * @param World $world World this Region is part of
	 *
	 * @return void
	 */
	public function __construct(World $world) {
		parent::__construct($world);

		$this->locations = new LocationCollection([
			(new Medallion("Turtle Rock Medallion", [null, 0x180023, 't0' => 0x5020, 't1' => 0x50FF, 't2' => 0x51DE], null, $this))->setItem(Item::get('Quake')),
			(new Medallion("Misery Mire Medallion", [null, 0x180022, 'm0' => 0x4FF2, 'm1' => 0x50D1, 'm2' => 0x51B0], null, $this))->setItem(Item::get('Ether')),
		]);
	}
}
