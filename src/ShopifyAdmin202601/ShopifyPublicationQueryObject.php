<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A group of [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) and [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection) that are published to an app.
 *
 * Each publication manages which products and collections display on its associated [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel). Merchants can automatically publish products when they're created if [`autoPublish`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication#field-Publication.fields.autoPublish) is enabled, or manually control publication through publication records.
 *
 * Publications support scheduled publishing through future publish dates for online store channels, allowing merchants to coordinate product launches and promotional campaigns. The [`catalog`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication#field-Publication.fields.catalog) field links to pricing and availability rules specific to that publication's context.
 */
class ShopifyPublicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "Publication";

    /**
     * The app associated with the publication.
     *
     * @deprecated Use [AppCatalog.apps](https://shopify.dev/api/admin-graphql/unstable/objects/AppCatalog#connection-appcatalog-apps) instead.
     */
    public function selectApp(?ShopifyPublicationAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether new products are automatically published to this publication.
     */
    public function selectAutoPublish(): static
    {
        $this->selectField("autoPublish");

        return $this;
    }

    /**
     * The catalog associated with the publication.
     */
    public function selectCatalog(?ShopifyPublicationCatalogArgumentsObject $argsObject = null): ShopifyCatalogInterfaceObject
    {
        $object = new ShopifyCatalogInterfaceObject("catalog");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of collection publication records, each representing the publication status and details for a collection published to this publication (typically channel).
     */
    public function selectCollectionPublicationsV3(?ShopifyPublicationCollectionPublicationsV3ArgumentsObject $argsObject = null): ShopifyResourcePublicationConnectionQueryObject
    {
        $object = new ShopifyResourcePublicationConnectionQueryObject("collectionPublicationsV3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of collections published to the publication.
     */
    public function selectCollections(?ShopifyPublicationCollectionsArgumentsObject $argsObject = null): ShopifyCollectionConnectionQueryObject
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the collection is available to the publication.
     */
    public function selectHasCollection(): static
    {
        $this->selectField("hasCollection");

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
     * The list of products included, but not necessarily published, in the publication.
     */
    public function selectIncludedProducts(?ShopifyPublicationIncludedProductsArgumentsObject $argsObject = null): ShopifyProductConnectionQueryObject
    {
        $object = new ShopifyProductConnectionQueryObject("includedProducts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The count of products included in the publication. Limited to a maximum of 10000 by default.
     */
    public function selectIncludedProductsCount(?ShopifyPublicationIncludedProductsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("includedProductsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Name of the publication.
     *
     * @deprecated Use [Catalog.title](https://shopify.dev/api/admin-graphql/unstable/interfaces/Catalog#field-catalog-title) instead.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * A background operation associated with this publication.
     */
    public function selectOperation(?ShopifyPublicationOperationArgumentsObject $argsObject = null): ShopifyPublicationOperationUnionObject
    {
        $object = new ShopifyPublicationOperationUnionObject("operation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product publications for the list of products published to the publication.
     */
    public function selectProductPublicationsV3(?ShopifyPublicationProductPublicationsV3ArgumentsObject $argsObject = null): ShopifyResourcePublicationConnectionQueryObject
    {
        $object = new ShopifyResourcePublicationConnectionQueryObject("productPublicationsV3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of products published to the publication.
     */
    public function selectProducts(?ShopifyPublicationProductsArgumentsObject $argsObject = null): ShopifyProductConnectionQueryObject
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the publication supports future publishing.
     */
    public function selectSupportsFuturePublishing(): static
    {
        $this->selectField("supportsFuturePublishing");

        return $this;
    }
}
