<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A consent policy describes the level of consent that the merchant requires from the user before actually
 * collecting and processing the data.
 */
class ShopifyConsentPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "ConsentPolicy";

    /**
     * Whether consent is required for the region.
     */
    public function selectConsentRequired(): static
    {
        $this->selectField("consentRequired");

        return $this;
    }

    /**
     * The `ISO 3166` country code for which the policy applies.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

        return $this;
    }

    /**
     * Whether data sale opt-out is required for the region.
     */
    public function selectDataSaleOptOutRequired(): static
    {
        $this->selectField("dataSaleOptOutRequired");

        return $this;
    }

    /**
     * The global ID of the consent policy. IDs prefixed with `SD-` are system default policies.
     */
    public function selectId(): static
    {
        $this->selectField("id");

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

    /**
     * The global ID of the shop that owns the policy.
     */
    public function selectShopId(): static
    {
        $this->selectField("shopId");

        return $this;
    }
}
