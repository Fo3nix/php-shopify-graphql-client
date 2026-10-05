<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyShopOrderTagsArgumentsObject extends ArgumentsObject
{
    protected $first;
    protected $sort;

    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    public function setSort($shopifyShopTagSort)
    {
        $this->sort = new RawObject($shopifyShopTagSort);

        return $this;
    }
}
