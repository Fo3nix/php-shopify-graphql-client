<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for the context data that determines the pricing of a variant. Refer to [Product](https://shopify.dev/docs/api/admin-graphql/latest/queries/product?example=Get+the+price+range+for+a+product+for+buyers+from+Canada)for more information on how to use this input object.
 */
class ShopifyContextualPricingContextInputObject extends InputObject
{
    protected $country;
    protected $companyLocationId;
    protected $locationId;

    /**
     * The country code used to fetch country-specific prices.
     */
    public function setCountry($shopifyCountryCode): static
    {
        $this->country = new RawObject($shopifyCountryCode);

        return $this;
    }

    /**
     * The CompanyLocation ID used to fetch company location specific prices.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }

    /**
     * The Location ID used to fetch location specific prices.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }
}
