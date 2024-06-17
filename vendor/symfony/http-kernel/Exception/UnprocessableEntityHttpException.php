<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Exception;

/**
 * @author Steve Hutchins <hutchinsteve@gmail.com>
 */
class UnprocessableEntityHttpException extends HttpException
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(string $message = '', ?\Throwable $previous = null, int $code = 0, array $headers = [])
=======
    public function __construct(string $message = '', \Throwable $previous = null, int $code = 0, array $headers = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(string $message = '', \Throwable $previous = null, int $code = 0, array $headers = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        parent::__construct(422, $message, $previous, $headers, $code);
    }
}
