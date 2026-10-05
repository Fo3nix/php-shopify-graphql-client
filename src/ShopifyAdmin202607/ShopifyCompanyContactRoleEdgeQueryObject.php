<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyContactRoleEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRoleEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCompanyContactRoleEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactRoleQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
