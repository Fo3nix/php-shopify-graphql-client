<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating exclusion rules for a collection source.
 */
class ShopifyCollectionUpdateSourceExclusionInputInputObject extends InputObject
{
    protected $matchType;
    protected $conditionsToCreate;
    protected $conditionsToDelete;
    protected $conditionsToUpdate;
    protected $selectionsToAdd;
    protected $selectionsToRemove;

    /**
     * Whether products must match all or any of the conditions to be excluded.
     */
    public function setMatchType($shopifyCollectionConditionMatchType): static
    {
        $this->matchType = new RawObject($shopifyCollectionConditionMatchType);

        return $this;
    }

    /**
     * The exclusion conditions to create for the source.
     */
    public function setConditionsToCreate(array $conditionsToCreate): static
    {
        $this->conditionsToCreate = $conditionsToCreate;

        return $this;
    }

    /**
     * The IDs of the exclusion conditions to delete from the source.
     */
    public function setConditionsToDelete(array $conditionsToDelete): static
    {
        $this->conditionsToDelete = $conditionsToDelete;

        return $this;
    }

    /**
     * The exclusion conditions to update for the source.
     */
    public function setConditionsToUpdate(array $conditionsToUpdate): static
    {
        $this->conditionsToUpdate = $conditionsToUpdate;

        return $this;
    }

    /**
     * The product selections to add to the source.
     */
    public function setSelectionsToAdd(array $selectionsToAdd): static
    {
        $this->selectionsToAdd = $selectionsToAdd;

        return $this;
    }

    /**
     * The product selections to remove from the source.
     */
    public function setSelectionsToRemove(array $selectionsToRemove): static
    {
        $this->selectionsToRemove = $selectionsToRemove;

        return $this;
    }
}
