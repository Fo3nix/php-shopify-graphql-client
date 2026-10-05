<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyShippingConfigurationOptionDefinitionsCountArgumentsObject extends ArgumentsObject
{
    protected $active;

    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
}
