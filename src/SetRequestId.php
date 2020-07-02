<?php

declare(strict_types=1);

namespace Stryber\Uuid;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\HttpFoundation\HeaderBag;

final class SetRequestId
{
    public const REQUEST_ID_HEADER = 'X-Request-ID';

    private UuidInterface $uuid;

    public function __construct(UuidGenerator $uuidGenerator)
    {
        $this->uuid = $uuidGenerator->generate();
    }

    public function handle(Request $request, Closure $next)
    {
        $this->setHeader($request->headers);
        /** @var Response $response */
        $response = $next($request);
        $this->setHeader($response->headers);

        return $response;
    }

    private function setHeader(HeaderBag $headerBag): void
    {
        if ($headerBag->has(self::REQUEST_ID_HEADER)) {
            return;
        }

        $headerBag->set(self::REQUEST_ID_HEADER, (string)$this->uuid);
    }
}
