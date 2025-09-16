<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class MetafieldDefinitionIdentifierInputInputObject extends InputObject
{
    protected $ownerType;
    protected $namespace;
    protected $key;

    public function setOwnerType($ownerType)
    {
        $this->ownerType = $ownerType;

        return $this;
    }

    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }
}
