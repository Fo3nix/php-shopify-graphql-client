<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A combined listing of products.
 */
class ShopifyCombinedListingQueryObject extends QueryObject
{
    const OBJECT_NAME = "CombinedListing";

    /**
     * A list of child products in the combined listing.
     */
    public function selectCombinedListingChildren(?ShopifyCombinedListingCombinedListingChildrenArgumentsObject $argsObject = null): ShopifyCombinedListingChildConnectionQueryObject
    {
        $object = new ShopifyCombinedListingChildConnectionQueryObject("combinedListingChildren");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The parent product.
     */
    public function selectParentProduct(?ShopifyCombinedListingParentProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("parentProduct");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
