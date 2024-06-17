<?php

namespace GuzzleHttp\Cookie;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Cookie jar that stores cookies as an array
 */
class CookieJar implements CookieJarInterface
{
    /**
     * @var SetCookie[] Loaded cookie data
     */
    private $cookies = [];

    /**
     * @var bool
     */
    private $strictMode;

    /**
     * @param bool  $strictMode  Set to true to throw exceptions when invalid
     *                           cookies are added to the cookie jar.
     * @param array $cookieArray Array of SetCookie objects or a hash of
     *                           arrays that can be used with the SetCookie
     *                           constructor
     */
    public function __construct(bool $strictMode = false, array $cookieArray = [])
    {
        $this->strictMode = $strictMode;

        foreach ($cookieArray as $cookie) {
            if (!($cookie instanceof SetCookie)) {
                $cookie = new SetCookie($cookie);
            }
            $this->setCookie($cookie);
        }
    }

    /**
     * Create a new Cookie jar from an associative array and domain.
     *
     * @param array  $cookies Cookies to create the jar from
     * @param string $domain  Domain to set the cookies to
     */
    public static function fromArray(array $cookies, string $domain): self
    {
        $cookieJar = new self();
        foreach ($cookies as $name => $value) {
            $cookieJar->setCookie(new SetCookie([
<<<<<<< HEAD
<<<<<<< HEAD
                'Domain' => $domain,
                'Name' => $name,
                'Value' => $value,
                'Discard' => true,
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                'Domain'  => $domain,
                'Name'    => $name,
                'Value'   => $value,
                'Discard' => true
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            ]));
        }

        return $cookieJar;
    }

