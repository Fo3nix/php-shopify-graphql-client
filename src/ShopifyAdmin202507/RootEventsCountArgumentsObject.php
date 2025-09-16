<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootEventsCountArgumentsObject extends ArgumentsObject
{
    protected $query;

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }
}
