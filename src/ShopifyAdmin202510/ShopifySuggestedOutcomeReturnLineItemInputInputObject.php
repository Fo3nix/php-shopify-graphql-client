<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\InputObject;

class ShopifySuggestedOutcomeReturnLineItemInputInputObject extends InputObject
{
    protected $id;
    protected $quantity;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}
