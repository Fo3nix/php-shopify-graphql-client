<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The country code and whether the country is a part of the 'Rest Of World' shipping zone.
 */
class ShopifyDeliveryCountryCodeOrRestOfWorldQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCountryCodeOrRestOfWorld";

    /**
     * The country code in the ISO 3166-1 alpha-2 format.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

        return $this;
    }

    /**
     * Whether the country is a part of the 'Rest of World' shipping zone.
     */
    public function selectRestOfWorld(): static
    {
        $this->selectField("restOfWorld");

        return $this;
    }
}
