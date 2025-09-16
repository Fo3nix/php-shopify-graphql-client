<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TaxonomyValueConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyValueConnection";

    public function selectEdges(TaxonomyValueConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyValueEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(TaxonomyValueConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyValueQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(TaxonomyValueConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
