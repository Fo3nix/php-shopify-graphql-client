<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTaxonomyValueConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyValueConnection";

    public function selectEdges(ShopifyTaxonomyValueConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyValueEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyTaxonomyValueConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyValueQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyTaxonomyValueConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
