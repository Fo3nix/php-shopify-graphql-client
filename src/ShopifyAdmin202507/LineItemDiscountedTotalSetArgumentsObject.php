<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class LineItemDiscountedTotalSetArgumentsObject extends ArgumentsObject
{
    protected $withCodeDiscounts;

    public function setWithCodeDiscounts($withCodeDiscounts)
    {
        $this->withCodeDiscounts = $withCodeDiscounts;

        return $this;
    }
}
