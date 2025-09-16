<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MailingAddressEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MailingAddressEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(MailingAddressEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
