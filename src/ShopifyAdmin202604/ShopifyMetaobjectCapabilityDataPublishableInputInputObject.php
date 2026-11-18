<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for publishable capability to adjust visibility on channels.
 */
class ShopifyMetaobjectCapabilityDataPublishableInputInputObject extends InputObject
{
    const REQUIRED = ["status"];

    protected $status;

    /**
     * The visibility status of this metaobject across all channels.
     */
    public function setStatus($shopifyMetaobjectStatus): static
    {
        $this->status = new RawObject($shopifyMetaobjectStatus);

        return $this;
    }
}
