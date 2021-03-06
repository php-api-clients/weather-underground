<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\WeatherUnderground\Resource\Sync;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use ApiClients\Client\WeatherUnderground\ApiSettings;
use ApiClients\Client\WeatherUnderground\Resource\Time;

class TimeTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return Time::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
