<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationStandardMetaobjectDefinitionEnableArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["type"];

    protected $type;

    /**
     * The type of the metaobject definition to enable.
     */
    public function setType($type): static
    {
        $this->type = $type;

        return $this;
    }
}
