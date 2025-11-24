<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryRateDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryRateDefinition";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectPrice(ShopifyDeliveryRateDefinitionPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
