<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootMetafieldDefinitionArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(MetafieldDefinitionIdentifierInputInputObject $metafieldDefinitionIdentifierInputInputObject)
    {
        $this->identifier = $metafieldDefinitionIdentifierInputInputObject;

        return $this;
    }
}
