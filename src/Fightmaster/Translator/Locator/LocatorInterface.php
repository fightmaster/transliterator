<?php

/**
 * This file is part of the fightmaster/transliterator library.
 *
 * (c) Dmitry Petrov aka fightmaster <old.fightmaster@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fightmaster\Transliterator\Locator;

/**
 * @author Dmitry Petrov aka fightmaster <old.fightmaster@gmail.com>
 */
interface LocatorInterface
{
    /**
     * @param string $lang
     * @param string $extension
     * @return array
     */
    public function findTranslationData($lang, $extension);
}
