<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifySellingPlanGroupProductVariantsCountArgumentsObject extends ArgumentsObject
{
    protected $productId;

    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }
}
