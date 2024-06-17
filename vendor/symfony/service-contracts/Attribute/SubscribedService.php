<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Contracts\Service\Attribute;

<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Contracts\Service\ServiceMethodsSubscriberTrait;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
=======
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * For use as the return value for {@see ServiceSubscriberInterface}.
 *
 * @example new SubscribedService('http_client', HttpClientInterface::class, false, new Target('githubApi'))
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * Use with {@see ServiceMethodsSubscriberTrait} to mark a method's return type
=======
 * Use with {@see ServiceSubscriberTrait} to mark a method's return type
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
 * Use with {@see ServiceSubscriberTrait} to mark a method's return type
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * as a subscribed service.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
final class SubscribedService
{
    /** @var object[] */
    public array $attributes;

    /**
     * @param string|null       $key        The key to use for the service
     * @param class-string|null $type       The service class
     * @param bool              $nullable   Whether the service is optional
     * @param object|object[]   $attributes One or more dependency injection attributes to use
     */
    public function __construct(
        public ?string $key = null,
        public ?string $type = null,
        public bool $nullable = false,
        array|object $attributes = [],
    ) {
        $this->attributes = \is_array($attributes) ? $attributes : [$attributes];
    }
}
