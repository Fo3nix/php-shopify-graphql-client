<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingBuyerJourneyQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingBuyerJourney";

    public function selectVisibility()
    {
        $this->selectField("visibility");

        return $this;
    }
}
