<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Tax app configuration of a merchant.
 */
class ShopifyTaxAppConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxAppConfiguration";

    /**
     * State of the tax app configuration.
     */
    public function selectState(): static
    {
        $this->selectField("state");

        return $this;
    }
}
