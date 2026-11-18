<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A preview of a URL redirect import row.
 */
class ShopifyUrlRedirectImportPreviewQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectImportPreview";

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
