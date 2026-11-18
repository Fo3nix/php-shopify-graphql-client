<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a product that has been manually selected for inclusion in a collection.
 */
class ShopifyCollectionInclusionProductSelectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionInclusionProductSelection";

    /**
     * The product that's manually included in the collection.
     */
    public function selectProduct(?ShopifyCollectionInclusionProductSelectionProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The IDs of variants of this product that have been manually included
     * in the collection. Null when no variant-level manual selections exist
     * for this product; non-empty when one or more variants have been
     * manually included.
     */
    public function selectVariantIds(): static
    {
        $this->selectField("variantIds");

        return $this;
    }
}
