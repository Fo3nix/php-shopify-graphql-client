<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootCatalogsCountArgumentsObject extends ArgumentsObject
{
    protected $type;
    protected $query;
    protected $limit;

    public function setType($catalogType)
    {
        $this->type = new RawObject($catalogType);

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}
