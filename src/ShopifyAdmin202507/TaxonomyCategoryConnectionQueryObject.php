<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TaxonomyCategoryConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyCategoryConnection";

    public function selectEdges(TaxonomyCategoryConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyCategoryEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(TaxonomyCategoryConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyCategoryQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(TaxonomyCategoryConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
