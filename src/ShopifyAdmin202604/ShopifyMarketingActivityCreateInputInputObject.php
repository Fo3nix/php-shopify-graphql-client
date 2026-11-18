<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create a marketing activity. Marketing activity app extensions are deprecated and will be removed in the near future.
 */
class ShopifyMarketingActivityCreateInputInputObject extends InputObject
{
    const REQUIRED = ["marketingActivityExtensionId", "status"];

    protected $marketingActivityExtensionId;
    protected $status;

    /**
     * The ID of the marketing activity extension.
     */
    public function setMarketingActivityExtensionId($marketingActivityExtensionId): static
    {
        $this->marketingActivityExtensionId = $marketingActivityExtensionId;

        return $this;
    }

    /**
     * The current state of the marketing activity.
     */
    public function setStatus($shopifyMarketingActivityStatus): static
    {
        $this->status = new RawObject($shopifyMarketingActivityStatus);

        return $this;
    }
}
