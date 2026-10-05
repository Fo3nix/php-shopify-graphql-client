<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyAnalyticsTargetPresentmentExpectedValueArgumentsObject extends ArgumentsObject
{
    protected $currencyCode;

    public function setCurrencyCode($shopifyCurrencyCode)
    {
        $this->currencyCode = new RawObject($shopifyCurrencyCode);

        return $this;
    }
}
