<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderEditRemoveShippingLineArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "shippingLineId"];

    protected $id;
    protected $shippingLineId;

    /**
     * The ID of the [calculated order](https://shopify.dev/api/admin-graphql/latest/objects/calculatedorder)
     * or the order edit session to edit. This is the edit from which the shipping line is removed.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the calculated shipping line to remove.
     */
    public function setShippingLineId($shippingLineId): static
    {
        $this->shippingLineId = $shippingLineId;

        return $this;
    }
}
