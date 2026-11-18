<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to create an inventory transfer.
 */
class ShopifyInventoryTransferCreateInputInputObject extends InputObject
{
    protected $originLocationId;
    protected $destinationLocationId;
    protected $lineItems;
    protected $dateCreated;
    protected $note;
    protected $tags;
    protected $referenceName;
    protected $metafields;

    /**
     * The origin location for the inventory transfer.
     */
    public function setOriginLocationId($originLocationId): static
    {
        $this->originLocationId = $originLocationId;

        return $this;
    }

    /**
     * The destination location for the inventory transfer.
     */
    public function setDestinationLocationId($destinationLocationId): static
    {
        $this->destinationLocationId = $destinationLocationId;

        return $this;
    }

    /**
     * The list of line items for the inventory transfer.
     */
    public function setLineItems(array $lineItems): static
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * The date and time the inventory transfer was created. If left blank, defaults to the current date and time in UTC format.
     */
    public function setDateCreated($dateCreated): static
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * A note to add to the Inventory Transfer.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * The tags to add to the inventory transfer.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * The reference name to add to the inventory transfer.
     */
    public function setReferenceName($referenceName): static
    {
        $this->referenceName = $referenceName;

        return $this;
    }

    /**
     * The metafields to attach to the inventory transfer.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }
}
