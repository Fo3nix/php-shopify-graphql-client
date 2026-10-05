<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionSubCollectionEligibilityStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSubCollectionEligibilityState";

    public function selectEligible()
    {
        $this->selectField("eligible");

        return $this;
    }

    public function selectIneligibleReason()
    {
        $this->selectField("ineligibleReason");

        return $this;
    }
}
