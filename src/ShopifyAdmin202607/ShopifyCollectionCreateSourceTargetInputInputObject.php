<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for adding a source to a collection — provide exactly one field that represents the type of source to create.
 */
class ShopifyCollectionCreateSourceTargetInputInputObject extends InputObject
{
    protected $source;
    protected $subCollections;
    protected $shareableSource;

    /**
     * Net new conditions-based source (target_type products or variants) to create — must belong to one collection.
     */
    public function setSource(ShopifyCollectionCreateConditionsSourceInputInputObject $shopifyCollectionCreateConditionsSourceInputInputObject): static
    {
        $this->source = $shopifyCollectionCreateConditionsSourceInputInputObject;

        return $this;
    }

    /**
     * Net new sub-collection source (target_type collections) whose membership comes from one or more referenced collections.
     */
    public function setSubCollections(ShopifyCollectionCreateSubCollectionsSourceInputInputObject $shopifyCollectionCreateSubCollectionsSourceInputInputObject): static
    {
        $this->subCollections = $shopifyCollectionCreateSubCollectionsSourceInputInputObject;

        return $this;
    }

    /**
     * An existing shareable source to link to the collection.
     */
    public function setShareableSource(ShopifyCollectionShareableSourceInputInputObject $shopifyCollectionShareableSourceInputInputObject): static
    {
        $this->shareableSource = $shopifyCollectionShareableSourceInputInputObject;

        return $this;
    }
}
