<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a scheduled change of an inventory item.
 */
class ShopifyInventoryScheduledChangeInputInputObject extends InputObject
{
    const REQUIRED = ["expectedAt", "fromName", "toName"];

    protected $expectedAt;
    protected $fromName;
    protected $toName;

    /**
     * The date and time that the scheduled change is expected to happen.
     */
    public function setExpectedAt($expectedAt): static
    {
        $this->expectedAt = $expectedAt;

        return $this;
    }

    /**
     * The quantity
     * [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps/quantities-states#move-inventory-quantities-between-states)
     * to transition from.
     */
    public function setFromName($fromName): static
    {
        $this->fromName = $fromName;

        return $this;
    }

    /**
     * The quantity
     * [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps/quantities-states#move-inventory-quantities-between-states)
     * to transition to.
     */
    public function setToName($toName): static
    {
        $this->toName = $toName;

        return $this;
    }
}
