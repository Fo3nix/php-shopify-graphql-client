<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class OrderFulfillmentsArgumentsObject extends ArgumentsObject
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
