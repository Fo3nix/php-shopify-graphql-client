<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootProductByIdentifierArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(ShopifyProductIdentifierInputInputObject $shopifyProductIdentifierInputInputObject)
    {
        $this->identifier = $shopifyProductIdentifierInputInputObject;

        return $this;
    }
}
