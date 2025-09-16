<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class SellingPlanGroupProductVariantsCountArgumentsObject extends ArgumentsObject
{
    protected $productId;

    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }
}
