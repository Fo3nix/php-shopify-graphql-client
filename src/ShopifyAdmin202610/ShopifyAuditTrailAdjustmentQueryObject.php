<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAuditTrailAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "AuditTrailAdjustment";

    public function selectLabel()
    {
        $this->selectField("label");

        return $this;
    }

    public function selectPrice(ShopifyAuditTrailAdjustmentPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
