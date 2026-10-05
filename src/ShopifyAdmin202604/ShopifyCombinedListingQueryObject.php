<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCombinedListingQueryObject extends QueryObject
{
    const OBJECT_NAME = "CombinedListing";

    public function selectCombinedListingChildren(ShopifyCombinedListingCombinedListingChildrenArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCombinedListingChildConnectionQueryObject("combinedListingChildren");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParentProduct(ShopifyCombinedListingParentProductArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("parentProduct");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
