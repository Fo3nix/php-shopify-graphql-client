<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A catalog for managing product availability and pricing for specific [`Market`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) contexts. Each catalog links to one or more markets. The catalog can optionally include a [`Publication`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication) to control which [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects customers see, and a [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList) for market-specific pricing adjustments. When a publication isn't associated with the catalog, product availability is determined by the sales channel.
 *
 * Use catalogs to create distinct shopping experiences for different geographic regions or customer segments.
 *
 * Learn more about [building a catalog](https://shopify.dev/docs/apps/build/markets/build-catalog) and [managing markets](https://shopify.dev/docs/apps/build/markets).
 */
class ShopifyMarketCatalogQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketCatalog";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The markets associated with the catalog.
     */
    public function selectMarkets(?ShopifyMarketCatalogMarketsArgumentsObject $argsObject = null): ShopifyMarketConnectionQueryObject
    {
        $object = new ShopifyMarketConnectionQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of markets associated with the catalog.
     */
    public function selectMarketsCount(?ShopifyMarketCatalogMarketsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("marketsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Most recent catalog operations.
     */
    public function selectOperations(?ShopifyMarketCatalogOperationsArgumentsObject $argsObject = null): ShopifyResourceOperationInterfaceObject
    {
        $object = new ShopifyResourceOperationInterfaceObject("operations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price list associated with the catalog.
     */
    public function selectPriceList(?ShopifyMarketCatalogPriceListArgumentsObject $argsObject = null): ShopifyPriceListQueryObject
    {
        $object = new ShopifyPriceListQueryObject("priceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A group of products and collections that's published to a catalog.
     */
    public function selectPublication(?ShopifyMarketCatalogPublicationArgumentsObject $argsObject = null): ShopifyPublicationQueryObject
    {
        $object = new ShopifyPublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the catalog.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The name of the catalog.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
