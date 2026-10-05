<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketQueryObject extends QueryObject
{
    const OBJECT_NAME = "Market";

    public function selectAssignedCustomization()
    {
        $this->selectField("assignedCustomization");

        return $this;
    }

    public function selectCatalogs(ShopifyMarketCatalogsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketCatalogConnectionQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCatalogsCount(ShopifyMarketCatalogsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("catalogsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConditions(ShopifyMarketConditionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketConditionsQueryObject("conditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrencySettings(ShopifyMarketCurrencySettingsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketCurrencySettingsQueryObject("currencySettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDelivery(ShopifyMarketDeliveryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketDeliveryConfigurationsQueryObject("delivery");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscounts(ShopifyMarketDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountNodeConnectionQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountsCount(ShopifyMarketDiscountsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("discountsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `status` instead.
     */
    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMetafield(ShopifyMarketMetafieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(ShopifyMarketMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyMarketMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectPriceInclusions(ShopifyMarketPriceInclusionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketPriceInclusionsQueryObject("priceInclusions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `catalogs` instead.
     */
    public function selectPriceList(ShopifyMarketPriceListArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListQueryObject("priceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field is deprecated and will be removed in the future.
     */
    public function selectPrimary()
    {
        $this->selectField("primary");

        return $this;
    }

    /**
     * @deprecated This field is deprecated and will be removed in the future. Use `conditions.regionConditions` instead.
     */
    public function selectRegions(ShopifyMarketRegionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketRegionConnectionQueryObject("regions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * @deprecated Use `webPresences` instead.
     */
    public function selectWebPresence(ShopifyMarketWebPresenceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketWebPresenceQueryObject("webPresence");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebPresences(ShopifyMarketWebPresencesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketWebPresenceConnectionQueryObject("webPresences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
