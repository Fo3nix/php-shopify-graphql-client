<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMetaobjectDefinitionByTypeArgumentsObject extends ArgumentsObject
{
    protected $type;

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
