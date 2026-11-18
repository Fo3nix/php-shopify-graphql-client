<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for Theme attributes to update.
 */
class ShopifyOnlineStoreThemeInputInputObject extends InputObject
{
    protected $name;

    /**
     * The new name of the theme.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }
}
