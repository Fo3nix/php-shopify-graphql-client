<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMailingAddressConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MailingAddressConnection";

    public function selectEdges(ShopifyMailingAddressConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMailingAddressConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMailingAddressConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
