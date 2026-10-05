<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCustomerByIdentifierArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(ShopifyCustomerIdentifierInputInputObject $shopifyCustomerIdentifierInputInputObject)
    {
        $this->identifier = $shopifyCustomerIdentifierInputInputObject;

        return $this;
    }
}
