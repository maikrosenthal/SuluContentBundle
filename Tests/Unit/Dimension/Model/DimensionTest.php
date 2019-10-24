<?php

declare(strict_types=1);

/*
 * This file is part of Sulu.
 *
 * (c) Sulu GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\ContentBundle\Tests\Unit\Dimension\Model;

use PHPUnit\Framework\TestCase;
use Sulu\Bundle\ContentBundle\Dimension\Domain\Model\Dimension;

class DimensionTest extends TestCase
{
    /**
     * @var Dimension
     */
    private $dimension;

    public function setUp(): void
    {
        $this->dimension = new Dimension();
    }

    public function testGetId(): void
    {
        $this->assertNotNull($this->dimension->getId());
    }

    public function testGetSetLocale(): void
    {
        $this->assertNull($this->dimension->getLocale());
        $this->assertSame($this->dimension, $this->dimension->setLocale('de'));
        $this->assertSame('de', $this->dimension->getLocale());
    }

    public function testGetSetPublished(): void
    {
        $this->assertFalse($this->dimension->getPublished());
        $this->assertSame($this->dimension, $this->dimension->setPublished(true));
        $this->assertTrue($this->dimension->getPublished());
        $this->assertSame($this->dimension, $this->dimension->setPublished(false));
        $this->assertFalse($this->dimension->getPublished());
    }
}
