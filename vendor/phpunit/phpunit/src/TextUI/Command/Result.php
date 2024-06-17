<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Command;

/**
 * @psalm-immutable
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Result
{
<<<<<<< HEAD
<<<<<<< HEAD
    public const SUCCESS   = 0;
    public const FAILURE   = 1;
    public const EXCEPTION = 2;
    public const CRASH     = 255;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public const SUCCESS = 0;

    public const FAILURE = 1;

    public const EXCEPTION = 2;

    public const CRASH = 255;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private readonly string $output;
    private readonly int $shellExitCode;

    public static function from(string $output = '', int $shellExitCode = self::SUCCESS): self
    {
        return new self($output, $shellExitCode);
    }

    private function __construct(string $output, int $shellExitCode)
    {
        $this->output        = $output;
        $this->shellExitCode = $shellExitCode;
    }

    public function output(): string
    {
        return $this->output;
    }

    public function shellExitCode(): int
    {
        return $this->shellExitCode;
    }
}
