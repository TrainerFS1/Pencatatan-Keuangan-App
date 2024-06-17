<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner;

use function sprintf;
use RuntimeException;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class FileDoesNotExistException extends RuntimeException implements Exception
{
    public function __construct(string $file)
    {
        parent::__construct(
            sprintf(
                'File "%s" does not exist',
<<<<<<< HEAD
<<<<<<< HEAD
                $file,
            ),
=======
                $file
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $file
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
