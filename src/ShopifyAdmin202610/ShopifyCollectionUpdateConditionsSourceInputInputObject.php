<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a shareable collection source.
 */
class ShopifyCollectionUpdateConditionsSourceInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $title;
    protected $description;
    protected $inclusion;
    protected $exclusion;

    /**
     * The ID of the source to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The title of the source.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * An optional description of the source.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The inclusion rules for the source.
     */
    public function setInclusion(ShopifyCollectionUpdateSourceInclusionInputInputObject $shopifyCollectionUpdateSourceInclusionInputInputObject): static
    {
        $this->inclusion = $shopifyCollectionUpdateSourceInclusionInputInputObject;

        return $this;
    }

    /**
     * The exclusion rules for the source.
     */
    public function setExclusion(ShopifyCollectionUpdateSourceExclusionInputInputObject $shopifyCollectionUpdateSourceExclusionInputInputObject): static
    {
        $this->exclusion = $shopifyCollectionUpdateSourceExclusionInputInputObject;

        return $this;
    }
}
