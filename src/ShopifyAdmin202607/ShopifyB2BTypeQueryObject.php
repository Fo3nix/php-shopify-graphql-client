<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The entitlements for B2B.
 */
class ShopifyB2BTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "B2BType";

    /**
     * Whether B2B is enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }
}
