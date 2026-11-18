<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a delivery profile.
 */
class ShopifyDeliveryProfileInputInputObject extends InputObject
{
    protected $name;
    protected $profileLocationGroups;
    protected $locationGroupsToCreate;
    protected $locationGroupsToUpdate;
    protected $locationGroupsToDelete;
    protected $variantsToAssociate;
    protected $variantsToDissociate;
    protected $zonesToDelete;
    protected $methodDefinitionsToDelete;
    protected $conditionsToDelete;
    protected $sellingPlanGroupsToAssociate;
    protected $sellingPlanGroupsToDissociate;
    protected $coversAllItems;

    /**
     * The name of the delivery profile.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The list of location groups associated with the delivery profile.
     */
    public function setProfileLocationGroups(array $profileLocationGroups): static
    {
        $this->profileLocationGroups = $profileLocationGroups;

        return $this;
    }

    /**
     * The list of location groups to be created in the delivery profile.
     *
     * **Note:** due to the potential complexity of the nested data, it is recommended to send no more than 5 location groups per each request.
     */
    public function setLocationGroupsToCreate(array $locationGroupsToCreate): static
    {
        $this->locationGroupsToCreate = $locationGroupsToCreate;

        return $this;
    }

    /**
     * The list of location groups to be updated in the delivery profile.
     *
     * **Note:** due to the potential complexity of the nested data, it is recommended to send no more than 5 location groups per each request.
     */
    public function setLocationGroupsToUpdate(array $locationGroupsToUpdate): static
    {
        $this->locationGroupsToUpdate = $locationGroupsToUpdate;

        return $this;
    }

    /**
     * The list of location groups to be deleted from the delivery profile.
     */
    public function setLocationGroupsToDelete(array $locationGroupsToDelete): static
    {
        $this->locationGroupsToDelete = $locationGroupsToDelete;

        return $this;
    }

    /**
     * The list of product variant IDs to be associated with the delivery profile.
     */
    public function setVariantsToAssociate(array $variantsToAssociate): static
    {
        $this->variantsToAssociate = $variantsToAssociate;

        return $this;
    }

    /**
     * The list of product variant IDs to be dissociated from the delivery profile.
     * The dissociated product variants are moved back to the default delivery profile.
     */
    public function setVariantsToDissociate(array $variantsToDissociate): static
    {
        $this->variantsToDissociate = $variantsToDissociate;

        return $this;
    }

    /**
     * The list of zone IDs to delete.
     */
    public function setZonesToDelete(array $zonesToDelete): static
    {
        $this->zonesToDelete = $zonesToDelete;

        return $this;
    }

    /**
     * The list of method definition IDs to delete.
     */
    public function setMethodDefinitionsToDelete(array $methodDefinitionsToDelete): static
    {
        $this->methodDefinitionsToDelete = $methodDefinitionsToDelete;

        return $this;
    }

    /**
     * The list of condition IDs to delete.
     */
    public function setConditionsToDelete(array $conditionsToDelete): static
    {
        $this->conditionsToDelete = $conditionsToDelete;

        return $this;
    }

    /**
     * The list of selling plan groups to be associated with the delivery profile.
     */
    public function setSellingPlanGroupsToAssociate(array $sellingPlanGroupsToAssociate): static
    {
        $this->sellingPlanGroupsToAssociate = $sellingPlanGroupsToAssociate;

        return $this;
    }

    /**
     * The list of selling plan groups to be dissociated with the delivery profile.
     */
    public function setSellingPlanGroupsToDissociate(array $sellingPlanGroupsToDissociate): static
    {
        $this->sellingPlanGroupsToDissociate = $sellingPlanGroupsToDissociate;

        return $this;
    }

    /**
     * Whether this delivery profile covers all items in the shop. This field is only supported on
     * app-owned shipping profiles. Set it to `true` to make the profile cover all shippable items,
     * or `false` to disable this behavior. When omitted
     * on create, the profile is created with `coversAllItems: false`. When omitted on update, the
     * existing value is preserved.
     */
    public function setCoversAllItems($coversAllItems): static
    {
        $this->coversAllItems = $coversAllItems;

        return $this;
    }
}
