<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The duty details for a line item.
 */
class ShopifyDutyQueryObject extends QueryObject
{
    const OBJECT_NAME = "Duty";

    /**
     * The ISO 3166-1 alpha-2 country code of the country of origin used in calculating the duty.
     */
    public function selectCountryCodeOfOrigin(): static
    {
        $this->selectField("countryCodeOfOrigin");

        return $this;
    }

    /**
     * The harmonized system code of the item used in calculating the duty.
     */
    public function selectHarmonizedSystemCode(): static
    {
        $this->selectField("harmonizedSystemCode");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The amount of the duty.
     */
    public function selectPrice(?ShopifyDutyPriceArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of taxes charged on the duty.
     */
    public function selectTaxLines(?ShopifyDutyTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
