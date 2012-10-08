<?php

/**
 * This file is part of the fightmaster/transliterator library.
 *
 * (c) Dmitry Petrov aka fightmaster <old.fightmaster@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fightmaster\Transliterator\Driver;

use Symfony\Component\Yaml\Yaml;

/**
 * @author Dmitry Petrov aka fightmaster <old.fightmaster@gmail.com>
 */
class PhpDriver extends AbstractDriver
{
    /**
     * @param string $location
     * @return array|null
     */
    protected function loadTranslationDataFromLocation($location)
    {
        return include_once($location);
    }

    /**
     * @return string
     */
    protected function getExtension()
    {
        return 'php';
    }
}
