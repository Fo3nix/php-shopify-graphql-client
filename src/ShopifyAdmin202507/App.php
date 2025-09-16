<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AccessScope;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Image;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FailedRequirement;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppFeedback;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppInstallation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\NavigationItem;

class App
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
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    
    /**
     * @return string
     */
    public function getAppStoreAppUrl()
    {
        return $this->appStoreAppUrl;
    }

    
    /**
     * @return string
     */
    public function getAppStoreDeveloperUrl()
    {
        return $this->appStoreDeveloperUrl;
    }

    
    /**
     * @return AccessScope[]
     */
    public function getAvailableAccessScopes()
    {
        return $this->availableAccessScopes;
    }

    
    /**
     * @return Image
     */
    public function getBanner()
    {
        return $this->banner;
    }

    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * @return string
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }

    
    /**
     * @return AppDeveloperTypeEnumObject
     */
    public function getDeveloperType()
    {
        return $this->developerType;
    }

    
    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return $this->developerUrl;
    }

    
    /**
     * @return bool
     */
    public function getEmbedded()
    {
        return $this->embedded;
    }

    
    /**
     * @return FailedRequirement[]
     */
    public function getFailedRequirements()
    {
        return $this->failedRequirements;
    }

    
    /**
     * @return string[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    
    /**
     * @return AppFeedback
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    
    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    
    /**
     * @return Image
     */
    public function getIcon()
    {
        return $this->icon;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getInstallUrl()
    {
        return $this->installUrl;
    }

    
    /**
     * @return AppInstallation
     */
    public function getInstallation()
    {
        return $this->installation;
    }

    
    /**
     * @return bool
     */
    public function getIsPostPurchaseAppInUse()
    {
        return $this->isPostPurchaseAppInUse;
    }

    
    /**
     * @return string
     */
    public function getLaunchUrl()
    {
        return $this->launchUrl;
    }

    
    /**
     * @return NavigationItem[]
     */
    public function getNavigationItems()
    {
        return $this->navigationItems;
    }

    
    /**
     * @return AccessScope[]
     */
    public function getOptionalAccessScopes()
    {
        return $this->optionalAccessScopes;
    }

    
    /**
     * @return bool
     */
    public function getPreviouslyInstalled()
    {
        return $this->previouslyInstalled;
    }

    
    /**
     * @return string
     */
    public function getPricingDetails()
    {
        return $this->pricingDetails;
    }

    
    /**
     * @return string
     */
    public function getPricingDetailsSummary()
    {
        return $this->pricingDetailsSummary;
    }

    
    /**
     * @return string
     */
    public function getPrivacyPolicyUrl()
    {
        return $this->privacyPolicyUrl;
    }

    
    /**
     * @return AppPublicCategoryEnumObject
     */
    public function getPublicCategory()
    {
        return $this->publicCategory;
    }

    
    /**
     * @return bool
     */
    public function getPublished()
    {
        return $this->published;
    }

    
    /**
     * @return AccessScope[]
     */
    public function getRequestedAccessScopes()
    {
        return $this->requestedAccessScopes;
    }

    
    /**
     * @return Image[]
     */
    public function getScreenshots()
    {
        return $this->screenshots;
    }

    
    /**
     * @return bool
     */
    public function getShopifyDeveloped()
    {
        return $this->shopifyDeveloped;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return string
     */
    public function getUninstallMessage()
    {
        return $this->uninstallMessage;
    }

    
    /**
     * @return string
     */
    public function getUninstallUrl()
    {
        return $this->uninstallUrl;
    }

    
    /**
     * @return string
     */
    public function getWebhookApiVersion()
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
                $instance->availableAccessScopes = array_map(function($item) { return AccessScope::fromArray($item); }, $data['availableAccessScopes']);
            }
            if (isset($data['banner']) && $data['banner'] !== null) {
                $instance->banner = Image::fromArray($data['banner']);
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
                $instance->failedRequirements = array_map(function($item) { return FailedRequirement::fromArray($item); }, $data['failedRequirements']);
            }
            if (isset($data['features']) && $data['features'] !== null) {
                $instance->features = $data['features'];
            }
            if (isset($data['feedback']) && $data['feedback'] !== null) {
                $instance->feedback = AppFeedback::fromArray($data['feedback']);
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['icon']) && $data['icon'] !== null) {
                $instance->icon = Image::fromArray($data['icon']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['installUrl']) && $data['installUrl'] !== null) {
                $instance->installUrl = $data['installUrl'];
            }
            if (isset($data['installation']) && $data['installation'] !== null) {
                $instance->installation = AppInstallation::fromArray($data['installation']);
            }
            if (isset($data['isPostPurchaseAppInUse']) && $data['isPostPurchaseAppInUse'] !== null) {
                $instance->isPostPurchaseAppInUse = $data['isPostPurchaseAppInUse'];
            }
            if (isset($data['launchUrl']) && $data['launchUrl'] !== null) {
                $instance->launchUrl = $data['launchUrl'];
            }
            if (isset($data['navigationItems']) && $data['navigationItems'] !== null) {
                $instance->navigationItems = array_map(function($item) { return NavigationItem::fromArray($item); }, $data['navigationItems']);
            }
            if (isset($data['optionalAccessScopes']) && $data['optionalAccessScopes'] !== null) {
                $instance->optionalAccessScopes = array_map(function($item) { return AccessScope::fromArray($item); }, $data['optionalAccessScopes']);
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
                $instance->requestedAccessScopes = array_map(function($item) { return AccessScope::fromArray($item); }, $data['requestedAccessScopes']);
            }
            if (isset($data['screenshots']) && $data['screenshots'] !== null) {
                $instance->screenshots = array_map(function($item) { return Image::fromArray($item); }, $data['screenshots']);
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
