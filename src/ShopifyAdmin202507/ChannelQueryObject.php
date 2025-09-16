<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ChannelQueryObject extends QueryObject
{
    const OBJECT_NAME = "Channel";

    public function selectApp(ChannelAppArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollectionPublicationsV3(ChannelCollectionPublicationsV3ArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationConnectionQueryObject("collectionPublicationsV3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollections(ChannelCollectionsArgumentsObject $argsObject = null)
    {
        $object = new CollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
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

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * @deprecated Use [AppInstallation.navigationItems](
              https://shopify.dev/api/admin-graphql/current/objects/AppInstallation#field-appinstallation-navigationitems) instead.
     */
    public function selectNavigationItems(ChannelNavigationItemsArgumentsObject $argsObject = null)
    {
        $object = new NavigationItemQueryObject("navigationItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use [AppInstallation.launchUrl](
              https://shopify.dev/api/admin-graphql/current/objects/AppInstallation#field-appinstallation-launchurl) instead.
     */
    public function selectOverviewPath()
    {
        $this->selectField("overviewPath");

        return $this;
    }

    /**
     * @deprecated Use `productPublicationsV3` instead.
     */
    public function selectProductPublications(ChannelProductPublicationsArgumentsObject $argsObject = null)
    {
        $object = new ProductPublicationConnectionQueryObject("productPublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductPublicationsV3(ChannelProductPublicationsV3ArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationConnectionQueryObject("productPublicationsV3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProducts(ChannelProductsArgumentsObject $argsObject = null)
    {
        $object = new ProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductsCount(ChannelProductsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("productsCount");
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
