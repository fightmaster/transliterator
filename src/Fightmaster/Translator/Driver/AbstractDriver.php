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

use Fightmaster\Transliterator\Locator\LocatorInterface;

/**
 * @author Dmitry Petrov aka fightmaster <old.fightmaster@gmail.com>
 */
abstract class AbstractDriver implements DriverInterface
{
    /**
     * @var LocatorInterface
     */
    private $locator;

    /**
     * @param string $location
     * @return array|null
     */
    abstract protected function loadTranslationDataFromLocation($location);

    /**
     * @return string
     */
    abstract protected function getExtension();

    /**
     * @param LocatorInterface $locator
     */
    public function __construct(LocatorInterface $locator)
    {
        $this->locator = $locator;
    }

    /**
     *
     * @param string $lang
     * @return array|null
     */
    public function loadTranslationData($lang)
    {
        if (null === $location = $this->locator->findTranslationData($lang, $this->getExtension())) {
            return null;
        }

        return $this->loadTranslationDataFromLocation($location);
    }


}
