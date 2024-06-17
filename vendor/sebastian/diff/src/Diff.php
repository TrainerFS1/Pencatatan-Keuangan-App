<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Diff;

<<<<<<< HEAD
<<<<<<< HEAD
use ArrayIterator;
use IteratorAggregate;
use Traversable;

/**
 * @template-implements IteratorAggregate<int, Chunk>
 */
final class Diff implements IteratorAggregate
{
    /**
     * @psalm-var non-empty-string
     */
    private string $from;

    /**
     * @psalm-var non-empty-string
     */
=======
final class Diff
{
    private string $from;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
final class Diff
{
    private string $from;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private string $to;

    /**
     * @psalm-var list<Chunk>
     */
    private array $chunks;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-param non-empty-string $from
     * @psalm-param non-empty-string $to
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-param list<Chunk> $chunks
     */
    public function __construct(string $from, string $to, array $chunks = [])
    {
        $this->from   = $from;
        $this->to     = $to;
        $this->chunks = $chunks;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
    public function from(): string
=======
    public function getFrom(): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getFrom(): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->from;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
    public function to(): string
=======
    public function getTo(): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getTo(): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->to;
    }

    /**
     * @psalm-return list<Chunk>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function chunks(): array
=======
    public function getChunks(): array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getChunks(): array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->chunks;
    }

    /**
     * @psalm-param list<Chunk> $chunks
     */
    public function setChunks(array $chunks): void
    {
        $this->chunks = $chunks;
    }
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * @psalm-return non-empty-string
     *
     * @deprecated
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @psalm-return non-empty-string
     *
     * @deprecated
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @psalm-return list<Chunk>
     *
     * @deprecated
     */
    public function getChunks(): array
    {
        return $this->chunks;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->chunks);
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
