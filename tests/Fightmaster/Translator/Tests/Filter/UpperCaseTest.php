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

use Fightmaster\Transliterator\Filter\UpperCase;

/**
 * @author Dmitry Petrov <dmitry.petrov@opensoftdev.ru>
 */
class UpperCaseTest extends \PHPUnit_Framework_TestCase
{
    public function testHandle()
    {
        $upperCaseFilter = new UpperCase();
        $this->assertInstanceOf('Fightmaster\Transliterator\Filter\FilterInterface', $upperCaseFilter);
        $result = $upperCaseFilter->handle('WwW');
        $this->assertEquals('WWW', $result);
    }
}
