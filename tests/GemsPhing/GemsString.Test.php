<?php

use GemsPhingTest\GemsTest;

class GemsStringTest extends GemsTest
{
	/**
	 * @test
	 */
	public function endsWith()
	{
		$this->assertTrue(GemsPhing\GemsString::endsWith("Spaceship", "ship"));
		$this->assertFalse(GemsPhing\GemsString::endsWith("Thing", "That"));
	}

	/**
	 * @test
	 */
	public function startsWith()
	{
		$this->assertTrue(GemsPhing\GemsString::startsWith("Spaceship", "Space"));
		$this->assertFalse(GemsPhing\GemsString::startsWith("Thing", "That"));
	}
}