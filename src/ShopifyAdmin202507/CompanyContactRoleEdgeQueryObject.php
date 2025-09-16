<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CompanyContactRoleEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRoleEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CompanyContactRoleEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactRoleQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
