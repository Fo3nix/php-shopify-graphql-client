<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A country or region code.
 */
class ShopifyConsentPolicyRegionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ConsentPolicyRegion";

    /**
     * The `ISO 3166` country code for which the policy applies.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

        return $this;
    }

    /**
     * The `ISO 3166` region code for which the policy applies.
     */
    public function selectRegionCode(): static
    {
        $this->selectField("regionCode");

        return $this;
    }
}
