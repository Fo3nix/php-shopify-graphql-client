<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class SuggestedOutcomeReturnLineItemInputInputObject extends InputObject
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
