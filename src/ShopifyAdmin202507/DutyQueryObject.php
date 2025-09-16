<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DutyQueryObject extends QueryObject
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

    public function selectPrice(DutyPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxLines(DutyTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new TaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
