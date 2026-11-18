<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The URL redirect for the online store.
 */
class ShopifyUrlRedirectQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirect";

    /**
     * The date and time when the URL redirect was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The ID of the URL redirect.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The old path to be redirected from. When the user visits this path, they will be redirected to the target location.
     */
    public function selectPath(): static
    {
        $this->selectField("path");

        return $this;
    }

    /**
     * The target location where the user will be redirected to.
     */
    public function selectTarget(): static
    {
        $this->selectField("target");

        return $this;
    }
}
