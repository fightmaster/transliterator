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

/**
 * @author Dmitry Petrov aka fightmaster <old.fightmaster@gmail.com>
 */
interface DriverInterface
{
    /**
     * @param string $lang
     * @return array|null
     */
    public function loadTranslationData($lang);
}
