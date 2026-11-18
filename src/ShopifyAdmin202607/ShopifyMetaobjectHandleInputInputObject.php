<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for retrieving a metaobject by handle.
 */
class ShopifyMetaobjectHandleInputInputObject extends InputObject
{
    const REQUIRED = ["type", "handle"];

    protected $type;
    protected $handle;

    /**
     * The type of the metaobject. Must match an existing metaobject definition type.
     */
    public function setType($type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * The handle of the metaobject to create or update.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }
}
