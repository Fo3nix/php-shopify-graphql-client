<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class BundlesFeatureQueryObject extends QueryObject
{
    const OBJECT_NAME = "BundlesFeature";

    public function selectEligibleForBundles()
    {
        $this->selectField("eligibleForBundles");

        return $this;
    }

    public function selectIneligibilityReason()
    {
        $this->selectField("ineligibilityReason");

        return $this;
    }

    public function selectSellsBundles()
    {
        $this->selectField("sellsBundles");

        return $this;
    }
}
