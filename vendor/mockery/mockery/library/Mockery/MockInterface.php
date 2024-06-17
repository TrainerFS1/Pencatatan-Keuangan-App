<?php
<<<<<<< HEAD
<<<<<<< HEAD

/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link https://github.com/mockery/mockery for the canonical source repository
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
/**
 * Mockery
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://github.com/padraic/mockery/blob/master/LICENSE
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to padraic@php.net so we can send you a copy immediately.
 *
 * @category   Mockery
 * @package    Mockery
 * @copyright  Copyright (c) 2010 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    http://github.com/padraic/mockery/blob/master/LICENSE New BSD License
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */

namespace Mockery;

<<<<<<< HEAD
<<<<<<< HEAD
interface MockInterface extends LegacyMockInterface
{
    /**
     * @param mixed $something String method name or map of method => return
     *
     * @return Expectation|ExpectationInterface|HigherOrderMessage|self
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Mockery\LegacyMockInterface;

interface MockInterface extends LegacyMockInterface
{
    /**
     * @param mixed $something  String method name or map of method => return
     * @return self|\Mockery\ExpectationInterface|\Mockery\Expectation|\Mockery\HigherOrderMessage
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function allows($something = []);

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param mixed $something String method name (optional)
     *
     * @return Expectation|ExpectationInterface|ExpectsHigherOrderMessage
=======
     * @param mixed $something  String method name (optional)
     * @return \Mockery\ExpectationInterface|\Mockery\Expectation|\Mockery\ExpectsHigherOrderMessage
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param mixed $something  String method name (optional)
     * @return \Mockery\ExpectationInterface|\Mockery\Expectation|\Mockery\ExpectsHigherOrderMessage
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function expects($something = null);
}
