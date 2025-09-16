<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootMarketsResolvedValuesArgumentsObject extends ArgumentsObject
{
    protected $buyerSignal;

    public function setBuyerSignal(BuyerSignalInputInputObject $buyerSignalInputInputObject)
    {
        $this->buyerSignal = $buyerSignalInputInputObject;

        return $this;
    }
}
