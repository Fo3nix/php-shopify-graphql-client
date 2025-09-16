<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppQueryObject extends QueryObject
{
    const OBJECT_NAME = "App";

    public function selectApiKey()
    {
        $this->selectField("apiKey");

        return $this;
    }

    public function selectAppStoreAppUrl()
    {
        $this->selectField("appStoreAppUrl");

        return $this;
    }

    public function selectAppStoreDeveloperUrl()
    {
        $this->selectField("appStoreDeveloperUrl");

        return $this;
    }

    public function selectAvailableAccessScopes(AppAvailableAccessScopesArgumentsObject $argsObject = null)
    {
        $object = new AccessScopeQueryObject("availableAccessScopes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBanner(AppBannerArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("banner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectDeveloperName()
    {
        $this->selectField("developerName");

        return $this;
    }

    public function selectDeveloperType()
    {
        $this->selectField("developerType");

        return $this;
    }

    /**
     * @deprecated Use `appStoreDeveloperUrl` instead.
     */
    public function selectDeveloperUrl()
    {
        $this->selectField("developerUrl");

        return $this;
    }

    public function selectEmbedded()
    {
        $this->selectField("embedded");

        return $this;
    }

    public function selectFailedRequirements(AppFailedRequirementsArgumentsObject $argsObject = null)
    {
        $object = new FailedRequirementQueryObject("failedRequirements");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFeatures()
    {
        $this->selectField("features");

        return $this;
    }

    public function selectFeedback(AppFeedbackArgumentsObject $argsObject = null)
    {
        $object = new AppFeedbackQueryObject("feedback");
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

    public function selectIcon(AppIconArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("icon");
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

    public function selectInstallUrl()
    {
        $this->selectField("installUrl");

        return $this;
    }

    public function selectInstallation(AppInstallationArgumentsObject $argsObject = null)
    {
        $object = new AppInstallationQueryObject("installation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectIsPostPurchaseAppInUse()
    {
        $this->selectField("isPostPurchaseAppInUse");

        return $this;
    }

    /**
     * @deprecated Use AppInstallation.launchUrl instead
     */
    public function selectLaunchUrl()
    {
        $this->selectField("launchUrl");

        return $this;
    }

    /**
     * @deprecated Use AppInstallation.navigationItems instead
     */
    public function selectNavigationItems(AppNavigationItemsArgumentsObject $argsObject = null)
    {
        $object = new NavigationItemQueryObject("navigationItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOptionalAccessScopes(AppOptionalAccessScopesArgumentsObject $argsObject = null)
    {
        $object = new AccessScopeQueryObject("optionalAccessScopes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPreviouslyInstalled()
    {
        $this->selectField("previouslyInstalled");

        return $this;
    }

    public function selectPricingDetails()
    {
        $this->selectField("pricingDetails");

        return $this;
    }

    public function selectPricingDetailsSummary()
    {
        $this->selectField("pricingDetailsSummary");

        return $this;
    }

    public function selectPrivacyPolicyUrl()
    {
        $this->selectField("privacyPolicyUrl");

        return $this;
    }

    public function selectPublicCategory()
    {
        $this->selectField("publicCategory");

        return $this;
    }

    public function selectPublished()
    {
        $this->selectField("published");

        return $this;
    }

    public function selectRequestedAccessScopes(AppRequestedAccessScopesArgumentsObject $argsObject = null)
    {
        $object = new AccessScopeQueryObject("requestedAccessScopes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectScreenshots(AppScreenshotsArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("screenshots");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopifyDeveloped()
    {
        $this->selectField("shopifyDeveloped");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectUninstallMessage()
    {
        $this->selectField("uninstallMessage");

        return $this;
    }

    /**
     * @deprecated Use AppInstallation.uninstallUrl instead
     */
    public function selectUninstallUrl()
    {
        $this->selectField("uninstallUrl");

        return $this;
    }

    public function selectWebhookApiVersion()
    {
        $this->selectField("webhookApiVersion");

        return $this;
    }
}
