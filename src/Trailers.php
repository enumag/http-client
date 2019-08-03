<?php

namespace Amp\Http\Client;

use Amp\Http\Message;

final class Trailers extends Message
{
    /**
     * @param string[][] $headers
     */
    public function __construct(array $headers)
    {
        if (!empty($headers)) {
            $this->setHeaders($headers);
        }
    }
}
