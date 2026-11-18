<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCombinedListingUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["parentProductId"];

    protected $parentProductId;
    protected $title;
    protected $productsAdded;
    protected $productsEdited;
    protected $productsRemovedIds;
    protected $optionsAndValues;

    /**
     * The ID of the parent product.
     */
    public function setParentProductId($parentProductId): static
    {
        $this->parentProductId = $parentProductId;

        return $this;
    }

    /**
     * The updated title for the combined listing.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The child products to add and their assigned options and option values.
     */
    public function setProductsAdded(array $productsAdded): static
    {
        $this->productsAdded = $productsAdded;

        return $this;
    }

    /**
     * The child products to edit and their assigned options and option values.
     */
    public function setProductsEdited(array $productsEdited): static
    {
        $this->productsEdited = $productsEdited;

        return $this;
    }

    /**
     * The IDs of products to be removed from the combined listing.
     */
    public function setProductsRemovedIds(array $productsRemovedIds): static
    {
        $this->productsRemovedIds = $productsRemovedIds;

        return $this;
    }

    /**
     * The ordered options and values to be used by the combined listing. Options and values will be reordered to match the order specified here.
     */
    public function setOptionsAndValues(array $optionsAndValues): static
    {
        $this->optionsAndValues = $optionsAndValues;

        return $this;
    }
}
