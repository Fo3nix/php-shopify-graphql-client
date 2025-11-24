<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMailingAddressEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MailingAddressEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyMailingAddressEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
