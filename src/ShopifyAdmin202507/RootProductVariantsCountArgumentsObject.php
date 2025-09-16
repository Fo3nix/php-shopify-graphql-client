<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootProductVariantsCountArgumentsObject extends ArgumentsObject
{
    protected $query;
    protected $limit;

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
