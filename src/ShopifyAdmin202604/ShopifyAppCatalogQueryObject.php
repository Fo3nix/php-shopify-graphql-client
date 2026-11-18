<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A catalog that defines the publication associated with an app.
 */
class ShopifyAppCatalogQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppCatalog";

    /**
     * The apps associated with the catalog.
     */
    public function selectApps(?ShopifyAppCatalogAppsArgumentsObject $argsObject = null): ShopifyAppConnectionQueryObject
    {
        $object = new ShopifyAppConnectionQueryObject("apps");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The channels associated with the catalog.
     */
    public function selectChannels(?ShopifyAppCatalogChannelsArgumentsObject $argsObject = null): ShopifyChannelConnectionQueryObject
    {
        $object = new ShopifyChannelConnectionQueryObject("channels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * Most recent catalog operations.
     */
    public function selectOperations(?ShopifyAppCatalogOperationsArgumentsObject $argsObject = null): ShopifyResourceOperationInterfaceObject
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
    public function selectPriceList(?ShopifyAppCatalogPriceListArgumentsObject $argsObject = null): ShopifyPriceListQueryObject
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
    public function selectPublication(?ShopifyAppCatalogPublicationArgumentsObject $argsObject = null): ShopifyPublicationQueryObject
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
