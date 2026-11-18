<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationThemePublishArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * ID of the theme to be published.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
