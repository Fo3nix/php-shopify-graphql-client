<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPublicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "Publication";

    /**
     * @deprecated Use [AppCatalog.apps](https://shopify.dev/api/admin-graphql/unstable/objects/AppCatalog#connection-appcatalog-apps) instead.
     */
    public function selectApp(ShopifyPublicationAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAutoPublish()
    {
        $this->selectField("autoPublish");

        return $this;
    }

    public function selectChannels(ShopifyPublicationChannelsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelConnectionQueryObject("channels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollectionPublicationsV3(ShopifyPublicationCollectionPublicationsV3ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationConnectionQueryObject("collectionPublicationsV3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollections(ShopifyPublicationCollectionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHasCollection()
    {
        $this->selectField("hasCollection");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIncludedProducts(ShopifyPublicationIncludedProductsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductConnectionQueryObject("includedProducts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectIncludedProductsCount(ShopifyPublicationIncludedProductsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("includedProductsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use [Catalog.title](https://shopify.dev/api/admin-graphql/unstable/interfaces/Catalog#field-catalog-title) instead.
     */
    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectOperation(ShopifyPublicationOperationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPublicationOperationUnionObject("operation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductPublicationsV3(ShopifyPublicationProductPublicationsV3ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationConnectionQueryObject("productPublicationsV3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProducts(ShopifyPublicationProductsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSupportsFuturePublishing()
    {
        $this->selectField("supportsFuturePublishing");

        return $this;
    }
}
