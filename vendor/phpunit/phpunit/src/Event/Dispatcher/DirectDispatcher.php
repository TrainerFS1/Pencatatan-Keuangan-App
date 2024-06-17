<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event;

use function array_key_exists;
use function dirname;
use function sprintf;
use function str_starts_with;
use Throwable;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DirectDispatcher implements SubscribableDispatcher
{
    private readonly TypeMap $typeMap;

    /**
     * @psalm-var array<class-string, list<Subscriber>>
     */
    private array $subscribers = [];

    /**
     * @psalm-var list<Tracer\Tracer>
     */
    private array $tracers = [];

    public function __construct(TypeMap $map)
    {
        $this->typeMap = $map;
    }

    public function registerTracer(Tracer\Tracer $tracer): void
    {
        $this->tracers[] = $tracer;
    }

    /**
     * @throws MapError
     * @throws UnknownSubscriberTypeException
     */
    public function registerSubscriber(Subscriber $subscriber): void
    {
        if (!$this->typeMap->isKnownSubscriberType($subscriber)) {
            throw new UnknownSubscriberTypeException(
                sprintf(
                    'Subscriber "%s" does not implement any known interface - did you forget to register it?',
<<<<<<< HEAD
<<<<<<< HEAD
                    $subscriber::class,
                ),
=======
                    $subscriber::class
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $subscriber::class
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        $eventClassName = $this->typeMap->map($subscriber);

        if (!array_key_exists($eventClassName, $this->subscribers)) {
            $this->subscribers[$eventClassName] = [];
        }

        $this->subscribers[$eventClassName][] = $subscriber;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws Throwable
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws UnknownEventTypeException
     */
    public function dispatch(Event $event): void
    {
        $eventClassName = $event::class;

        if (!$this->typeMap->isKnownEventType($event)) {
            throw new UnknownEventTypeException(
                sprintf(
                    'Unknown event type "%s"',
<<<<<<< HEAD
<<<<<<< HEAD
                    $eventClassName,
                ),
=======
                    $eventClassName
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $eventClassName
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        foreach ($this->tracers as $tracer) {
            try {
                $tracer->trace($event);
<<<<<<< HEAD
<<<<<<< HEAD
                // @codeCoverageIgnoreStart
            } catch (Throwable $t) {
                $this->handleThrowable($t);
            }
            // @codeCoverageIgnoreEnd
=======
            } catch (Throwable $t) {
                $this->ignoreThrowablesFromThirdPartySubscribers($t);
            }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            } catch (Throwable $t) {
                $this->ignoreThrowablesFromThirdPartySubscribers($t);
            }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        if (!array_key_exists($eventClassName, $this->subscribers)) {
            return;
        }

        foreach ($this->subscribers[$eventClassName] as $subscriber) {
            try {
                $subscriber->notify($event);
            } catch (Throwable $t) {
<<<<<<< HEAD
<<<<<<< HEAD
                $this->handleThrowable($t);
=======
                $this->ignoreThrowablesFromThirdPartySubscribers($t);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $this->ignoreThrowablesFromThirdPartySubscribers($t);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }
        }
    }

    /**
     * @throws Throwable
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function handleThrowable(Throwable $t): void
    {
        if ($this->isThrowableFromThirdPartySubscriber($t)) {
            Facade::emitter()->testRunnerTriggeredWarning(
                sprintf(
                    'Exception in third-party event subscriber: %s%s%s',
                    $t->getMessage(),
                    PHP_EOL,
                    $t->getTraceAsString(),
                ),
            );

            return;
        }

        // @codeCoverageIgnoreStart
        throw $t;
        // @codeCoverageIgnoreEnd
    }

    private function isThrowableFromThirdPartySubscriber(Throwable $t): bool
    {
        return !str_starts_with($t->getFile(), dirname(__DIR__, 2));
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function ignoreThrowablesFromThirdPartySubscribers(Throwable $t): void
    {
        if (str_starts_with($t->getFile(), dirname(__DIR__, 2))) {
            throw $t;
        }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
