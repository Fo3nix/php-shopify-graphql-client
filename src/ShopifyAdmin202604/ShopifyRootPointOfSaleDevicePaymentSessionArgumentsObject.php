<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootPointOfSaleDevicePaymentSessionArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the point of sale device payment session.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
