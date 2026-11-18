<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for the theme file body.
 */
class ShopifyOnlineStoreThemeFileBodyInputInputObject extends InputObject
{
    const REQUIRED = ["type", "value"];

    protected $type;
    protected $value;

    /**
     * The input type of the theme file body.
     */
    public function setType($shopifyOnlineStoreThemeFileBodyInputType): static
    {
        $this->type = new RawObject($shopifyOnlineStoreThemeFileBodyInputType);

        return $this;
    }

    /**
     * The body of the theme file.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
