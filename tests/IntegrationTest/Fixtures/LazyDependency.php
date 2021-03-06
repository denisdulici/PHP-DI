<?php

declare(strict_types=1);

namespace DI\Test\IntegrationTest\Fixtures;

use DI\Annotation\Injectable;

/**
 * Fixture class.
 * @Injectable(lazy=true)
 */
class LazyDependency
{
    /**
     * @return bool
     */
    public function getValue()
    {
        return true;
    }
}
