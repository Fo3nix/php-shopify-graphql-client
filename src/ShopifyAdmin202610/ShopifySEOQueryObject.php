<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * SEO information.
 */
class ShopifySEOQueryObject extends QueryObject
{
    const OBJECT_NAME = "SEO";

    /**
     * SEO Description.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * SEO Title.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
