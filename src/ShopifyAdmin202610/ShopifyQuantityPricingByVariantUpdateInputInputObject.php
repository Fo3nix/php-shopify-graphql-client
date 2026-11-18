<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update quantity pricing.
 */
class ShopifyQuantityPricingByVariantUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["quantityPriceBreaksToAdd", "quantityPriceBreaksToDelete", "quantityRulesToAdd", "quantityRulesToDeleteByVariantId", "pricesToAdd", "pricesToDeleteByVariantId"];

    protected $quantityPriceBreaksToAdd;
    protected $quantityPriceBreaksToDelete;
    protected $quantityPriceBreaksToDeleteByVariantId;
    protected $quantityRulesToAdd;
    protected $quantityRulesToDeleteByVariantId;
    protected $pricesToAdd;
    protected $pricesToDeleteByVariantId;

    /**
     * A list of quantity price breaks to add.
     */
    public function setQuantityPriceBreaksToAdd(array $quantityPriceBreaksToAdd): static
    {
        $this->quantityPriceBreaksToAdd = $quantityPriceBreaksToAdd;

        return $this;
    }

    /**
     * A list of quantity price break IDs that identify which quantity breaks to remove.
     */
    public function setQuantityPriceBreaksToDelete(array $quantityPriceBreaksToDelete): static
    {
        $this->quantityPriceBreaksToDelete = $quantityPriceBreaksToDelete;

        return $this;
    }

    /**
     * A list of product variant IDs that identify which quantity breaks to remove.
     */
    public function setQuantityPriceBreaksToDeleteByVariantId(array $quantityPriceBreaksToDeleteByVariantId): static
    {
        $this->quantityPriceBreaksToDeleteByVariantId = $quantityPriceBreaksToDeleteByVariantId;

        return $this;
    }

    /**
     * A list of quantity rules to add.
     */
    public function setQuantityRulesToAdd(array $quantityRulesToAdd): static
    {
        $this->quantityRulesToAdd = $quantityRulesToAdd;

        return $this;
    }

    /**
     * A list of variant IDs that identify which quantity rules to remove.
     */
    public function setQuantityRulesToDeleteByVariantId(array $quantityRulesToDeleteByVariantId): static
    {
        $this->quantityRulesToDeleteByVariantId = $quantityRulesToDeleteByVariantId;

        return $this;
    }

    /**
     * A list of fixed prices to add.
     */
    public function setPricesToAdd(array $pricesToAdd): static
    {
        $this->pricesToAdd = $pricesToAdd;

        return $this;
    }

    /**
     * A list of variant IDs that identify which fixed prices to remove.
     */
    public function setPricesToDeleteByVariantId(array $pricesToDeleteByVariantId): static
    {
        $this->pricesToDeleteByVariantId = $pricesToDeleteByVariantId;

        return $this;
    }
}
