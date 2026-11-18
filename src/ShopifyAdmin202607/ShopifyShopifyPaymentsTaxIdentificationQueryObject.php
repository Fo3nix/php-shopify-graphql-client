<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A typed identifier that represents an individual within a tax jurisdiction.
 */
class ShopifyShopifyPaymentsTaxIdentificationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsTaxIdentification";

    /**
     * The type of the identification.
     */
    public function selectTaxIdentificationType(): static
    {
        $this->selectField("taxIdentificationType");

        return $this;
    }

    /**
     * The value of the identification.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
