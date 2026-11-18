<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Tax settings for a customer.
 */
class ShopifyTaxSettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxSettings";

    /**
     * The customer's tax ID.
     */
    public function selectTaxId(): static
    {
        $this->selectField("taxId");

        return $this;
    }
}
