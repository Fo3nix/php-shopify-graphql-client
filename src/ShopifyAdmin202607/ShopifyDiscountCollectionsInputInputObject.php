<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for collections attached to a discount.
 */
class ShopifyDiscountCollectionsInputInputObject extends InputObject
{
    protected $add;
    protected $remove;

    /**
     * Specifies list of collection ids to add.
     */
    public function setAdd(array $add): static
    {
        $this->add = $add;

        return $this;
    }

    /**
     * Specifies list of collection ids to remove.
     */
    public function setRemove(array $remove): static
    {
        $this->remove = $remove;

        return $this;
    }
}
