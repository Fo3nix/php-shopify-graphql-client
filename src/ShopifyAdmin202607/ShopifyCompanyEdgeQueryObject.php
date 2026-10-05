<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCompanyEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
