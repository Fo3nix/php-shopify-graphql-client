<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldReferenceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldReferenceConnection";

    public function selectEdges(MetafieldReferenceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldReferenceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(MetafieldReferenceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldReferenceUnionObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(MetafieldReferenceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
