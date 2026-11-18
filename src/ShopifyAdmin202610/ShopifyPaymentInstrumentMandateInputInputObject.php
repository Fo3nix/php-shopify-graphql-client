<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for specifying a specific mandate resource.
 */
class ShopifyPaymentInstrumentMandateInputInputObject extends InputObject
{
    const REQUIRED = ["resourceType", "resourceId"];

    protected $resourceType;
    protected $resourceId;

    /**
     * The type of resource.
     */
    public function setResourceType($shopifyPaymentInstrumentMandateResourceType): static
    {
        $this->resourceType = new RawObject($shopifyPaymentInstrumentMandateResourceType);

        return $this;
    }

    /**
     * The ID of the resource (subscription contract, order, or draft order).
     */
    public function setResourceId($resourceId): static
    {
        $this->resourceId = $resourceId;

        return $this;
    }
}
