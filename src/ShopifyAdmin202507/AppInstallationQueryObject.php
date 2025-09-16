<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppInstallationQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppInstallation";

    public function selectAccessScopes(AppInstallationAccessScopesArgumentsObject $argsObject = null)
    {
        $object = new AccessScopeQueryObject("accessScopes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectActiveSubscriptions(AppInstallationActiveSubscriptionsArgumentsObject $argsObject = null)
    {
        $object = new AppSubscriptionQueryObject("activeSubscriptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllSubscriptions(AppInstallationAllSubscriptionsArgumentsObject $argsObject = null)
    {
        $object = new AppSubscriptionConnectionQueryObject("allSubscriptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectApp(AppInstallationAppArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `publication` instead.
     */
    public function selectChannel(AppInstallationChannelArgumentsObject $argsObject = null)
    {
        $object = new ChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCredits(AppInstallationCreditsArgumentsObject $argsObject = null)
    {
        $object = new AppCreditConnectionQueryObject("credits");
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

    public function selectMetafield(AppInstallationMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(AppInstallationMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOneTimePurchases(AppInstallationOneTimePurchasesArgumentsObject $argsObject = null)
    {
        $object = new AppPurchaseOneTimeConnectionQueryObject("oneTimePurchases");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublication(AppInstallationPublicationArgumentsObject $argsObject = null)
    {
        $object = new PublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRevenueAttributionRecords(AppInstallationRevenueAttributionRecordsArgumentsObject $argsObject = null)
    {
        $object = new AppRevenueAttributionRecordConnectionQueryObject("revenueAttributionRecords");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `activeSubscriptions` instead.
     */
    public function selectSubscriptions(AppInstallationSubscriptionsArgumentsObject $argsObject = null)
    {
        $object = new AppSubscriptionQueryObject("subscriptions");
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
