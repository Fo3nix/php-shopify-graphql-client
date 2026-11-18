<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The App Bridge information for a Shopify Function.
 */
class ShopifyFunctionsAppBridgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FunctionsAppBridge";

    /**
     * The relative path for creating a customization.
     */
    public function selectCreatePath(): static
    {
        $this->selectField("createPath");

        return $this;
    }

    /**
     * The relative path for viewing a customization.
     */
    public function selectDetailsPath(): static
    {
        $this->selectField("detailsPath");

        return $this;
    }
}
