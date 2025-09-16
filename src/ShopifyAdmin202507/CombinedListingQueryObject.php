<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CombinedListingQueryObject extends QueryObject
{
    const OBJECT_NAME = "CombinedListing";

    public function selectCombinedListingChildren(CombinedListingCombinedListingChildrenArgumentsObject $argsObject = null)
    {
        $object = new CombinedListingChildConnectionQueryObject("combinedListingChildren");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParentProduct(CombinedListingParentProductArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("parentProduct");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
