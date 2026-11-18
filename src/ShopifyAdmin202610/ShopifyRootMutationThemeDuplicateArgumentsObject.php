<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationThemeDuplicateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $name;

    /**
     * ID of the theme to be duplicated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Name of the new theme.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }
}
