<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySearchResultConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SearchResultConnection";

    public function selectEdges(ShopifySearchResultConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySearchResultEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySearchResultConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated The provided information is not accurate.
     */
    public function selectResultsAfterCount()
    {
        $this->selectField("resultsAfterCount");

        return $this;
    }
}
