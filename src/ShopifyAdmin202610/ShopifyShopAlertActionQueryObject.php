<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An action associated to a shop alert, such as adding a credit card.
 */
class ShopifyShopAlertActionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopAlertAction";

    /**
     * The text for the button in the alert. For example, _Add credit card_.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The target URL that the button links to.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
