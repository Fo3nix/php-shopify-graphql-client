<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to create or update a selling plan group.
 */
class ShopifySellingPlanGroupInputInputObject extends InputObject
{
    protected $name;
    protected $appId;
    protected $merchantCode;
    protected $description;
    protected $sellingPlansToCreate;
    protected $sellingPlansToUpdate;
    protected $sellingPlansToDelete;
    protected $options;
    protected $position;

    /**
     * Buyer facing label of the selling plan group.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * ID for app, exposed in Liquid and product JSON.
     */
    public function setAppId($appId): static
    {
        $this->appId = $appId;

        return $this;
    }

    /**
     * Merchant facing label of the selling plan group.
     */
    public function setMerchantCode($merchantCode): static
    {
        $this->merchantCode = $merchantCode;

        return $this;
    }

    /**
     * Merchant facing description of the selling plan group.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * List of selling plans to create.
     */
    public function setSellingPlansToCreate(array $sellingPlansToCreate): static
    {
        $this->sellingPlansToCreate = $sellingPlansToCreate;

        return $this;
    }

    /**
     * List of selling plans to update.
     */
    public function setSellingPlansToUpdate(array $sellingPlansToUpdate): static
    {
        $this->sellingPlansToUpdate = $sellingPlansToUpdate;

        return $this;
    }

    /**
     * List of selling plans ids to delete.
     */
    public function setSellingPlansToDelete(array $sellingPlansToDelete): static
    {
        $this->sellingPlansToDelete = $sellingPlansToDelete;

        return $this;
    }

    /**
     * The values of all options available on the selling plan group. Selling plans are grouped together in Liquid when they're created by the same app, and have the same `selling_plan_group.name` and `selling_plan_group.options` values.
     */
    public function setOptions(array $options): static
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Relative value for display purposes of the selling plan group. A lower position will be displayed before a higher one.
     */
    public function setPosition($position): static
    {
        $this->position = $position;

        return $this;
    }
}
