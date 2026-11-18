<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A locale.
 */
class ShopifyLocaleQueryObject extends QueryObject
{
    const OBJECT_NAME = "Locale";

    /**
     * Locale ISO code.
     */
    public function selectIsoCode(): static
    {
        $this->selectField("isoCode");

        return $this;
    }

    /**
     * Human-readable locale name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