    /**
     * Evaluate if this cookie should be persisted to storage
     * that survives between requests.
     *
     * @param SetCookie $cookie              Being evaluated.
     * @param bool      $allowSessionCookies If we should persist session cookies
     */
    public static function shouldPersist(SetCookie $cookie, bool $allowSessionCookies = false): bool
    {
        if ($cookie->getExpires() || $allowSessionCookies) {
            if (!$cookie->getDiscard()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Finds and returns the cookie based on the name
     *
     * @param string $name cookie name to search for
     *
     * @return SetCookie|null cookie that was found or null if not found
     */
    public function getCookieByName(string $name): ?SetCookie
    {
        foreach ($this->cookies as $cookie) {
            if ($cookie->getName() !== null && \strcasecmp($cookie->getName(), $name) === 0) {
                return $cookie;
            }
        }

        return null;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * @inheritDoc
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    /**
     * @inheritDoc
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function toArray(): array
    {
        return \array_map(static function (SetCookie $cookie): array {
            return $cookie->toArray();
        }, $this->getIterator()->getArrayCopy());
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function clear(string $domain = null, string $path = null, string $name = null): void
    {
        if (!$domain) {
            $this->cookies = [];

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @inheritDoc
     */
    public function clear(?string $domain = null, ?string $path = null, ?string $name = null): void
    {
        if (!$domain) {
            $this->cookies = [];
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return;
        } elseif (!$path) {
            $this->cookies = \array_filter(
                $this->cookies,
                static function (SetCookie $cookie) use ($domain): bool {
                    return !$cookie->matchesDomain($domain);
                }
            );
        } elseif (!$name) {
            $this->cookies = \array_filter(
                $this->cookies,
                static function (SetCookie $cookie) use ($path, $domain): bool {
<<<<<<< HEAD
<<<<<<< HEAD
                    return !($cookie->matchesPath($path)
                        && $cookie->matchesDomain($domain));
=======
                    return !($cookie->matchesPath($path) &&
                        $cookie->matchesDomain($domain));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    return !($cookie->matchesPath($path) &&
                        $cookie->matchesDomain($domain));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                }
            );
        } else {
            $this->cookies = \array_filter(
                $this->cookies,
                static function (SetCookie $cookie) use ($path, $domain, $name) {
<<<<<<< HEAD
<<<<<<< HEAD
                    return !($cookie->getName() == $name
                        && $cookie->matchesPath($path)
                        && $cookie->matchesDomain($domain));
=======
                    return !($cookie->getName() == $name &&
                        $cookie->matchesPath($path) &&
                        $cookie->matchesDomain($domain));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    return !($cookie->getName() == $name &&
                        $cookie->matchesPath($path) &&
                        $cookie->matchesDomain($domain));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                }
            );
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * @inheritDoc
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    /**
     * @inheritDoc
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function clearSessionCookies(): void
    {
        $this->cookies = \array_filter(
            $this->cookies,
            static function (SetCookie $cookie): bool {
                return !$cookie->getDiscard() && $cookie->getExpires();
            }
        );
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * @inheritDoc
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    /**
     * @inheritDoc
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function setCookie(SetCookie $cookie): bool
    {
        // If the name string is empty (but not 0), ignore the set-cookie
        // string entirely.
        $name = $cookie->getName();
        if (!$name && $name !== '0') {
            return false;
        }

        // Only allow cookies with set and valid domain, name, value
        $result = $cookie->validate();
        if ($result !== true) {
            if ($this->strictMode) {
<<<<<<< HEAD
<<<<<<< HEAD
                throw new \RuntimeException('Invalid cookie: '.$result);
            }
            $this->removeCookieIfEmpty($cookie);

=======
                throw new \RuntimeException('Invalid cookie: ' . $result);
            }
            $this->removeCookieIfEmpty($cookie);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                throw new \RuntimeException('Invalid cookie: ' . $result);
            }
            $this->removeCookieIfEmpty($cookie);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return false;
        }

        // Resolve conflicts with previously set cookies
        foreach ($this->cookies as $i => $c) {
            // Two cookies are identical, when their path, and domain are
            // identical.
<<<<<<< HEAD
<<<<<<< HEAD
            if ($c->getPath() != $cookie->getPath()
                || $c->getDomain() != $cookie->getDomain()
                || $c->getName() != $cookie->getName()
=======
            if ($c->getPath() != $cookie->getPath() ||
                $c->getDomain() != $cookie->getDomain() ||
                $c->getName() != $cookie->getName()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            if ($c->getPath() != $cookie->getPath() ||
                $c->getDomain() != $cookie->getDomain() ||
                $c->getName() != $cookie->getName()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            ) {
                continue;
            }

            // The previously set cookie is a discard cookie and this one is
            // not so allow the new cookie to be set
            if (!$cookie->getDiscard() && $c->getDiscard()) {
                unset($this->cookies[$i]);
                continue;
            }

            // If the new cookie's expiration is further into the future, then
            // replace the old cookie
            if ($cookie->getExpires() > $c->getExpires()) {
                unset($this->cookies[$i]);
                continue;
            }

            // If the value has changed, we better change it
            if ($cookie->getValue() !== $c->getValue()) {
                unset($this->cookies[$i]);
                continue;
            }

            // The cookie exists, so no need to continue
            return false;
        }

        $this->cookies[] = $cookie;

        return true;
    }

    public function count(): int
    {
        return \count($this->cookies);
    }

    /**
     * @return \ArrayIterator<int, SetCookie>
     */
    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator(\array_values($this->cookies));
    }

    public function extractCookies(RequestInterface $request, ResponseInterface $response): void
    {
        if ($cookieHeader = $response->getHeader('Set-Cookie')) {
            foreach ($cookieHeader as $cookie) {
                $sc = SetCookie::fromString($cookie);
                if (!$sc->getDomain()) {
                    $sc->setDomain($request->getUri()->getHost());
                }
                if (0 !== \strpos($sc->getPath(), '/')) {
                    $sc->setPath($this->getCookiePathFromRequest($request));
                }
                if (!$sc->matchesDomain($request->getUri()->getHost())) {
                    continue;
                }
                // Note: At this point `$sc->getDomain()` being a public suffix should
                // be rejected, but we don't want to pull in the full PSL dependency.
                $this->setCookie($sc);
            }
        }
    }

    /**
     * Computes cookie path following RFC 6265 section 5.1.4
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @see https://datatracker.ietf.org/doc/html/rfc6265#section-5.1.4
=======
     * @link https://tools.ietf.org/html/rfc6265#section-5.1.4
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @link https://tools.ietf.org/html/rfc6265#section-5.1.4
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    private function getCookiePathFromRequest(RequestInterface $request): string
    {
        $uriPath = $request->getUri()->getPath();
        if ('' === $uriPath) {
            return '/';
        }
        if (0 !== \strpos($uriPath, '/')) {
            return '/';
        }
        if ('/' === $uriPath) {
            return '/';
        }
        $lastSlashPos = \strrpos($uriPath, '/');
        if (0 === $lastSlashPos || false === $lastSlashPos) {
            return '/';
        }

        return \substr($uriPath, 0, $lastSlashPos);
    }

    public function withCookieHeader(RequestInterface $request): RequestInterface
    {
        $values = [];
        $uri = $request->getUri();
        $scheme = $uri->getScheme();
        $host = $uri->getHost();
        $path = $uri->getPath() ?: '/';

        foreach ($this->cookies as $cookie) {
<<<<<<< HEAD
<<<<<<< HEAD
            if ($cookie->matchesPath($path)
                && $cookie->matchesDomain($host)
                && !$cookie->isExpired()
                && (!$cookie->getSecure() || $scheme === 'https')
            ) {
                $values[] = $cookie->getName().'='
                    .$cookie->getValue();
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            if ($cookie->matchesPath($path) &&
                $cookie->matchesDomain($host) &&
                !$cookie->isExpired() &&
                (!$cookie->getSecure() || $scheme === 'https')
            ) {
                $values[] = $cookie->getName() . '='
                    . $cookie->getValue();
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }
        }

        return $values
            ? $request->withHeader('Cookie', \implode('; ', $values))
            : $request;
    }

    /**
     * If a cookie already exists and the server asks to set it again with a
     * null value, the cookie must be deleted.
     */
    private function removeCookieIfEmpty(SetCookie $cookie): void
    {
        $cookieValue = $cookie->getValue();
        if ($cookieValue === null || $cookieValue === '') {
            $this->clear(
                $cookie->getDomain(),
                $cookie->getPath(),
                $cookie->getName()
            );
        }
    }
}
