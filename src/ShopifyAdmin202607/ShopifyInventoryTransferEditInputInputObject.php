<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to edit an inventory transfer.
 */
class ShopifyInventoryTransferEditInputInputObject extends InputObject
{
    protected $originId;
    protected $destinationId;
    protected $dateCreated;
    protected $note;
    protected $tags;
    protected $referenceName;
    protected $metafields;

    /**
     * The origin location for the inventory transfer. The origin location can only be changed
     * for draft transfers.
     */
    public function setOriginId($originId): static
    {
        $this->originId = $originId;

        return $this;
    }

    /**
     * The destination location for the inventory transfer. The destination location can only be
     * changed for draft transfers.
     */
    public function setDestinationId($destinationId): static
    {
        $this->destinationId = $destinationId;

        return $this;
    }

    /**
     * The date the inventory transfer was created.
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
