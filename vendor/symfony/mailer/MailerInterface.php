<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer;

use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mime\RawMessage;

/**
 * Interface for mailers able to send emails synchronous and/or asynchronous.
 *
 * Implementations must support synchronous and asynchronous sending.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface MailerInterface
{
    /**
     * @throws TransportExceptionInterface
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function send(RawMessage $message, ?Envelope $envelope = null): void;
=======
    public function send(RawMessage $message, Envelope $envelope = null): void;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function send(RawMessage $message, Envelope $envelope = null): void;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
