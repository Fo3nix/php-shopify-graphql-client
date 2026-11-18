<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The conditions that determine whether a visitor is in a market.
 */
class ShopifyMarketConditionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketConditions";

    /**
     * The channel conditions that determine whether a visitor is in the market.
     */
    public function selectChannelsCondition(?ShopifyMarketConditionsChannelsConditionArgumentsObject $argsObject = null): ShopifyChannelsConditionQueryObject
    {
        $object = new ShopifyChannelsConditionQueryObject("channelsCondition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The company location conditions that determine whether a visitor is in the market.
     */
    public function selectCompanyLocationsCondition(?ShopifyMarketConditionsCompanyLocationsConditionArgumentsObject $argsObject = null): ShopifyCompanyLocationsConditionQueryObject
    {
        $object = new ShopifyCompanyLocationsConditionQueryObject("companyLocationsCondition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The set of condition types that are defined for the market.
     */
    public function selectConditionTypes(): static
    {
        $this->selectField("conditionTypes");

        return $this;
    }

    /**
     * The retail location conditions that determine whether a visitor is in the market.
     */
    public function selectLocationsCondition(?ShopifyMarketConditionsLocationsConditionArgumentsObject $argsObject = null): ShopifyLocationsConditionQueryObject
    {
        $object = new ShopifyLocationsConditionQueryObject("locationsCondition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The region conditions that determine whether a visitor is in the market.
     */
    public function selectRegionsCondition(?ShopifyMarketConditionsRegionsConditionArgumentsObject $argsObject = null): ShopifyRegionsConditionQueryObject
    {
        $object = new ShopifyRegionsConditionQueryObject("regionsCondition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
