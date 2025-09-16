<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerVisitProductInfoConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerVisitProductInfoConnection";

    public function selectEdges(CustomerVisitProductInfoConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CustomerVisitProductInfoEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(CustomerVisitProductInfoConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new CustomerVisitProductInfoQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CustomerVisitProductInfoConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
