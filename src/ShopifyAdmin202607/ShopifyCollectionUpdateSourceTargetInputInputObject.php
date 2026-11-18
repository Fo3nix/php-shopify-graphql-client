<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a collection source - provide the one field that represents the type of source to update.
 */
class ShopifyCollectionUpdateSourceTargetInputInputObject extends InputObject
{
    protected $condition;
    protected $subCollections;

    /**
     * An update to a shareable conditions-based source.
     */
    public function setCondition(ShopifyCollectionUpdateConditionsSourceInputInputObject $shopifyCollectionUpdateConditionsSourceInputInputObject): static
    {
        $this->condition = $shopifyCollectionUpdateConditionsSourceInputInputObject;

        return $this;
    }

    /**
     * An update to a sub-collection source whose membership comes from one or more referenced collections.
     */
    public function setSubCollections(ShopifyCollectionUpdateSubCollectionsSourceInputInputObject $shopifyCollectionUpdateSubCollectionsSourceInputInputObject): static
    {
        $this->subCollections = $shopifyCollectionUpdateSubCollectionsSourceInputInputObject;

        return $this;
    }
}
