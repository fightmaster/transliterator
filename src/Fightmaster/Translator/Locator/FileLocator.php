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
class FileLocator implements LocatorInterface
{
    /**
     * @var array
     */
    private $dirs;

    /**
     * @param array $dirs
     */
    public function __construct(array $dirs)
    {
        $this->dirs = $dirs;
    }

    /**
     * @param string $lang
     * @param string $extension
     * @return string|null
     */
    public function findTranslationData($lang, $extension)
    {
        foreach ($this->dirs as $dir) {
            $path = $dir . '/' . $extension . '/' . $lang . '.' . $extension;
            if (file_exists($path)) {
                return $path;
            }
        }

        return null;
    }


}
