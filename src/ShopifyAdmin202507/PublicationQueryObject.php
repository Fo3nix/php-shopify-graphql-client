<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PublicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "Publication";

    /**
     * @deprecated Use [AppCatalog.apps](https://shopify.dev/api/admin-graphql/unstable/objects/AppCatalog#connection-appcatalog-apps) instead.
     */
    public function selectApp(PublicationAppArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("app");
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

    public function selectCollectionPublicationsV3(PublicationCollectionPublicationsV3ArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationConnectionQueryObject("collectionPublicationsV3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollections(PublicationCollectionsArgumentsObject $argsObject = null)
    {
        $object = new CollectionConnectionQueryObject("collections");
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

    public function selectIncludedProducts(PublicationIncludedProductsArgumentsObject $argsObject = null)
    {
        $object = new ProductConnectionQueryObject("includedProducts");
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

    public function selectOperation(PublicationOperationArgumentsObject $argsObject = null)
    {
        $object = new PublicationOperationUnionObject("operation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductPublicationsV3(PublicationProductPublicationsV3ArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationConnectionQueryObject("productPublicationsV3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProducts(PublicationProductsArgumentsObject $argsObject = null)
    {
        $object = new ProductConnectionQueryObject("products");
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
