<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootCustomerByIdentifierArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(CustomerIdentifierInputInputObject $customerIdentifierInputInputObject)
    {
        $this->identifier = $customerIdentifierInputInputObject;

        return $this;
    }
}
