<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootDraftOrderAvailableDeliveryOptionsArgumentsObject extends ArgumentsObject
{
    protected $input;
    protected $search;
    protected $localPickupFrom;
    protected $localPickupCount;
    protected $sessionToken;

    public function setInput(DraftOrderAvailableDeliveryOptionsInputInputObject $draftOrderAvailableDeliveryOptionsInputInputObject)
    {
        $this->input = $draftOrderAvailableDeliveryOptionsInputInputObject;

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
