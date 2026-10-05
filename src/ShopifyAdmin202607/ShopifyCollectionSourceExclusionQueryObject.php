<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionSourceExclusionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceExclusion";

    public function selectMatchType()
    {
        $this->selectField("matchType");

        return $this;
    }

    public function selectSelections(ShopifyCollectionSourceExclusionSelectionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionExclusionProductSelectionConnectionQueryObject("selections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
