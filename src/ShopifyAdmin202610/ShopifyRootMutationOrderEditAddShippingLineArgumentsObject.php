<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderEditAddShippingLineArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "shippingLine"];

    protected $id;
    protected $shippingLine;

    /**
     * The ID of the [calculated order](https://shopify.dev/api/admin-graphql/latest/objects/calculatedorder)
     * or the order edit session to edit. This is the edit to which the shipping line is added.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The shipping line to be added.
     */
    public function setShippingLine(ShopifyOrderEditAddShippingLineInputInputObject $shopifyOrderEditAddShippingLineInputInputObject): static
    {
        $this->shippingLine = $shopifyOrderEditAddShippingLineInputInputObject;

        return $this;
    }
}
