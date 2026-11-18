<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A connection between a Shopify shop and an external selling platform that supports product syndication and optionally order ingestion. Each channel binds a merchant's account on a specific platform — such as Amazon, eBay, Google, or a point-of-sale system — to the shop, establishing the publishing destination for product feeds.
 *
 * Sales Channel applications use [`channelCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/channelCreate) to establish channels after merchant authentication, and can manage multiple channel connections per app. Each channel is bound to a channel specification that declares the platform's regional coverage, capabilities, and requirements.
 *
 * Use channels to manage where catalog items are syndicated, track publication status across platforms, and control [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) visibility for different selling destinations.
 */
class ShopifyChannelQueryObject extends QueryObject
{
    const OBJECT_NAME = "Channel";

    /**
     * The unique account ID for the merchant on the external platform. This value is opaque to Shopify — its format is determined by the channel, such as an Amazon Seller ID or Google Merchant Center ID.
     */
    public function selectAccountId(): static
    {
        $this->selectField("accountId");

        return $this;
    }

    /**
     * The merchant-facing name for the external account. Displayed in Shopify Admin wherever the channel connection is referenced, such as in Markets and order attribution.
     */
    public function selectAccountName(): static
    {
        $this->selectField("accountName");

        return $this;
    }

    /**
     * The underlying app used by the channel.
     */
    public function selectApp(?ShopifyChannelAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of collection publications. Each record represents information about the publication of a collection.
     */
    public function selectCollectionPublicationsV3(?ShopifyChannelCollectionPublicationsV3ArgumentsObject $argsObject = null): ShopifyResourcePublicationConnectionQueryObject
    {
        $object = new ShopifyResourcePublicationConnectionQueryObject("collectionPublicationsV3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of collections published to the channel.
     */
    public function selectCollections(?ShopifyChannelCollectionsArgumentsObject $argsObject = null): ShopifyCollectionConnectionQueryObject
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A unique, human-readable identifier for the channel within the shop. Set during [`channelCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/channelCreate) or auto-generated from the specification handle and account ID. Use with [`channelByHandle`](https://shopify.dev/docs/api/admin-graphql/latest/queries/channelByHandle) for lookups.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * Whether the collection is available to the channel.
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
     * The name of the channel.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The menu items for the channel, which also appear as submenu items in the left navigation sidebar in the Shopify admin.
     *
     * @deprecated Use [AppInstallation.navigationItems](
              https://shopify.dev/api/admin-graphql/current/objects/AppInstallation#field-appinstallation-navigationitems) instead.
     */
    public function selectNavigationItems(?ShopifyChannelNavigationItemsArgumentsObject $argsObject = null): ShopifyNavigationItemQueryObject
    {
        $object = new ShopifyNavigationItemQueryObject("navigationItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Home page for the channel.
     *
     * @deprecated Use [AppInstallation.launchUrl](
              https://shopify.dev/api/admin-graphql/current/objects/AppInstallation#field-appinstallation-launchurl) instead.
     */
    public function selectOverviewPath(): static
    {
        $this->selectField("overviewPath");

        return $this;
    }

    /**
     * The product publications for the products published to the channel.
     *
     * @deprecated Use `productPublicationsV3` instead.
     */
    public function selectProductPublications(?ShopifyChannelProductPublicationsArgumentsObject $argsObject = null): ShopifyProductPublicationConnectionQueryObject
    {
        $object = new ShopifyProductPublicationConnectionQueryObject("productPublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of product publication records for products published to this channel.
     */
    public function selectProductPublicationsV3(?ShopifyChannelProductPublicationsV3ArgumentsObject $argsObject = null): ShopifyResourcePublicationConnectionQueryObject
    {
        $object = new ShopifyResourcePublicationConnectionQueryObject("productPublicationsV3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of products published to the channel.
     */
    public function selectProducts(?ShopifyChannelProductsArgumentsObject $argsObject = null): ShopifyProductConnectionQueryObject
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves the total count of [`products`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) published to a specific sales channel. Limited to a maximum of 10000 by default.
     */
    public function selectProductsCount(?ShopifyChannelProductsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("productsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The resource feedback for the channel. Returns `null` when no active feedback exists—for example, after `shopResourceFeedbackCreate` is called with `state: ACCEPTED`, which clears the feedback signal. A `null` result is expected and means the channel has no outstanding feedback.
     */
    public function selectResourceFeedback(?ShopifyChannelResourceFeedbackArgumentsObject $argsObject = null): ShopifyAppFeedbackQueryObject
    {
        $object = new ShopifyAppFeedbackQueryObject("resourceFeedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The handle of the [channel specification](https://shopify.dev/docs/apps/build/sales-channels/channel-config-extension) bound to this channel. The specification declares the channel's regional coverage, capabilities, and requirements, and is deployed by the Sales Channel application via `shopify app deploy`.
     */
    public function selectSpecificationHandle(): static
    {
        $this->selectField("specificationHandle");

        return $this;
    }

    /**
     * Whether the channel supports future publishing.
     */
    public function selectSupportsFuturePublishing(): static
    {
        $this->selectField("supportsFuturePublishing");

        return $this;
    }
}
