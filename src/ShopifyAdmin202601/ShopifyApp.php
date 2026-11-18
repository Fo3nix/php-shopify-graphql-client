<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAccessScope;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyFailedRequirement;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAppFeedback;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAppInstallation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyNavigationItem;

/**
 * A Shopify application that extends store functionality. Apps integrate with Shopify through APIs to add features, automate workflows, or connect external services.
 *
 * Provides metadata about the app including its developer information and listing details in the Shopify App Store. Use the [`installation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App#field-App.fields.installation) field to determine if the app is currently installed on the shop and access installation-specific details like granted [`AccessScope`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AccessScope) objects. Check [`failedRequirements`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App#field-App.fields.failedRequirements) before installation to identify any prerequisites that must be met.
 */
class ShopifyApp implements ShopifyNode
{
    protected $apiKey;
    protected $appStoreAppUrl;
    protected $appStoreDeveloperUrl;
    protected $availableAccessScopes;
    protected $banner;
    protected $description;
    protected $developerName;
    protected $developerType;
    protected $developerUrl;
    protected $embedded;
    protected $failedRequirements;
    protected $features;
    protected $feedback;
    protected $handle;
    protected $icon;
    protected $id;
    protected $installUrl;
    protected $installation;
    protected $isPostPurchaseAppInUse;
    protected $launchUrl;
    protected $navigationItems;
    protected $optionalAccessScopes;
    protected $previouslyInstalled;
    protected $pricingDetails;
    protected $pricingDetailsSummary;
    protected $privacyPolicyUrl;
    protected $publicCategory;
    protected $published;
    protected $requestedAccessScopes;
    protected $screenshots;
    protected $shopifyDeveloped;
    protected $title;
    protected $uninstallMessage;
    protected $uninstallUrl;
    protected $webhookApiVersion;

    
    /**
     * A unique application API identifier.
     *
     * @return string
     */
    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    
    /**
     * App store page URL of the app.
     *
     * @return string
     */
    public function getAppStoreAppUrl(): mixed
    {
        return $this->appStoreAppUrl;
    }

    
    /**
     * App store page URL of the developer who created the app.
     *
     * @return string
     */
    public function getAppStoreDeveloperUrl(): mixed
    {
        return $this->appStoreDeveloperUrl;
    }

    
    /**
     * All requestable access scopes available to the app.
     *
     * @return ShopifyAccessScope[]
     */
    public function getAvailableAccessScopes(): ?array
    {
        return $this->availableAccessScopes;
    }

    
    /**
     * Banner image for the app.
     *
     * @return ShopifyImage
     */
    public function getBanner(): ?ShopifyImage
    {
        return $this->banner;
    }

    
    /**
     * Description of the app.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The name of the app developer.
     *
     * @return string
     */
    public function getDeveloperName(): ?string
    {
        return $this->developerName;
    }

    
    /**
     * The type of app developer.
     *
     * @return string A ShopifyAppDeveloperTypeEnumObject value
     */
    public function getDeveloperType(): ?string
    {
        return $this->developerType;
    }

    
    /**
     * Website of the developer who created the app.
     *
     * @return string
     */
    public function getDeveloperUrl(): mixed
    {
        return $this->developerUrl;
    }

    
    /**
     * Whether the app uses the Embedded App SDK.
     *
     * @return bool
     */
    public function getEmbedded(): ?bool
    {
        return $this->embedded;
    }

    
    /**
     * Requirements that must be met before the app can be installed.
     *
     * @return ShopifyFailedRequirement[]
     */
    public function getFailedRequirements(): ?array
    {
        return $this->failedRequirements;
    }

    
    /**
     * A list of app features that are shown in the Shopify App Store listing.
     *
     * @return string[]
     */
    public function getFeatures(): ?array
    {
        return $this->features;
    }

    
    /**
     * Feedback from this app about the store.
     *
     * @return ShopifyAppFeedback
     */
    public function getFeedback(): ?ShopifyAppFeedback
    {
        return $this->feedback;
    }

    
    /**
     * Handle of the app.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * Icon that represents the app.
     *
     * @return ShopifyImage
     */
    public function getIcon(): ?ShopifyImage
    {
        return $this->icon;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Webpage where you can install the app, if app requires explicit user permission.
     *
     * @return string
     */
    public function getInstallUrl(): mixed
    {
        return $this->installUrl;
    }

    
    /**
     * Corresponding AppInstallation for this shop and App.
     * Returns null if the App isn't installed.
     *
     * @return ShopifyAppInstallation
     */
    public function getInstallation(): ?ShopifyAppInstallation
    {
        return $this->installation;
    }

    
    /**
     * Whether the app is the [post purchase](https://shopify.dev/apps/checkout/post-purchase) app in use.
     *
     * @return bool
     */
    public function getIsPostPurchaseAppInUse(): ?bool
    {
        return $this->isPostPurchaseAppInUse;
    }

    
    /**
     * Webpage that the app starts in.
     *
     * @return string
     */
    public function getLaunchUrl(): mixed
    {
        return $this->launchUrl;
    }

    
    /**
     * Menu items for the app, which also appear as submenu items in left navigation sidebar in the Shopify admin.
     *
     * @return ShopifyNavigationItem[]
     */
    public function getNavigationItems(): ?array
    {
        return $this->navigationItems;
    }

    
    /**
     * The optional scopes requested by the app. Lists the optional access scopes the app has declared in its configuration. These scopes are optionally requested by the app after installation.
     *
     * @return ShopifyAccessScope[]
     */
    public function getOptionalAccessScopes(): ?array
    {
        return $this->optionalAccessScopes;
    }

    
    /**
     * Whether the app was previously installed on the current shop.
     *
     * @return bool
     */
    public function getPreviouslyInstalled(): ?bool
    {
        return $this->previouslyInstalled;
    }

    
    /**
     * Detailed information about the app pricing.
     *
     * @return string
     */
    public function getPricingDetails(): ?string
    {
        return $this->pricingDetails;
    }

    
    /**
     * Summary of the app pricing details.
     *
     * @return string
     */
    public function getPricingDetailsSummary(): ?string
    {
        return $this->pricingDetailsSummary;
    }

    
    /**
     * Link to app privacy policy.
     *
     * @return string
     */
    public function getPrivacyPolicyUrl(): mixed
    {
        return $this->privacyPolicyUrl;
    }

    
    /**
     * The public category for the app.
     *
     * @return string A ShopifyAppPublicCategoryEnumObject value
     */
    public function getPublicCategory(): ?string
    {
        return $this->publicCategory;
    }

    
    /**
     * Whether the app is published to the Shopify App Store.
     *
     * @return bool
     */
    public function getPublished(): ?bool
    {
        return $this->published;
    }

    
    /**
     * The access scopes requested by the app. Lists the access scopes the app has declared in its configuration. Merchant must grant approval to these scopes for the app to be installed.
     *
     * @return ShopifyAccessScope[]
     */
    public function getRequestedAccessScopes(): ?array
    {
        return $this->requestedAccessScopes;
    }

    
    /**
     * Screenshots of the app.
     *
     * @return ShopifyImage[]
     */
    public function getScreenshots(): ?array
    {
        return $this->screenshots;
    }

    
    /**
     * Whether the app was developed by Shopify.
     *
     * @return bool
     */
    public function getShopifyDeveloped(): ?bool
    {
        return $this->shopifyDeveloped;
    }

    
    /**
     * Name of the app.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * Message that appears when the app is uninstalled. For example:
     * By removing this app, you will no longer be able to publish products to MySocialSite or view this app in your Shopify admin. You can re-enable this channel at any time.
     *
     * @return string
     */
    public function getUninstallMessage(): ?string
    {
        return $this->uninstallMessage;
    }

    
    /**
     * Webpage where you can uninstall the app.
     *
     * @return string
     */
    public function getUninstallUrl(): mixed
    {
        return $this->uninstallUrl;
    }

    
    /**
     * The webhook API version for the app.
     *
     * @return string
     */
    public function getWebhookApiVersion(): ?string
    {
        return $this->webhookApiVersion;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['apiKey']) && $data['apiKey'] !== null) {
                $instance->apiKey = $data['apiKey'];
            }
            if (isset($data['appStoreAppUrl']) && $data['appStoreAppUrl'] !== null) {
                $instance->appStoreAppUrl = $data['appStoreAppUrl'];
            }
            if (isset($data['appStoreDeveloperUrl']) && $data['appStoreDeveloperUrl'] !== null) {
                $instance->appStoreDeveloperUrl = $data['appStoreDeveloperUrl'];
            }
            if (isset($data['availableAccessScopes']) && $data['availableAccessScopes'] !== null) {
                $instance->availableAccessScopes = array_map(function($item) { return ShopifyAccessScope::fromArray($item); }, $data['availableAccessScopes']);
            }
            if (isset($data['banner']) && $data['banner'] !== null) {
                $instance->banner = ShopifyImage::fromArray($data['banner']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['developerName']) && $data['developerName'] !== null) {
                $instance->developerName = $data['developerName'];
            }
            if (isset($data['developerType']) && $data['developerType'] !== null) {
                $instance->developerType = $data['developerType'];
            }
            if (isset($data['developerUrl']) && $data['developerUrl'] !== null) {
                $instance->developerUrl = $data['developerUrl'];
            }
            if (isset($data['embedded']) && $data['embedded'] !== null) {
                $instance->embedded = $data['embedded'];
            }
            if (isset($data['failedRequirements']) && $data['failedRequirements'] !== null) {
                $instance->failedRequirements = array_map(function($item) { return ShopifyFailedRequirement::fromArray($item); }, $data['failedRequirements']);
            }
            if (isset($data['features']) && $data['features'] !== null) {
                $instance->features = $data['features'];
            }
            if (isset($data['feedback']) && $data['feedback'] !== null) {
                $instance->feedback = ShopifyAppFeedback::fromArray($data['feedback']);
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['icon']) && $data['icon'] !== null) {
                $instance->icon = ShopifyImage::fromArray($data['icon']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['installUrl']) && $data['installUrl'] !== null) {
                $instance->installUrl = $data['installUrl'];
            }
            if (isset($data['installation']) && $data['installation'] !== null) {
                $instance->installation = ShopifyAppInstallation::fromArray($data['installation']);
            }
            if (isset($data['isPostPurchaseAppInUse']) && $data['isPostPurchaseAppInUse'] !== null) {
                $instance->isPostPurchaseAppInUse = $data['isPostPurchaseAppInUse'];
            }
            if (isset($data['launchUrl']) && $data['launchUrl'] !== null) {
                $instance->launchUrl = $data['launchUrl'];
            }
            if (isset($data['navigationItems']) && $data['navigationItems'] !== null) {
                $instance->navigationItems = array_map(function($item) { return ShopifyNavigationItem::fromArray($item); }, $data['navigationItems']);
            }
            if (isset($data['optionalAccessScopes']) && $data['optionalAccessScopes'] !== null) {
                $instance->optionalAccessScopes = array_map(function($item) { return ShopifyAccessScope::fromArray($item); }, $data['optionalAccessScopes']);
            }
            if (isset($data['previouslyInstalled']) && $data['previouslyInstalled'] !== null) {
                $instance->previouslyInstalled = $data['previouslyInstalled'];
            }
            if (isset($data['pricingDetails']) && $data['pricingDetails'] !== null) {
                $instance->pricingDetails = $data['pricingDetails'];
            }
            if (isset($data['pricingDetailsSummary']) && $data['pricingDetailsSummary'] !== null) {
                $instance->pricingDetailsSummary = $data['pricingDetailsSummary'];
            }
            if (isset($data['privacyPolicyUrl']) && $data['privacyPolicyUrl'] !== null) {
                $instance->privacyPolicyUrl = $data['privacyPolicyUrl'];
            }
            if (isset($data['publicCategory']) && $data['publicCategory'] !== null) {
                $instance->publicCategory = $data['publicCategory'];
            }
            if (isset($data['published']) && $data['published'] !== null) {
                $instance->published = $data['published'];
            }
            if (isset($data['requestedAccessScopes']) && $data['requestedAccessScopes'] !== null) {
                $instance->requestedAccessScopes = array_map(function($item) { return ShopifyAccessScope::fromArray($item); }, $data['requestedAccessScopes']);
            }
            if (isset($data['screenshots']) && $data['screenshots'] !== null) {
                $instance->screenshots = array_map(function($item) { return ShopifyImage::fromArray($item); }, $data['screenshots']);
            }
            if (isset($data['shopifyDeveloped']) && $data['shopifyDeveloped'] !== null) {
                $instance->shopifyDeveloped = $data['shopifyDeveloped'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['uninstallMessage']) && $data['uninstallMessage'] !== null) {
                $instance->uninstallMessage = $data['uninstallMessage'];
            }
            if (isset($data['uninstallUrl']) && $data['uninstallUrl'] !== null) {
                $instance->uninstallUrl = $data['uninstallUrl'];
            }
            if (isset($data['webhookApiVersion']) && $data['webhookApiVersion'] !== null) {
                $instance->webhookApiVersion = $data['webhookApiVersion'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->apiKey !== null) {
                $data['apiKey'] = $this->apiKey;
            }
            if ($this->appStoreAppUrl !== null) {
                $data['appStoreAppUrl'] = $this->appStoreAppUrl;
            }
            if ($this->appStoreDeveloperUrl !== null) {
                $data['appStoreDeveloperUrl'] = $this->appStoreDeveloperUrl;
            }
            if ($this->availableAccessScopes !== null) {
                $data['availableAccessScopes'] = array_map(function($item) { return $item->asArray(); }, $this->availableAccessScopes);
            }
            if ($this->banner !== null) {
                $data['banner'] = $this->banner->asArray();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->developerName !== null) {
                $data['developerName'] = $this->developerName;
            }
            if ($this->developerType !== null) {
                $data['developerType'] = $this->developerType;
            }
            if ($this->developerUrl !== null) {
                $data['developerUrl'] = $this->developerUrl;
            }
            if ($this->embedded !== null) {
                $data['embedded'] = $this->embedded;
            }
            if ($this->failedRequirements !== null) {
                $data['failedRequirements'] = array_map(function($item) { return $item->asArray(); }, $this->failedRequirements);
            }
            if ($this->features !== null) {
                $data['features'] = $this->features;
            }
            if ($this->feedback !== null) {
                $data['feedback'] = $this->feedback->asArray();
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->icon !== null) {
                $data['icon'] = $this->icon->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->installUrl !== null) {
                $data['installUrl'] = $this->installUrl;
            }
            if ($this->installation !== null) {
                $data['installation'] = $this->installation->asArray();
            }
            if ($this->isPostPurchaseAppInUse !== null) {
                $data['isPostPurchaseAppInUse'] = $this->isPostPurchaseAppInUse;
            }
            if ($this->launchUrl !== null) {
                $data['launchUrl'] = $this->launchUrl;
            }
            if ($this->navigationItems !== null) {
                $data['navigationItems'] = array_map(function($item) { return $item->asArray(); }, $this->navigationItems);
            }
            if ($this->optionalAccessScopes !== null) {
                $data['optionalAccessScopes'] = array_map(function($item) { return $item->asArray(); }, $this->optionalAccessScopes);
            }
            if ($this->previouslyInstalled !== null) {
                $data['previouslyInstalled'] = $this->previouslyInstalled;
            }
            if ($this->pricingDetails !== null) {
                $data['pricingDetails'] = $this->pricingDetails;
            }
            if ($this->pricingDetailsSummary !== null) {
                $data['pricingDetailsSummary'] = $this->pricingDetailsSummary;
            }
            if ($this->privacyPolicyUrl !== null) {
                $data['privacyPolicyUrl'] = $this->privacyPolicyUrl;
            }
            if ($this->publicCategory !== null) {
                $data['publicCategory'] = $this->publicCategory;
            }
            if ($this->published !== null) {
                $data['published'] = $this->published;
            }
            if ($this->requestedAccessScopes !== null) {
                $data['requestedAccessScopes'] = array_map(function($item) { return $item->asArray(); }, $this->requestedAccessScopes);
            }
            if ($this->screenshots !== null) {
                $data['screenshots'] = array_map(function($item) { return $item->asArray(); }, $this->screenshots);
            }
            if ($this->shopifyDeveloped !== null) {
                $data['shopifyDeveloped'] = $this->shopifyDeveloped;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->uninstallMessage !== null) {
                $data['uninstallMessage'] = $this->uninstallMessage;
            }
            if ($this->uninstallUrl !== null) {
                $data['uninstallUrl'] = $this->uninstallUrl;
            }
            if ($this->webhookApiVersion !== null) {
                $data['webhookApiVersion'] = $this->webhookApiVersion;
            }
            return $data;
        }
}
