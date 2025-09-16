<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryProfileItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileItem";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectProduct(DeliveryProfileItemProductArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariants(DeliveryProfileItemVariantsArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantConnectionQueryObject("variants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
