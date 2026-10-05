<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCompaniesCountArgumentsObject extends ArgumentsObject
{
    protected $limit;

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}
