<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppInstallationQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppInstallation";

    public function selectAccessScopes(ShopifyAppInstallationAccessScopesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAccessScopeQueryObject("accessScopes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectActiveSubscriptions(ShopifyAppInstallationActiveSubscriptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppSubscriptionQueryObject("activeSubscriptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllSubscriptions(ShopifyAppInstallationAllSubscriptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppSubscriptionConnectionQueryObject("allSubscriptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectApp(ShopifyAppInstallationAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use the root-level `channels` query instead.
     */
    public function selectChannel(ShopifyAppInstallationChannelArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCredits(ShopifyAppInstallationCreditsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppCreditConnectionQueryObject("credits");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLaunchUrl()
    {
        $this->selectField("launchUrl");

        return $this;
    }

    public function selectMetafield(ShopifyAppInstallationMetafieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyAppInstallationMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOneTimePurchases(ShopifyAppInstallationOneTimePurchasesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppPurchaseOneTimeConnectionQueryObject("oneTimePurchases");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use the root-level `publications` query instead.
     */
    public function selectPublication(ShopifyAppInstallationPublicationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRevenueAttributionRecords(ShopifyAppInstallationRevenueAttributionRecordsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppRevenueAttributionRecordConnectionQueryObject("revenueAttributionRecords");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `activeSubscriptions` instead.
     */
    public function selectSubscriptions(ShopifyAppInstallationSubscriptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppSubscriptionQueryObject("subscriptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUninstallUrl()
    {
        $this->selectField("uninstallUrl");

        return $this;
    }
}
