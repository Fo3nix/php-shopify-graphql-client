<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMarketsResolvedValuesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["buyerSignal"];

    protected $buyerSignal;

    /**
     * The buyer signal.
     */
    public function setBuyerSignal(ShopifyBuyerSignalInputInputObject $shopifyBuyerSignalInputInputObject): static
    {
        $this->buyerSignal = $shopifyBuyerSignalInputInputObject;

        return $this;
    }
}
