<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootPublicationsCountArgumentsObject extends ArgumentsObject
{
    protected $catalogType;
    protected $limit;

    public function setCatalogType($catalogType)
    {
        $this->catalogType = new RawObject($catalogType);

        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}
