<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationThemeDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the theme to be deleted.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
