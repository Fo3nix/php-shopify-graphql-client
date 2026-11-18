<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootDraftOrderAvailableDeliveryOptionsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;
    protected $search;
    protected $localPickupFrom;
    protected $localPickupCount;
    protected $sessionToken;

    /**
     * The fields for the draft order.
     */
    public function setInput(ShopifyDraftOrderAvailableDeliveryOptionsInputInputObject $shopifyDraftOrderAvailableDeliveryOptionsInputInputObject): static
    {
        $this->input = $shopifyDraftOrderAvailableDeliveryOptionsInputInputObject;

        return $this;
    }

    /**
     * The search term for the delivery options.
     */
    public function setSearch($search): static
    {
        $this->search = $search;

        return $this;
    }

    /**
     * The offset for the local pickup options.
     */
    public function setLocalPickupFrom($localPickupFrom): static
    {
        $this->localPickupFrom = $localPickupFrom;

        return $this;
    }

    /**
     * The number of local pickup options required.
     */
    public function setLocalPickupCount($localPickupCount): static
    {
        $this->localPickupCount = $localPickupCount;

        return $this;
    }

    /**
     * Unique token used to trace execution and help optimize the calculation.
     */
    public function setSessionToken($sessionToken): static
    {
        $this->sessionToken = $sessionToken;

        return $this;
    }
}
