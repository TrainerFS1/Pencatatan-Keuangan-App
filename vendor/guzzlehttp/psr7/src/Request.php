<?php

declare(strict_types=1);

namespace GuzzleHttp\Psr7;

use InvalidArgumentException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

/**
 * PSR-7 request implementation.
 */
class Request implements RequestInterface
{
    use MessageTrait;

    /** @var string */
    private $method;

    /** @var string|null */
    private $requestTarget;

    /** @var UriInterface */
    private $uri;

    /**
     * @param string                               $method  HTTP method
     * @param string|UriInterface                  $uri     URI
<<<<<<< HEAD
<<<<<<< HEAD
     * @param (string|string[])[]                  $headers Request headers
=======
     * @param array<string, string|string[]>       $headers Request headers
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param array<string, string|string[]>       $headers Request headers
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param string|resource|StreamInterface|null $body    Request body
     * @param string                               $version Protocol version
     */
    public function __construct(
        string $method,
        $uri,
        array $headers = [],
        $body = null,
        string $version = '1.1'
    ) {
        $this->assertMethod($method);
        if (!($uri instanceof UriInterface)) {
            $uri = new Uri($uri);
        }

        $this->method = strtoupper($method);
        $this->uri = $uri;
        $this->setHeaders($headers);
        $this->protocol = $version;

        if (!isset($this->headerNames['host'])) {
            $this->updateHostFromUri();
        }

        if ($body !== '' && $body !== null) {
            $this->stream = Utils::streamFor($body);
        }
    }

    public function getRequestTarget(): string
    {
        if ($this->requestTarget !== null) {
            return $this->requestTarget;
        }

        $target = $this->uri->getPath();
        if ($target === '') {
            $target = '/';
        }
        if ($this->uri->getQuery() != '') {
<<<<<<< HEAD
<<<<<<< HEAD
            $target .= '?'.$this->uri->getQuery();
=======
            $target .= '?' . $this->uri->getQuery();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $target .= '?' . $this->uri->getQuery();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return $target;
    }

    public function withRequestTarget($requestTarget): RequestInterface
    {
        if (preg_match('#\s#', $requestTarget)) {
            throw new InvalidArgumentException(
                'Invalid request target provided; cannot contain whitespace'
            );
        }

        $new = clone $this;
        $new->requestTarget = $requestTarget;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $new;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function withMethod($method): RequestInterface
    {
        $this->assertMethod($method);
        $new = clone $this;
        $new->method = strtoupper($method);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $new;
    }

    public function getUri(): UriInterface
    {
        return $this->uri;
    }

    public function withUri(UriInterface $uri, $preserveHost = false): RequestInterface
    {
        if ($uri === $this->uri) {
            return $this;
        }

        $new = clone $this;
        $new->uri = $uri;

        if (!$preserveHost || !isset($this->headerNames['host'])) {
            $new->updateHostFromUri();
        }

        return $new;
    }

    private function updateHostFromUri(): void
    {
        $host = $this->uri->getHost();

        if ($host == '') {
            return;
        }

        if (($port = $this->uri->getPort()) !== null) {
<<<<<<< HEAD
<<<<<<< HEAD
            $host .= ':'.$port;
=======
            $host .= ':' . $port;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $host .= ':' . $port;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        if (isset($this->headerNames['host'])) {
            $header = $this->headerNames['host'];
        } else {
            $header = 'Host';
            $this->headerNames['host'] = 'Host';
        }
        // Ensure Host is the first header.
<<<<<<< HEAD
<<<<<<< HEAD
        // See: https://datatracker.ietf.org/doc/html/rfc7230#section-5.4
=======
        // See: http://tools.ietf.org/html/rfc7230#section-5.4
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        // See: http://tools.ietf.org/html/rfc7230#section-5.4
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->headers = [$header => [$host]] + $this->headers;
    }

    /**
     * @param mixed $method
     */
    private function assertMethod($method): void
    {
        if (!is_string($method) || $method === '') {
            throw new InvalidArgumentException('Method must be a non-empty string.');
        }
    }
}
