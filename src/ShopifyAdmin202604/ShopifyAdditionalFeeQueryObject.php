<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAdditionalFeeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AdditionalFee";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectPrice(ShopifyAdditionalFeePriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxLines(ShopifyAdditionalFeeTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
