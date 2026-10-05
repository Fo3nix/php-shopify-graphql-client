<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTaxonomyCategoryConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyCategoryConnection";

    public function selectEdges(ShopifyTaxonomyCategoryConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyCategoryEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyTaxonomyCategoryConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyCategoryQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyTaxonomyCategoryConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
