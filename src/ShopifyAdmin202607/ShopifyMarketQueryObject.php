<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A merchant-defined group of buyers identified by conditions such as their
 * region, retail location, or company location. Each market allows configuration
 * of a distinct, localized buyer experience. Customizations include, but are
 * not limited to,
 * [currency](https://shopify.dev/api/admin-graphql/current/mutations/marketCurrencySettingsUpdate),
 * [pricing and product availability](https://shopify.dev/apps/internationalization/product-price-lists),
 * [web presence](https://shopify.dev/api/admin-graphql/current/objects/MarketWebPresence),
 * and content translations.
 */
class ShopifyMarketQueryObject extends QueryObject
{
    const OBJECT_NAME = "Market";

    /**
     * Whether the market has a customization with the given ID.
     */
    public function selectAssignedCustomization(): static
    {
        $this->selectField("assignedCustomization");

        return $this;
    }

    /**
     * The catalogs that belong to the market.
     */
    public function selectCatalogs(?ShopifyMarketCatalogsArgumentsObject $argsObject = null): ShopifyMarketCatalogConnectionQueryObject
    {
        $object = new ShopifyMarketCatalogConnectionQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of catalogs that belong to the market.
     */
    public function selectCatalogsCount(?ShopifyMarketCatalogsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("catalogsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The conditions under which a visitor is in the market.
     */
    public function selectConditions(?ShopifyMarketConditionsArgumentsObject $argsObject = null): ShopifyMarketConditionsQueryObject
    {
        $object = new ShopifyMarketConditionsQueryObject("conditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time the market was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The market’s currency settings.
     */
    public function selectCurrencySettings(?ShopifyMarketCurrencySettingsArgumentsObject $argsObject = null): ShopifyMarketCurrencySettingsQueryObject
    {
        $object = new ShopifyMarketCurrencySettingsQueryObject("currencySettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The delivery settings for this market.
     */
    public function selectDelivery(?ShopifyMarketDeliveryArgumentsObject $argsObject = null): ShopifyMarketDeliveryConfigurationsQueryObject
    {
        $object = new ShopifyMarketDeliveryConfigurationsQueryObject("delivery");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The discounts that are available in this market.
     */
    public function selectDiscounts(?ShopifyMarketDiscountsArgumentsObject $argsObject = null): ShopifyDiscountNodeConnectionQueryObject
    {
        $object = new ShopifyDiscountNodeConnectionQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of discounts that are assigned to this market.
     */
    public function selectDiscountsCount(?ShopifyMarketDiscountsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("discountsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the market is enabled to receive visitors and sales. **Note**: Regions in inactive
     * markets can't be selected on the storefront or in checkout.
     *
     * @deprecated Use `status` instead.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }

    /**
     * A short, human-readable unique identifier for the market. This is changeable by the merchant.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

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
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyMarketMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of metafield definitions.
     *
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(?ShopifyMarketMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyMarketMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the market. Not shown to customers.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The inclusive pricing strategy for a market. This determines if prices include duties and / or taxes.
     */
    public function selectPriceInclusions(?ShopifyMarketPriceInclusionsArgumentsObject $argsObject = null): ShopifyMarketPriceInclusionsQueryObject
    {
        $object = new ShopifyMarketPriceInclusionsQueryObject("priceInclusions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The market’s price list, which specifies a percentage-based price adjustment as well as
     * fixed price overrides for specific variants.
     *
     * Markets with multiple catalogs can have multiple price lists. To query which price lists are connected to
     * a market, please query for price lists through the catalogs connection.
     *
     * @deprecated Use `catalogs` instead.
     */
    public function selectPriceList(?ShopifyMarketPriceListArgumentsObject $argsObject = null): ShopifyPriceListQueryObject
    {
        $object = new ShopifyPriceListQueryObject("priceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the market is the shop’s primary market.
     *
     * @deprecated This field is deprecated and will be removed in the future.
     */
    public function selectPrimary(): static
    {
        $this->selectField("primary");

        return $this;
    }

    /**
     * The regions that comprise the market.
     *
     * @deprecated This field is deprecated and will be removed in the future. Use `conditions.regionConditions` instead.
     */
    public function selectRegions(?ShopifyMarketRegionsArgumentsObject $argsObject = null): ShopifyMarketRegionConnectionQueryObject
    {
        $object = new ShopifyMarketRegionConnectionQueryObject("regions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Status of the market. Replaces the enabled field.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The type of the market.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The market’s web presence, which defines its SEO strategy. This can be a different domain,
     * subdomain, or subfolders of the primary domain. Each web presence comprises one or more
     * language variants. If a market doesn't have its own web presence, then the market is accessible on the
     * primary market's domains using [country
     * selectors](https://shopify.dev/themes/internationalization/multiple-currencies-languages#the-country-selector).
     * If it's the primary market and it has multiple web presences, then this field will return the primary domain web presence.
     *
     * @deprecated Use `webPresences` instead.
     */
    public function selectWebPresence(?ShopifyMarketWebPresenceArgumentsObject $argsObject = null): ShopifyMarketWebPresenceQueryObject
    {
        $object = new ShopifyMarketWebPresenceQueryObject("webPresence");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The market’s web presences, which defines its SEO strategy. This can be a different domain,
     * subdomain, or subfolders of the primary domain. Each web presence comprises one or more
     * language variants. If a market doesn't have any web presences, then the market is accessible on the
     * primary market's domains using [country
     * selectors](https://shopify.dev/themes/internationalization/multiple-currencies-languages#the-country-selector).
     */
    public function selectWebPresences(?ShopifyMarketWebPresencesArgumentsObject $argsObject = null): ShopifyMarketWebPresenceConnectionQueryObject
    {
        $object = new ShopifyMarketWebPresenceConnectionQueryObject("webPresences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
