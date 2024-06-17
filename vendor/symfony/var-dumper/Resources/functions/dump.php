<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Component\VarDumper\Caster\ScalarStub;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dump')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
<<<<<<< HEAD
<<<<<<< HEAD
     * @author Alexandre Daubois <alex.daubois@gmail.com>
     */
    function dump(mixed ...$vars): mixed
    {
        if (!$vars) {
            VarDumper::dump(new ScalarStub('🐛'));

            return null;
        }

        if (array_key_exists(0, $vars) && 1 === count($vars)) {
            VarDumper::dump($vars[0]);
            $k = 0;
        } else {
            foreach ($vars as $k => $v) {
                VarDumper::dump($v, is_int($k) ? 1 + $k : $k);
            }
        }

        if (1 < count($vars)) {
            return $vars;
        }

        return $vars[$k];
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    function dump(mixed $var, mixed ...$moreVars): mixed
    {
        VarDumper::dump($var);

        foreach ($moreVars as $v) {
            VarDumper::dump($v);
        }

        if (1 < func_num_args()) {
            return func_get_args();
        }

        return $var;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}

if (!function_exists('dd')) {
<<<<<<< HEAD
<<<<<<< HEAD
    function dd(mixed ...$vars): never
    {
        if (!\in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) && !headers_sent()) {
            header('HTTP/1.1 500 Internal Server Error');
        }

        if (array_key_exists(0, $vars) && 1 === count($vars)) {
            VarDumper::dump($vars[0]);
        } else {
            foreach ($vars as $k => $v) {
                VarDumper::dump($v, is_int($k) ? 1 + $k : $k);
            }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @return never
     */
    function dd(...$vars): void
    {
        if (!in_array(\PHP_SAPI, ['cli', 'phpdbg'], true) && !headers_sent()) {
            header('HTTP/1.1 500 Internal Server Error');
        }

        foreach ($vars as $v) {
            VarDumper::dump($v);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        exit(1);
    }
}
