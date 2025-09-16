<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootMetaobjectDefinitionByTypeArgumentsObject extends ArgumentsObject
{
    protected $type;

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
