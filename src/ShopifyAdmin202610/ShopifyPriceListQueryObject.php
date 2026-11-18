<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A list that defines pricing for [product variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant). Price lists override default product prices with either fixed prices or percentage-based adjustments.
 *
 * Each price list associates with a [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog) to determine which customers see the pricing. The catalog's context rules control when the price list applies, such as for specific markets, company locations, or apps.
 *
 * Learn how to [support different pricing models](https://shopify.dev/docs/apps/build/markets/build-catalog).
 */
class ShopifyPriceListQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceList";

    /**
     * The catalog that the price list is associated with.
     */
    public function selectCatalog(?ShopifyPriceListCatalogArgumentsObject $argsObject = null): ShopifyCatalogInterfaceObject
    {
        $object = new ShopifyCatalogInterfaceObject("catalog");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the price list was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The currency for fixed prices associated with this price list.
     */
    public function selectCurrency(): static
    {
        $this->selectField("currency");

        return $this;
    }

    /**
     * The number of fixed prices on the price list.
     */
    public function selectFixedPricesCount(): static
    {
        $this->selectField("fixedPricesCount");

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
     * The unique name of the price list, used as a human-readable identifier.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * Relative adjustments to other prices.
     */
    public function selectParent(?ShopifyPriceListParentArgumentsObject $argsObject = null): ShopifyPriceListParentQueryObject
    {
        $object = new ShopifyPriceListParentQueryObject("parent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of prices associated with the price list.
     */
    public function selectPrices(?ShopifyPriceListPricesArgumentsObject $argsObject = null): ShopifyPriceListPriceConnectionQueryObject
    {
        $object = new ShopifyPriceListPriceConnectionQueryObject("prices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of quantity rules associated with the price list, ordered by product variants.
     */
    public function selectQuantityRules(?ShopifyPriceListQuantityRulesArgumentsObject $argsObject = null): ShopifyQuantityRuleConnectionQueryObject
    {
        $object = new ShopifyQuantityRuleConnectionQueryObject("quantityRules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
