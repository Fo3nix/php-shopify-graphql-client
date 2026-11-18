<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields that define the strategies for updating inventory and
 * whether to send shipping and order confirmations to customers.
 */
class ShopifyOrderCreateOptionsInputInputObject extends InputObject
{
    protected $inventoryBehaviour;
    protected $sendReceipt;
    protected $sendFulfillmentReceipt;

    /**
     * The strategy for handling updates to inventory: not claiming inventory, ignoring inventory policies,
     * or following policies when claiming inventory.
     */
    public function setInventoryBehaviour($shopifyOrderCreateInputsInventoryBehavior): static
    {
        $this->inventoryBehaviour = new RawObject($shopifyOrderCreateInputsInventoryBehavior);

        return $this;
    }

    /**
     * Whether to send an order confirmation to the customer.
     */
    public function setSendReceipt($sendReceipt): static
    {
        $this->sendReceipt = $sendReceipt;

        return $this;
    }

    /**
     * Whether to send a shipping confirmation to the customer.
     */
    public function setSendFulfillmentReceipt($sendFulfillmentReceipt): static
    {
        $this->sendFulfillmentReceipt = $sendFulfillmentReceipt;

        return $this;
    }
}
