<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionSourceInclusionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusion";

    public function selectMatchType()
    {
        $this->selectField("matchType");

        return $this;
    }

    public function selectSelections(ShopifyCollectionSourceInclusionSelectionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionInclusionProductSelectionConnectionQueryObject("selections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
