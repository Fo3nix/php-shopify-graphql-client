<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a product that has been manually selected for exclusion from a collection.
 */
class ShopifyCollectionExclusionProductSelectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionExclusionProductSelection";

    /**
     * The product that's manually excluded from the collection.
     */
    public function selectProduct(?ShopifyCollectionExclusionProductSelectionProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
