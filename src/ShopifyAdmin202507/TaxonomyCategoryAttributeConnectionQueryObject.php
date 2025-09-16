<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TaxonomyCategoryAttributeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyCategoryAttributeConnection";

    public function selectEdges(TaxonomyCategoryAttributeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyCategoryAttributeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(TaxonomyCategoryAttributeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyCategoryAttributeUnionObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(TaxonomyCategoryAttributeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
