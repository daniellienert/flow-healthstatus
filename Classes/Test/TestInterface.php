<?php

declare(strict_types=1);

namespace t3n\Flow\HealthStatus\Test;

/**
 * This file is part of the t3n.Flow.HealthStatus package.
 *
 * (c) 2018 yeebase media GmbH
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use t3n\Flow\HealthStatus\Task\TaskInterface;

interface TestInterface extends TaskInterface
{
    public function test(): bool;
}
