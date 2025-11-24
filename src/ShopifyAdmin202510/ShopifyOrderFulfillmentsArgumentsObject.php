<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyOrderFulfillmentsArgumentsObject extends ArgumentsObject
{
    protected $first;
    protected $query;

    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }
}
