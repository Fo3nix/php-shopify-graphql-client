<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryShipmentSetTrackingArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "tracking"];

    protected $id;
    protected $tracking;

    /**
     * The ID of the inventory shipment whose tracking info is being edited.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The tracking info to edit on the inventory shipment.
     */
    public function setTracking(ShopifyInventoryShipmentTrackingInputInputObject $shopifyInventoryShipmentTrackingInputInputObject): static
    {
        $this->tracking = $shopifyInventoryShipmentTrackingInputInputObject;

        return $this;
    }
}
