<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A Shopify application that extends store functionality. Apps integrate with Shopify through APIs to add features, automate workflows, or connect external services.
 *
 * Provides metadata about the app including its developer information and listing details in the Shopify App Store. Use the [`installation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App#field-App.fields.installation) field to determine if the app is currently installed on the shop and access installation-specific details like granted [`AccessScope`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AccessScope) objects. Check [`failedRequirements`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App#field-App.fields.failedRequirements) before installation to identify any prerequisites that must be met.
 */
class ShopifyAppQueryObject extends QueryObject
{
    const OBJECT_NAME = "App";

    /**
     * A unique application API identifier.
     */
    public function selectApiKey(): static
    {
        $this->selectField("apiKey");

        return $this;
    }

    /**
     * App store page URL of the app.
     */
    public function selectAppStoreAppUrl(): static
    {
        $this->selectField("appStoreAppUrl");

        return $this;
    }

    /**
     * App store page URL of the developer who created the app.
     */
    public function selectAppStoreDeveloperUrl(): static
    {
        $this->selectField("appStoreDeveloperUrl");

        return $this;
    }

    /**
     * All requestable access scopes available to the app.
     */
    public function selectAvailableAccessScopes(?ShopifyAppAvailableAccessScopesArgumentsObject $argsObject = null): ShopifyAccessScopeQueryObject
    {
        $object = new ShopifyAccessScopeQueryObject("availableAccessScopes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Banner image for the app.
     */
    public function selectBanner(?ShopifyAppBannerArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("banner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sales channels associated with this app.
     */
    public function selectChannels(?ShopifyAppChannelsArgumentsObject $argsObject = null): ShopifyChannelConnectionQueryObject
    {
        $object = new ShopifyChannelConnectionQueryObject("channels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Description of the app.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The name of the app developer.
     */
    public function selectDeveloperName(): static
    {
        $this->selectField("developerName");

        return $this;
    }

    /**
     * The type of app developer.
     */
    public function selectDeveloperType(): static
    {
        $this->selectField("developerType");

        return $this;
    }

    /**
     * Website of the developer who created the app.
     *
     * @deprecated Use `appStoreDeveloperUrl` instead.
     */
    public function selectDeveloperUrl(): static
    {
        $this->selectField("developerUrl");

        return $this;
    }

    /**
     * Whether the app uses the Embedded App SDK.
     */
    public function selectEmbedded(): static
    {
        $this->selectField("embedded");

        return $this;
    }

    /**
     * Requirements that must be met before the app can be installed.
     */
    public function selectFailedRequirements(?ShopifyAppFailedRequirementsArgumentsObject $argsObject = null): ShopifyFailedRequirementQueryObject
    {
        $object = new ShopifyFailedRequirementQueryObject("failedRequirements");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of app features that are shown in the Shopify App Store listing.
     */
    public function selectFeatures(): static
    {
        $this->selectField("features");

        return $this;
    }

    /**
     * Feedback from this app about the store.
     */
    public function selectFeedback(?ShopifyAppFeedbackArgumentsObject $argsObject = null): ShopifyAppFeedbackQueryObject
    {
        $object = new ShopifyAppFeedbackQueryObject("feedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Handle of the app.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * Icon that represents the app.
     */
    public function selectIcon(?ShopifyAppIconArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("icon");
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
     * Webpage where you can install the app, if app requires explicit user permission.
     */
    public function selectInstallUrl(): static
    {
        $this->selectField("installUrl");

        return $this;
    }

    /**
     * Corresponding AppInstallation for this shop and App.
     * Returns null if the App isn't installed.
     */
    public function selectInstallation(?ShopifyAppInstallationArgumentsObject $argsObject = null): ShopifyAppInstallationQueryObject
    {
        $object = new ShopifyAppInstallationQueryObject("installation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the app is the [post purchase](https://shopify.dev/apps/checkout/post-purchase) app in use.
     */
    public function selectIsPostPurchaseAppInUse(): static
    {
        $this->selectField("isPostPurchaseAppInUse");

        return $this;
    }

    /**
     * Webpage that the app starts in.
     *
     * @deprecated Use AppInstallation.launchUrl instead
     */
    public function selectLaunchUrl(): static
    {
        $this->selectField("launchUrl");

        return $this;
    }

    /**
     * Menu items for the app, which also appear as submenu items in left navigation sidebar in the Shopify admin.
     *
     * @deprecated Use AppInstallation.navigationItems instead
     */
    public function selectNavigationItems(?ShopifyAppNavigationItemsArgumentsObject $argsObject = null): ShopifyNavigationItemQueryObject
    {
        $object = new ShopifyNavigationItemQueryObject("navigationItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The optional scopes requested by the app. Lists the optional access scopes the app has declared in its configuration. These scopes are optionally requested by the app after installation.
     */
    public function selectOptionalAccessScopes(?ShopifyAppOptionalAccessScopesArgumentsObject $argsObject = null): ShopifyAccessScopeQueryObject
    {
        $object = new ShopifyAccessScopeQueryObject("optionalAccessScopes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the app was previously installed on the current shop.
     */
    public function selectPreviouslyInstalled(): static
    {
        $this->selectField("previouslyInstalled");

        return $this;
    }

    /**
     * Detailed information about the app pricing.
     */
    public function selectPricingDetails(): static
    {
        $this->selectField("pricingDetails");

        return $this;
    }

    /**
     * Summary of the app pricing details.
     */
    public function selectPricingDetailsSummary(): static
    {
        $this->selectField("pricingDetailsSummary");

        return $this;
    }

    /**
     * Link to app privacy policy.
     */
    public function selectPrivacyPolicyUrl(): static
    {
        $this->selectField("privacyPolicyUrl");

        return $this;
    }

    /**
     * The public category for the app.
     */
    public function selectPublicCategory(): static
    {
        $this->selectField("publicCategory");

        return $this;
    }

    /**
     * Whether the app is published to the Shopify App Store.
     */
    public function selectPublished(): static
    {
        $this->selectField("published");

        return $this;
    }

    /**
     * The access scopes requested by the app. Lists the access scopes the app has declared in its configuration. Merchant must grant approval to these scopes for the app to be installed.
     */
    public function selectRequestedAccessScopes(?ShopifyAppRequestedAccessScopesArgumentsObject $argsObject = null): ShopifyAccessScopeQueryObject
    {
        $object = new ShopifyAccessScopeQueryObject("requestedAccessScopes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Screenshots of the app.
     */
    public function selectScreenshots(?ShopifyAppScreenshotsArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("screenshots");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the app was developed by Shopify.
     */
    public function selectShopifyDeveloped(): static
    {
        $this->selectField("shopifyDeveloped");

        return $this;
    }

    /**
     * Name of the app.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * Message that appears when the app is uninstalled. For example:
     * By removing this app, you will no longer be able to publish products to MySocialSite or view this app in your Shopify admin. You can re-enable this channel at any time.
     */
    public function selectUninstallMessage(): static
    {
        $this->selectField("uninstallMessage");

        return $this;
    }

    /**
     * Webpage where you can uninstall the app.
     *
     * @deprecated Use AppInstallation.uninstallUrl instead
     */
    public function selectUninstallUrl(): static
    {
        $this->selectField("uninstallUrl");

        return $this;
    }

    /**
     * The webhook API version for the app.
     */
    public function selectWebhookApiVersion(): static
    {
        $this->selectField("webhookApiVersion");

        return $this;
    }
}
