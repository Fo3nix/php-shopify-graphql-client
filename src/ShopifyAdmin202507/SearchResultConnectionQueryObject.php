<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SearchResultConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SearchResultConnection";

    public function selectEdges(SearchResultConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new SearchResultEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(SearchResultConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
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
