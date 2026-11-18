<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A list of collections that the discount can have as a prerequisite or a list of collections to which the discount can be applied.
 */
class ShopifyDiscountCollectionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCollections";

    /**
     * The list of collections that the discount can have as a prerequisite or the list of collections to which the discount can be applied.
     */
    public function selectCollections(?ShopifyDiscountCollectionsCollectionsArgumentsObject $argsObject = null): ShopifyCollectionConnectionQueryObject
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
