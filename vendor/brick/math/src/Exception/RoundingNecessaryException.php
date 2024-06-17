<?php

declare(strict_types=1);

namespace Brick\Math\Exception;

/**
 * Exception thrown when a number cannot be represented at the requested scale without rounding.
 */
class RoundingNecessaryException extends MathException
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @return RoundingNecessaryException
     *
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @return RoundingNecessaryException
     *
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-pure
     */
    public static function roundingNecessary() : RoundingNecessaryException
    {
        return new self('Rounding is necessary to represent the result of the operation at this scale.');
    }
}
