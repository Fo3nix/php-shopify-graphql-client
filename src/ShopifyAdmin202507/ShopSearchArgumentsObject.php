<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopSearchArgumentsObject extends ArgumentsObject
{
    protected $query;
    protected $types;
    protected $first;
    protected $after;

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    public function setTypes(array $types)
    {
        $this->types = $types;

        return $this;
    }

    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    public function setAfter($after)
    {
        $this->after = $after;

        return $this;
    }
}
