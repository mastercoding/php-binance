<?php

namespace Larislackers\BinanceApi\Enums;

/**
 * Enum constants for Binance API connection.
 *
 * @package Larislackers\BinanceApi\Enums
 */
final class ConnectionDetails extends BasicEnum
{
    const API_URL = 'https://www.binance.com/';
    const WEBSOCKET_URL = 'wss://stream.binance.com:9443/ws/';

    const WAPI_VERSION_1 = 'wapi/v1/';
    const WAPI_VERSION_3 = 'wapi/v3/';

    const API_VERSION_1 = 'api/v1/';
    const API_VERSION_3 = 'api/v3/';

}
