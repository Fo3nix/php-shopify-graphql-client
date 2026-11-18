<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPaymentCustomizationDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The global ID of the payment customization.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
