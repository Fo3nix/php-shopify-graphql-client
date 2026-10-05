<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingBuyerJourneyQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingBuyerJourney";

    public function selectVisibility()
    {
        $this->selectField("visibility");

        return $this;
    }
}
