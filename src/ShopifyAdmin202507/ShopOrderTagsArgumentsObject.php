<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopOrderTagsArgumentsObject extends ArgumentsObject
{
    protected $first;
    protected $sort;

    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    public function setSort($shopTagSort)
    {
        $this->sort = new RawObject($shopTagSort);

        return $this;
    }
}
