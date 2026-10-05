<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryOptionDefinitionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryOptionDefinitionConnection";

    public function selectEdges(ShopifyDeliveryOptionDefinitionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryOptionDefinitionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDeliveryOptionDefinitionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
