<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootLocationByIdentifierArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(LocationIdentifierInputInputObject $locationIdentifierInputInputObject)
    {
        $this->identifier = $locationIdentifierInputInputObject;

        return $this;
    }
}
