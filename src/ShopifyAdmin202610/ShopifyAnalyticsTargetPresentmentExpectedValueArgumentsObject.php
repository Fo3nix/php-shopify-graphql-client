<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyAnalyticsTargetPresentmentExpectedValueArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["currencyCode"];

    protected $currencyCode;

    /**
     * The currency code to convert the expected value into.
     */
    public function setCurrencyCode($shopifyCurrencyCode): static
    {
        $this->currencyCode = new RawObject($shopifyCurrencyCode);

        return $this;
    }
}
