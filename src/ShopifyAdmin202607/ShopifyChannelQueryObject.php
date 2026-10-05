<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyChannelQueryObject extends QueryObject
{
    const OBJECT_NAME = "Channel";

    public function selectAccountId()
    {
        $this->selectField("accountId");

        return $this;
    }

    public function selectAccountName()
    {
        $this->selectField("accountName");

        return $this;
    }

    public function selectActiveRegions()
    {
        $this->selectField("activeRegions");

        return $this;
    }

    public function selectApp(ShopifyChannelAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollectionPublicationsV3(ShopifyChannelCollectionPublicationsV3ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationConnectionQueryObject("collectionPublicationsV3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollections(ShopifyChannelCollectionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
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

    public function selectMarkets(ShopifyChannelMarketsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketConnectionQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketsCount(ShopifyChannelMarketsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("marketsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
    public function selectNavigationItems(ShopifyChannelNavigationItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyNavigationItemQueryObject("navigationItems");
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
    public function selectProductPublications(ShopifyChannelProductPublicationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductPublicationConnectionQueryObject("productPublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductPublicationsV3(ShopifyChannelProductPublicationsV3ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationConnectionQueryObject("productPublicationsV3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProducts(ShopifyChannelProductsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductsCount(ShopifyChannelProductsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("productsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResourceFeedback(ShopifyChannelResourceFeedbackArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppFeedbackQueryObject("resourceFeedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSpecificationHandle()
    {
        $this->selectField("specificationHandle");

        return $this;
    }

    public function selectSupportsFuturePublishing()
    {
        $this->selectField("supportsFuturePublishing");

        return $this;
    }
}
