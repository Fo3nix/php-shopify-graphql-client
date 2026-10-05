<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

class ShopifyDraftOrderLineItemComponentInputInputObject extends InputObject
{
    protected $variantId;
    protected $quantity;
    protected $uuid;

    public function setVariantId($variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }
}
