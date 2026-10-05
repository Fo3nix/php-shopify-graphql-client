<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyContactEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCompanyContactEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
