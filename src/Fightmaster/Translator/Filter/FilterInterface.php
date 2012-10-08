<?php

/**
 * This file is part of the fightmaster/transliterator library.
 *
 * (c) Dmitry Petrov aka fightmaster <old.fightmaster@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fightmaster\Transliterator\Filter;

/**
 * @author Dmitry Petrov aka fightmaster <old.fightmaster@gmail.com>
 */
interface FilterInterface
{
    /**
     * Handles and transforms value
     *
     * @param string $value
     * @return string
     */
    public function handle($value);
}
