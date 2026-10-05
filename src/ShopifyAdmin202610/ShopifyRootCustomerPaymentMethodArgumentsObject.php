<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCustomerPaymentMethodArgumentsObject extends ArgumentsObject
{
    protected $id;
    protected $showRevoked;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setShowRevoked($showRevoked)
    {
        $this->showRevoked = $showRevoked;

        return $this;
    }
}
