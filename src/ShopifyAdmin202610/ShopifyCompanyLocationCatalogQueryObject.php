<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A list of products with publishing and pricing information associated with company locations.
 *
 * Company location catalogs can include an optional publication to control product visibility and a price list to customize pricing. When a publication isn't associated with the catalog, product availability is determined by the sales channel.
 */
class ShopifyCompanyLocationCatalogQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationCatalog";

    /**
     * The company locations associated with the catalog.
     */
    public function selectCompanyLocations(?ShopifyCompanyLocationCatalogCompanyLocationsArgumentsObject $argsObject = null): ShopifyCompanyLocationConnectionQueryObject
    {
        $object = new ShopifyCompanyLocationConnectionQueryObject("companyLocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of company locations associated with the catalog.
     */
    public function selectCompanyLocationsCount(?ShopifyCompanyLocationCatalogCompanyLocationsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("companyLocationsCount");
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
    public function selectOperations(?ShopifyCompanyLocationCatalogOperationsArgumentsObject $argsObject = null): ShopifyResourceOperationInterfaceObject
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
    public function selectPriceList(?ShopifyCompanyLocationCatalogPriceListArgumentsObject $argsObject = null): ShopifyPriceListQueryObject
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
    public function selectPublication(?ShopifyCompanyLocationCatalogPublicationArgumentsObject $argsObject = null): ShopifyPublicationQueryObject
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
