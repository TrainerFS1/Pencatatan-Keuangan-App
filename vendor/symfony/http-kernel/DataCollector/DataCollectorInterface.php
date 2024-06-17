<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Service\ResetInterface;

/**
 * DataCollectorInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface DataCollectorInterface extends ResetInterface
{
    /**
     * Collects data for the given Request and Response.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
     */
    public function collect(Request $request, Response $response, ?\Throwable $exception = null);
=======
     */
    public function collect(Request $request, Response $response, \Throwable $exception = null);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     */
    public function collect(Request $request, Response $response, \Throwable $exception = null);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Returns the name of the collector.
     *
     * @return string
     */
    public function getName();
}
