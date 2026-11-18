<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A list of products with publishing and pricing information.
 * A catalog can be associated with a specific context, such as a [`Market`](https://shopify.dev/api/admin-graphql/current/objects/market), [`CompanyLocation`](https://shopify.dev/api/admin-graphql/current/objects/companylocation), or [`App`](https://shopify.dev/api/admin-graphql/current/objects/app).
 *
 * Catalogs can optionally include a publication to control product visibility and a price list to customize pricing. When a publication isn't associated with a catalog, product availability is determined by the sales channel.
 */
class ShopifyCatalogInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "Catalog";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Most recent catalog operations.
     */
    public function selectOperations(?ShopifyCatalogOperationsArgumentsObject $argsObject = null): ShopifyResourceOperationInterfaceObject
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
    public function selectPriceList(?ShopifyCatalogPriceListArgumentsObject $argsObject = null): ShopifyPriceListQueryObject
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
    public function selectPublication(?ShopifyCatalogPublicationArgumentsObject $argsObject = null): ShopifyPublicationQueryObject
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

    public function onAppCatalog(): ShopifyAppCatalogQueryObject
    {
        $object = new ShopifyAppCatalogQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompanyLocationCatalog(): ShopifyCompanyLocationCatalogQueryObject
    {
        $object = new ShopifyCompanyLocationCatalogQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarketCatalog(): ShopifyMarketCatalogQueryObject
    {
        $object = new ShopifyMarketCatalogQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
