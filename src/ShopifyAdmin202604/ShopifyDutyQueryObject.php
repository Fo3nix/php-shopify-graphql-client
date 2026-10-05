<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDutyQueryObject extends QueryObject
{
    const OBJECT_NAME = "Duty";

    public function selectCountryCodeOfOrigin()
    {
        $this->selectField("countryCodeOfOrigin");

        return $this;
    }

    public function selectHarmonizedSystemCode()
    {
        $this->selectField("harmonizedSystemCode");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectPrice(ShopifyDutyPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxLines(ShopifyDutyTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
