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
 * @category  Mockery
 * @package   Mockery
 * @copyright Copyright (c) 2010 Pádraic Brady (http://blog.astrumfutura.com)
 * @license   http://github.com/padraic/mockery/blob/master/LICENSE New BSD License
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */

namespace Mockery\Adapter\Phpunit;

<<<<<<< HEAD
<<<<<<< HEAD
use LogicException;
use Mockery;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\BaseTestRunner;
use PHPUnit\Util\Blacklist;
use ReflectionClass;

use function dirname;
use function method_exists;
use function sprintf;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestCase;
use PHPUnit\Util\Blacklist;
use PHPUnit\Runner\BaseTestRunner;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

class TestListenerTrait
{
    /**
     * endTest is called after each test and checks if \Mockery::close() has
     * been called, and will let the test fail if it hasn't.
     *
     * @param Test  $test
     * @param float $time
     */
    public function endTest(Test $test, $time)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $test instanceof TestCase) {
=======
        if (!$test instanceof TestCase) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if (!$test instanceof TestCase) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            // We need the getTestResultObject and getStatus methods which are
            // not part of the interface.
            return;
        }

        if ($test->getStatus() !== BaseTestRunner::STATUS_PASSED) {
            // If the test didn't pass there is no guarantee that
            // verifyMockObjects and assertPostConditions have been called.
            // And even if it did, the point here is to prevent false
            // negatives, not to make failing tests fail for more reasons.
            return;
        }

        try {
            // The self() call is used as a sentinel. Anything that throws if
            // the container is closed already will do.
<<<<<<< HEAD
<<<<<<< HEAD
            Mockery::self();
        } catch (LogicException $logicException) {
=======
            \Mockery::self();
        } catch (\LogicException $_) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            \Mockery::self();
        } catch (\LogicException $_) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return;
        }

        $e = new ExpectationFailedException(
<<<<<<< HEAD
<<<<<<< HEAD
            sprintf(
=======
            \sprintf(
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            \sprintf(
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                "Mockery's expectations have not been verified. Make sure that \Mockery::close() is called at the end of the test. Consider using %s\MockeryPHPUnitIntegration or extending %s\MockeryTestCase.",
                __NAMESPACE__,
                __NAMESPACE__
            )
        );

        /** @var \PHPUnit\Framework\TestResult $result */
        $result = $test->getTestResultObject();

        if ($result !== null) {
            $result->addFailure($test, $e, $time);
        }
    }

    public function startTestSuite()
    {
        if (method_exists(Blacklist::class, 'addDirectory')) {
<<<<<<< HEAD
<<<<<<< HEAD
            (new Blacklist())->getBlacklistedDirectories();
            Blacklist::addDirectory(dirname((new ReflectionClass(Mockery::class))->getFileName()));
        } else {
            Blacklist::$blacklistedClassNames[Mockery::class] = 1;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            (new BlackList())->getBlacklistedDirectories();
            Blacklist::addDirectory(\dirname((new \ReflectionClass(\Mockery::class))->getFileName()));
        } else {
            Blacklist::$blacklistedClassNames[\Mockery::class] = 1;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }
    }
}
