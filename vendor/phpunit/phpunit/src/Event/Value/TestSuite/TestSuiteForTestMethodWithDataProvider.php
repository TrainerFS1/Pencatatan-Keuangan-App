<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\TestSuite;

use PHPUnit\Event\Code\TestCollection;

/**
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteForTestMethodWithDataProvider extends TestSuite
{
    /**
     * @psalm-var class-string
     */
    private readonly string $className;
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * @psalm-var non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private readonly string $methodName;
    private readonly string $file;
    private readonly int $line;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-param non-empty-string $name
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
=======
     * @psalm-param class-string $name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @psalm-param class-string $name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(string $name, int $size, TestCollection $tests, string $className, string $methodName, string $file, int $line)
    {
        parent::__construct($name, $size, $tests);

        $this->className  = $className;
        $this->methodName = $methodName;
        $this->file       = $file;
        $this->line       = $line;
    }

    /**
     * @psalm-return class-string
     */
    public function className(): string
    {
        return $this->className;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function methodName(): string
    {
        return $this->methodName;
    }

    public function file(): string
    {
        return $this->file;
    }

    public function line(): int
    {
        return $this->line;
    }

    /**
     * @psalm-assert-if-true TestSuiteForTestMethodWithDataProvider $this
     */
    public function isForTestMethodWithDataProvider(): bool
    {
        return true;
    }
}
