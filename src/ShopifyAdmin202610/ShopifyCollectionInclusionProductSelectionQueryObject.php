<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionInclusionProductSelectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionInclusionProductSelection";

    public function selectProduct(ShopifyCollectionInclusionProductSelectionProductArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariantIds()
    {
        $this->selectField("variantIds");

        return $this;
    }
}
