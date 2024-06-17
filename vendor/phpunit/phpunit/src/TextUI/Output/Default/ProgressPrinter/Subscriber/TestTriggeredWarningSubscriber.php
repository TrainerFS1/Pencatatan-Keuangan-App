<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Output\Default\ProgressPrinter;

use PHPUnit\Event\Test\WarningTriggered;
use PHPUnit\Event\Test\WarningTriggeredSubscriber;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestTriggeredWarningSubscriber extends Subscriber implements WarningTriggeredSubscriber
{
    public function notify(WarningTriggered $event): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->printer()->testTriggeredWarning($event);
=======
        $this->printer()->testTriggeredWarning();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->printer()->testTriggeredWarning();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
