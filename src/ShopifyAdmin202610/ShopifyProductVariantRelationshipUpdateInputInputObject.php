<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a composite product variant.
 */
class ShopifyProductVariantRelationshipUpdateInputInputObject extends InputObject
{
    protected $parentProductVariantId;
    protected $parentProductId;
    protected $productVariantRelationshipsToCreate;
    protected $productVariantRelationshipsToUpdate;
    protected $productVariantRelationshipsToRemove;
    protected $removeAllProductVariantRelationships;
    protected $priceInput;

    /**
     * The product variant ID representing that which contains the relationships with other variants.
     */
    public function setParentProductVariantId($parentProductVariantId): static
    {
        $this->parentProductVariantId = $parentProductVariantId;

        return $this;
    }

    /**
     * A product ID which contains product variants that have relationships with other variants.
     */
    public function setParentProductId($parentProductId): static
    {
        $this->parentProductId = $parentProductId;

        return $this;
    }

    /**
     * The product variants and associated quantities to add to the product variant.
     */
    public function setProductVariantRelationshipsToCreate(array $productVariantRelationshipsToCreate): static
    {
        $this->productVariantRelationshipsToCreate = $productVariantRelationshipsToCreate;

        return $this;
    }

    /**
     * The product variants and associated quantities to update in specified product variant.
     */
    public function setProductVariantRelationshipsToUpdate(array $productVariantRelationshipsToUpdate): static
    {
        $this->productVariantRelationshipsToUpdate = $productVariantRelationshipsToUpdate;

        return $this;
    }

    /**
     * The bundle component product variants to be removed from the product variant.
     */
    public function setProductVariantRelationshipsToRemove(array $productVariantRelationshipsToRemove): static
    {
        $this->productVariantRelationshipsToRemove = $productVariantRelationshipsToRemove;

        return $this;
    }

    /**
     * Whether to remove all components from the product variant. The default value is `false`.
     */
    public function setRemoveAllProductVariantRelationships($removeAllProductVariantRelationships): static
    {
        $this->removeAllProductVariantRelationships = $removeAllProductVariantRelationships;

        return $this;
    }

    /**
     * Method in which to update the price of the parent product variant.
     */
    public function setPriceInput(ShopifyPriceInputInputObject $shopifyPriceInputInputObject): static
    {
        $this->priceInput = $shopifyPriceInputInputObject;

        return $this;
    }
}
