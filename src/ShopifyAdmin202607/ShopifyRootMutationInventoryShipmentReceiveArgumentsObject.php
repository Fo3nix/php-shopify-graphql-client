<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationInventoryShipmentReceiveArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $lineItems;
    protected $dateReceived;
    protected $bulkReceiveAction;

    /**
     * The ID of the inventory shipment to receive.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The list of receive line items for the inventory shipment.
     */
    public function setLineItems(array $lineItems): static
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * The date the inventory shipment was initially received.
     */
    public function setDateReceived($dateReceived): static
    {
        $this->dateReceived = $dateReceived;

        return $this;
    }

    /**
     * The bulk receive action for the inventory shipment.
     */
    public function setBulkReceiveAction($shopifyInventoryShipmentReceiveLineItemReason): static
    {
        $this->bulkReceiveAction = new RawObject($shopifyInventoryShipmentReceiveLineItemReason);

        return $this;
    }
}
