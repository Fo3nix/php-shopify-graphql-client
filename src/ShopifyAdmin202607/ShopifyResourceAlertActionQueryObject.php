<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An action associated to a resource alert, such as editing variants.
 */
class ShopifyResourceAlertActionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourceAlertAction";

    /**
     * Whether the action appears as a button or as a link.
     */
    public function selectPrimary(): static
    {
        $this->selectField("primary");

        return $this;
    }

    /**
     * Resource for the action to show.
     */
    public function selectShow(): static
    {
        $this->selectField("show");

        return $this;
    }

    /**
     * The text for the button in the alert. For example, _Edit variants_.
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
