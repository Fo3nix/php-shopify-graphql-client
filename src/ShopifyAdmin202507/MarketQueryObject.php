<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketQueryObject extends QueryObject
{
    const OBJECT_NAME = "Market";

    public function selectAssignedCustomization()
    {
        $this->selectField("assignedCustomization");

        return $this;
    }

    public function selectCatalogs(MarketCatalogsArgumentsObject $argsObject = null)
    {
        $object = new MarketCatalogConnectionQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCatalogsCount(MarketCatalogsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("catalogsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConditions(MarketConditionsArgumentsObject $argsObject = null)
    {
        $object = new MarketConditionsQueryObject("conditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrencySettings(MarketCurrencySettingsArgumentsObject $argsObject = null)
    {
        $object = new MarketCurrencySettingsQueryObject("currencySettings");
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

    public function selectMetafield(MarketMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(MarketMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(MarketMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
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

    public function selectPriceInclusions(MarketPriceInclusionsArgumentsObject $argsObject = null)
    {
        $object = new MarketPriceInclusionsQueryObject("priceInclusions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `catalogs` instead.
     */
    public function selectPriceList(MarketPriceListArgumentsObject $argsObject = null)
    {
        $object = new PriceListQueryObject("priceList");
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
    public function selectRegions(MarketRegionsArgumentsObject $argsObject = null)
    {
        $object = new MarketRegionConnectionQueryObject("regions");
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
    public function selectWebPresence(MarketWebPresenceArgumentsObject $argsObject = null)
    {
        $object = new MarketWebPresenceQueryObject("webPresence");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebPresences(MarketWebPresencesArgumentsObject $argsObject = null)
    {
        $object = new MarketWebPresenceConnectionQueryObject("webPresences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
