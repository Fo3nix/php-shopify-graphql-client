<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMarketsResolvedValuesArgumentsObject extends ArgumentsObject
{
    protected $buyerSignal;

    public function setBuyerSignal(ShopifyBuyerSignalInputInputObject $shopifyBuyerSignalInputInputObject)
    {
        $this->buyerSignal = $shopifyBuyerSignalInputInputObject;

        return $this;
    }
}
