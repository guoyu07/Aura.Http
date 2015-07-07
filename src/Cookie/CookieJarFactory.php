<?php
/**
 *
 * This file is part of the Aura project for PHP.
 *
 * @package Aura.Http
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
namespace Aura\Http\Cookie;

/**
 *
 * A factory class to create new Aura\Http\Cookie\CookieJar
 *
 * @package Aura.Http
 *
 */
class CookieJarFactory
{
    /**
     *
     * Creates a new jar instance.
     *
     * @param resource|string $storage A string file name, or a stream
     * resource, for cookie storage.
     *
     * @return CookieJar
     *
     */
    public function newInstance($storage)
    {
        return new CookieJar(new CookieFactory, $storage);
    }
}
