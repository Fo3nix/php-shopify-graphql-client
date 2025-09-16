<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MailingAddressConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MailingAddressConnection";

    public function selectEdges(MailingAddressConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(MailingAddressConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(MailingAddressConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
