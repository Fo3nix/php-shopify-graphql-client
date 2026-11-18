<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDeliveryPromiseParticipantsUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["brandedPromiseHandle"];

    protected $brandedPromiseHandle;
    protected $ownersToAdd;
    protected $ownersToRemove;

    /**
     * The branded promise handle to update the delivery promise participants for.
     */
    public function setBrandedPromiseHandle($brandedPromiseHandle): static
    {
        $this->brandedPromiseHandle = $brandedPromiseHandle;

        return $this;
    }

    /**
     * The owners to add to the delivery promise participants.
     */
    public function setOwnersToAdd(array $ownersToAdd): static
    {
        $this->ownersToAdd = $ownersToAdd;

        return $this;
    }

    /**
     * The owners to remove from the delivery promise participants.
     */
    public function setOwnersToRemove(array $ownersToRemove): static
    {
        $this->ownersToRemove = $ownersToRemove;

        return $this;
    }
}
