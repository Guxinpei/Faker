<?php

namespace Faker\Test\Provider\nl_NL;

use Faker\Generator;
use Faker\Provider\nl_NL\Address;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testSecondaryAddress()
    {
        $secondaryAddress = $this->faker->secondaryAddress();
        self::assertRegExp('/^[0-9]{2}(-[0-9]{2})?$/', $secondaryAddress);
    }
}
