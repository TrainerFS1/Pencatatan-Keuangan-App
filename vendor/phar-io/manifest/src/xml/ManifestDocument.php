<?php declare(strict_types = 1);
/*
 * This file is part of PharIo\Manifest.
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * Copyright (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de> and contributors
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
namespace PharIo\Manifest;

use DOMDocument;
use DOMElement;
<<<<<<< HEAD
<<<<<<< HEAD
use Throwable;
use function count;
use function file_get_contents;
use function is_file;
use function libxml_clear_errors;
use function libxml_get_errors;
use function libxml_use_internal_errors;
use function sprintf;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

class ManifestDocument {
    public const XMLNS = 'https://phar.io/xml/manifest/1.0';

    /** @var DOMDocument */
    private $dom;

    public static function fromFile(string $filename): ManifestDocument {
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_file($filename)) {
            throw new ManifestDocumentException(
                sprintf('File "%s" not found', $filename)
=======
        if (!\file_exists($filename)) {
            throw new ManifestDocumentException(
                \sprintf('File "%s" not found', $filename)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if (!\file_exists($filename)) {
            throw new ManifestDocumentException(
                \sprintf('File "%s" not found', $filename)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        return self::fromString(
<<<<<<< HEAD
<<<<<<< HEAD
            file_get_contents($filename)
=======
            \file_get_contents($filename)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            \file_get_contents($filename)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public static function fromString(string $xmlString): ManifestDocument {
<<<<<<< HEAD
<<<<<<< HEAD
        $prev = libxml_use_internal_errors(true);
        libxml_clear_errors();

        try {
            $dom = new DOMDocument();
            $dom->loadXML($xmlString);
            $errors = libxml_get_errors();
            libxml_use_internal_errors($prev);
        } catch (Throwable $t) {
            throw new ManifestDocumentException($t->getMessage(), 0, $t);
        }

        if (count($errors) !== 0) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $prev = \libxml_use_internal_errors(true);
        \libxml_clear_errors();

        $dom = new DOMDocument();
        $dom->loadXML($xmlString);

        $errors = \libxml_get_errors();
        \libxml_use_internal_errors($prev);

        if (\count($errors) !== 0) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            throw new ManifestDocumentLoadingException($errors);
        }

        return new self($dom);
    }

    private function __construct(DOMDocument $dom) {
        $this->ensureCorrectDocumentType($dom);

        $this->dom = $dom;
    }

    public function getContainsElement(): ContainsElement {
        return new ContainsElement(
            $this->fetchElementByName('contains')
        );
    }

    public function getCopyrightElement(): CopyrightElement {
        return new CopyrightElement(
            $this->fetchElementByName('copyright')
        );
    }

    public function getRequiresElement(): RequiresElement {
        return new RequiresElement(
            $this->fetchElementByName('requires')
        );
    }

    public function hasBundlesElement(): bool {
        return $this->dom->getElementsByTagNameNS(self::XMLNS, 'bundles')->length === 1;
    }

    public function getBundlesElement(): BundlesElement {
        return new BundlesElement(
            $this->fetchElementByName('bundles')
        );
    }

    private function ensureCorrectDocumentType(DOMDocument $dom): void {
        $root = $dom->documentElement;

        if ($root->localName !== 'phar' || $root->namespaceURI !== self::XMLNS) {
            throw new ManifestDocumentException('Not a phar.io manifest document');
        }
    }

    private function fetchElementByName(string $elementName): DOMElement {
        $element = $this->dom->getElementsByTagNameNS(self::XMLNS, $elementName)->item(0);

        if (!$element instanceof DOMElement) {
            throw new ManifestDocumentException(
<<<<<<< HEAD
<<<<<<< HEAD
                sprintf('Element %s missing', $elementName)
=======
                \sprintf('Element %s missing', $elementName)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                \sprintf('Element %s missing', $elementName)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        return $element;
    }
}
