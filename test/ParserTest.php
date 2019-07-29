<?php /** @noinspection PhpUnhandledExceptionInspection */

namespace Amp\Http\Client;

use Amp\Http\Client\Connection\Internal\Http1Parser;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{
    public function testKeepAliveHeadResponseParse(): void
    {
        $request = "HTTP/1.1 200 OK\r\n\r\n";
        $parser = new Http1Parser(new Request('/', 'HEAD'));
        $response = $parser->parse($request);

        $this->assertEquals(200, $response->getStatus());
    }
}
