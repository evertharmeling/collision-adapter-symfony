<?php

declare(strict_types=1);

/*
 * This file is part of Collision Adapter Symfony.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests;

use NunoMaduro\CollisionAdapterSymfony\CollisionAdapterSymfonyBundle;

class CollisionAdapterSymfonyBundleTest extends TestCase
{
    /**
     * Tests if the bundle got registered correctly on the kernel.
     */
    public function testBundleGotRegistered(): void
    {
        ($kernel = static::createKernel())->boot();

        $bundle = $kernel->getBundle('CollisionAdapterSymfonyBundle');

        $this->assertInstanceOf(CollisionAdapterSymfonyBundle::class, $bundle);
    }
}
