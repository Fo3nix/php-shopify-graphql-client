<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

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
