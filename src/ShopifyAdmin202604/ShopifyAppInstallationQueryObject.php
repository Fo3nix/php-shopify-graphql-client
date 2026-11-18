<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An app installed on a shop. Each installation tracks the permissions granted to the app through [`AccessScope`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AccessScope) objects, along with billing subscriptions and [`Metafield`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metafield) objects.
 *
 * The installation provides metafields that only the owning [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) can access. These metafields store app-specific configuration that merchants and other apps can't modify. The installation also provides URLs for launching and uninstalling the app, along with any active [`AppSubscription`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppSubscription) objects or [`AppPurchaseOneTime`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppPurchaseOneTime) purchases.
 */
class ShopifyAppInstallationQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppInstallation";

    /**
     * The access scopes granted to the application by a merchant during installation.
     */
    public function selectAccessScopes(?ShopifyAppInstallationAccessScopesArgumentsObject $argsObject = null): ShopifyAccessScopeQueryObject
    {
        $object = new ShopifyAccessScopeQueryObject("accessScopes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The active application subscriptions billed to the shop on a recurring basis.
     */
    public function selectActiveSubscriptions(?ShopifyAppInstallationActiveSubscriptionsArgumentsObject $argsObject = null): ShopifyAppSubscriptionQueryObject
    {
        $object = new ShopifyAppSubscriptionQueryObject("activeSubscriptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * All subscriptions created for a shop.
     */
    public function selectAllSubscriptions(?ShopifyAppInstallationAllSubscriptionsArgumentsObject $argsObject = null): ShopifyAppSubscriptionConnectionQueryObject
    {
        $object = new ShopifyAppSubscriptionConnectionQueryObject("allSubscriptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Application which is installed.
     */
    public function selectApp(?ShopifyAppInstallationAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Channel associated with the installed application.
     *
     * @deprecated Use the root-level `channels` query instead.
     */
    public function selectChannel(?ShopifyAppInstallationChannelArgumentsObject $argsObject = null): ShopifyChannelQueryObject
    {
        $object = new ShopifyChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Credits that can be used towards future app purchases.
     */
    public function selectCredits(?ShopifyAppInstallationCreditsArgumentsObject $argsObject = null): ShopifyAppCreditConnectionQueryObject
    {
        $object = new ShopifyAppCreditConnectionQueryObject("credits");
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
     * The URL to launch the application.
     */
    public function selectLaunchUrl(): static
    {
        $this->selectField("launchUrl");

        return $this;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyAppInstallationMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyAppInstallationMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * One-time purchases to a shop.
     */
    public function selectOneTimePurchases(?ShopifyAppInstallationOneTimePurchasesArgumentsObject $argsObject = null): ShopifyAppPurchaseOneTimeConnectionQueryObject
    {
        $object = new ShopifyAppPurchaseOneTimeConnectionQueryObject("oneTimePurchases");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The publication associated with the installed application.
     *
     * @deprecated Use the root-level `publications` query instead.
     */
    public function selectPublication(?ShopifyAppInstallationPublicationArgumentsObject $argsObject = null): ShopifyPublicationQueryObject
    {
        $object = new ShopifyPublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The records that track the externally-captured revenue for the app. The records are used for revenue attribution purposes.
     */
    public function selectRevenueAttributionRecords(?ShopifyAppInstallationRevenueAttributionRecordsArgumentsObject $argsObject = null): ShopifyAppRevenueAttributionRecordConnectionQueryObject
    {
        $object = new ShopifyAppRevenueAttributionRecordConnectionQueryObject("revenueAttributionRecords");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Subscriptions charge to a shop on a recurring basis.
     *
     * @deprecated Use `activeSubscriptions` instead.
     */
    public function selectSubscriptions(?ShopifyAppInstallationSubscriptionsArgumentsObject $argsObject = null): ShopifyAppSubscriptionQueryObject
    {
        $object = new ShopifyAppSubscriptionQueryObject("subscriptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The URL to uninstall the application.
     */
    public function selectUninstallUrl(): static
    {
        $this->selectField("uninstallUrl");

        return $this;
    }
}
