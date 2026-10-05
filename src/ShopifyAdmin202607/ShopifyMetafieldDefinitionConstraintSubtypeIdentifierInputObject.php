<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

class ShopifyMetafieldDefinitionConstraintSubtypeIdentifierInputObject extends InputObject
{
    protected $key;
    protected $value;

    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
