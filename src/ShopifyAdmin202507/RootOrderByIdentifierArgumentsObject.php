<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootOrderByIdentifierArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(OrderIdentifierInputInputObject $orderIdentifierInputInputObject)
    {
        $this->identifier = $orderIdentifierInputInputObject;

        return $this;
    }
}
