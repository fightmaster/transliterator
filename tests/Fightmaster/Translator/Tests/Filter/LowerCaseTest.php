<?php

/**
 * This file is part of the fightmaster/transliterator library.
 *
 * (c) Dmitry Petrov aka fightmaster <old.fightmaster@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fightmaster\Transliterator\Tests\Filter;

use Fightmaster\Transliterator\Filter\LowerCase;

/**
 * @author Dmitry Petrov <dmitry.petrov@opensoftdev.ru>
 */
class LowerCaseTest extends \PHPUnit_Framework_TestCase
{
    public function testHandle()
    {
        $lowerCaseFilter = new LowerCase();
        $this->assertInstanceOf('Fightmaster\Transliterator\Filter\FilterInterface', $lowerCaseFilter);
        $result = $lowerCaseFilter->handle('WwW');
        $this->assertEquals('www', $result);
    }
}
