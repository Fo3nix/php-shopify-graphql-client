<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryRateDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryRateDefinition";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectPrice(DeliveryRateDefinitionPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
