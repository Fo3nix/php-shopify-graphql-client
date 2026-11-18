<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderEditUpdateShippingLineArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "shippingLine", "shippingLineId"];

    protected $id;
    protected $shippingLine;
    protected $shippingLineId;

    /**
     * The ID of the [calculated order](https://shopify.dev/api/admin-graphql/latest/objects/calculatedorder)
     * or the order edit session to edit. This is the edit used to update the shipping line.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The updated shipping line.
     */
    public function setShippingLine(ShopifyOrderEditUpdateShippingLineInputInputObject $shopifyOrderEditUpdateShippingLineInputInputObject): static
    {
        $this->shippingLine = $shopifyOrderEditUpdateShippingLineInputInputObject;

        return $this;
    }

    /**
     * The ID of the calculated shipping line to update.
     */
    public function setShippingLineId($shippingLineId): static
    {
        $this->shippingLineId = $shippingLineId;

        return $this;
    }
}
