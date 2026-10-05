<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootDraftOrderAvailableDeliveryOptionsArgumentsObject extends ArgumentsObject
{
    protected $input;
    protected $search;
    protected $localPickupFrom;
    protected $localPickupCount;
    protected $sessionToken;

    public function setInput(ShopifyDraftOrderAvailableDeliveryOptionsInputInputObject $shopifyDraftOrderAvailableDeliveryOptionsInputInputObject)
    {
        $this->input = $shopifyDraftOrderAvailableDeliveryOptionsInputInputObject;

        return $this;
    }

    public function setSearch($search)
    {
        $this->search = $search;

        return $this;
    }

    public function setLocalPickupFrom($localPickupFrom)
    {
        $this->localPickupFrom = $localPickupFrom;

        return $this;
    }

    public function setLocalPickupCount($localPickupCount)
    {
        $this->localPickupCount = $localPickupCount;

        return $this;
    }

    public function setSessionToken($sessionToken)
    {
        $this->sessionToken = $sessionToken;

        return $this;
    }
}
