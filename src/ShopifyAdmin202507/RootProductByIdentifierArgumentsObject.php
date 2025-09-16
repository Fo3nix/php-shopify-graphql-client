<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootProductByIdentifierArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(ProductIdentifierInputInputObject $productIdentifierInputInputObject)
    {
        $this->identifier = $productIdentifierInputInputObject;

        return $this;
    }
}
