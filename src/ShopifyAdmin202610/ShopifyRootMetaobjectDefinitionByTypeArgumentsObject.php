<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMetaobjectDefinitionByTypeArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["type"];

    protected $type;

    /**
     * The type of the metaobject definition to return.
     */
    public function setType($type): static
    {
        $this->type = $type;

        return $this;
    }
}
