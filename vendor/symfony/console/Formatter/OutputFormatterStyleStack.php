<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Formatter;

use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Contracts\Service\ResetInterface;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class OutputFormatterStyleStack implements ResetInterface
{
    /**
     * @var OutputFormatterStyleInterface[]
     */
    private array $styles = [];

    private OutputFormatterStyleInterface $emptyStyle;

<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(?OutputFormatterStyleInterface $emptyStyle = null)
=======
    public function __construct(OutputFormatterStyleInterface $emptyStyle = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(OutputFormatterStyleInterface $emptyStyle = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->emptyStyle = $emptyStyle ?? new OutputFormatterStyle();
        $this->reset();
    }

    /**
     * Resets stack (ie. empty internal arrays).
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function reset()
    {
        $this->styles = [];
    }

    /**
     * Pushes a style in the stack.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function push(OutputFormatterStyleInterface $style)
    {
        $this->styles[] = $style;
    }

    /**
     * Pops a style from the stack.
     *
     * @throws InvalidArgumentException When style tags incorrectly nested
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function pop(?OutputFormatterStyleInterface $style = null): OutputFormatterStyleInterface
=======
    public function pop(OutputFormatterStyleInterface $style = null): OutputFormatterStyleInterface
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function pop(OutputFormatterStyleInterface $style = null): OutputFormatterStyleInterface
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (!$this->styles) {
            return $this->emptyStyle;
        }

        if (null === $style) {
            return array_pop($this->styles);
        }

        foreach (array_reverse($this->styles, true) as $index => $stackedStyle) {
            if ($style->apply('') === $stackedStyle->apply('')) {
                $this->styles = \array_slice($this->styles, 0, $index);

                return $stackedStyle;
            }
        }

        throw new InvalidArgumentException('Incorrectly nested style tag found.');
    }

    /**
     * Computes current style with stacks top codes.
     */
    public function getCurrent(): OutputFormatterStyleInterface
    {
        if (!$this->styles) {
            return $this->emptyStyle;
        }

        return $this->styles[\count($this->styles) - 1];
    }

    /**
     * @return $this
     */
    public function setEmptyStyle(OutputFormatterStyleInterface $emptyStyle): static
    {
        $this->emptyStyle = $emptyStyle;

        return $this;
    }

    public function getEmptyStyle(): OutputFormatterStyleInterface
    {
        return $this->emptyStyle;
    }
}
