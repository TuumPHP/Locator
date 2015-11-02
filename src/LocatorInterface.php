<?php
namespace Tuum\Locator;

interface LocatorInterface
{
    /**
     * @param string $file
     * @return bool|string
     */
    public function locate($file);
}