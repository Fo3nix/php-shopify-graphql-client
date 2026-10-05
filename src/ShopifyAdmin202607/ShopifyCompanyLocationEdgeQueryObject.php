<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyLocationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCompanyLocationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
