<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create a collection source.
 */
class ShopifyCollectionCreateConditionsSourceInputInputObject extends InputObject
{
    const REQUIRED = ["title"];

    protected $title;
    protected $description;
    protected $inclusion;
    protected $exclusion;
    protected $targetType;

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
    public function setInclusion(ShopifyCollectionCreateSourceInclusionInputInputObject $shopifyCollectionCreateSourceInclusionInputInputObject): static
    {
        $this->inclusion = $shopifyCollectionCreateSourceInclusionInputInputObject;

        return $this;
    }

    /**
     * The exclusion rules for the source.
     */
    public function setExclusion(ShopifyCollectionCreateSourceExclusionInputInputObject $shopifyCollectionCreateSourceExclusionInputInputObject): static
    {
        $this->exclusion = $shopifyCollectionCreateSourceExclusionInputInputObject;

        return $this;
    }

    /**
     * What granularity this source operates at. Defaults to PRODUCTS.
     */
    public function setTargetType($shopifyCollectionSourceTargetType): static
    {
        $this->targetType = new RawObject($shopifyCollectionSourceTargetType);

        return $this;
    }
}
