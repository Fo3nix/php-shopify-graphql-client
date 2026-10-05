<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyLineItemDiscountedTotalSetArgumentsObject extends ArgumentsObject
{
    protected $withCodeDiscounts;

    public function setWithCodeDiscounts($withCodeDiscounts)
    {
        $this->withCodeDiscounts = $withCodeDiscounts;

        return $this;
    }
}
