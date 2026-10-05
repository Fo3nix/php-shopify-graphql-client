<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTaxonomyCategoryAttributeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyCategoryAttributeConnection";

    public function selectEdges(ShopifyTaxonomyCategoryAttributeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyCategoryAttributeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyTaxonomyCategoryAttributeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyCategoryAttributeUnionObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyTaxonomyCategoryAttributeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
