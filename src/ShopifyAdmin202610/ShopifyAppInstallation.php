<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAccessScope;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAppSubscription;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAppSubscriptionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyChannel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAppCreditConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAppPurchaseOneTimeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPublication;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAppRevenueAttributionRecordConnection;

/**
 * An app installed on a shop. Each installation tracks the permissions granted to the app through [`AccessScope`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AccessScope) objects, along with billing subscriptions and [`Metafield`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metafield) objects.
 *
 * The installation provides metafields that only the owning [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) can access. These metafields store app-specific configuration that merchants and other apps can't modify. The installation also provides URLs for launching and uninstalling the app, along with any active [`AppSubscription`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppSubscription) objects or [`AppPurchaseOneTime`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppPurchaseOneTime) purchases.
 */
class ShopifyAppInstallation implements ShopifyHasMetafields, ShopifyNode
{
    protected $accessScopes;
    protected $activeSubscriptions;
    protected $allSubscriptions;
    protected $app;
    protected $channel;
    protected $credits;
    protected $id;
    protected $launchUrl;
    protected $metafield;
    protected $metafields;
    protected $oneTimePurchases;
    protected $publication;
    protected $revenueAttributionRecords;
    protected $subscriptions;
    protected $uninstallUrl;

    
    /**
     * The access scopes granted to the application by a merchant during installation.
     *
     * @return ShopifyAccessScope[]
     */
    public function getAccessScopes(): ?array
    {
        return $this->accessScopes;
    }

    
    /**
     * The active application subscriptions billed to the shop on a recurring basis.
     *
     * @return ShopifyAppSubscription[]
     */
    public function getActiveSubscriptions(): ?array
    {
        return $this->activeSubscriptions;
    }

    
    /**
     * All subscriptions created for a shop.
     *
     * @return ShopifyAppSubscriptionConnection
     */
    public function getAllSubscriptions(): ?ShopifyAppSubscriptionConnection
    {
        return $this->allSubscriptions;
    }

    
    /**
     * Application which is installed.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * Channel associated with the installed application.
     *
     * @return ShopifyChannel
     */
    public function getChannel(): ?ShopifyChannel
    {
        return $this->channel;
    }

    
    /**
     * Credits that can be used towards future app purchases.
     *
     * @return ShopifyAppCreditConnection
     */
    public function getCredits(): ?ShopifyAppCreditConnection
    {
        return $this->credits;
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
     * The URL to launch the application.
     *
     * @return string
     */
    public function getLaunchUrl(): mixed
    {
        return $this->launchUrl;
    }

    
    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield
    {
        return $this->metafield;
    }

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

    
    /**
     * One-time purchases to a shop.
     *
     * @return ShopifyAppPurchaseOneTimeConnection
     */
    public function getOneTimePurchases(): ?ShopifyAppPurchaseOneTimeConnection
    {
        return $this->oneTimePurchases;
    }

    
    /**
     * The publication associated with the installed application.
     *
     * @return ShopifyPublication
     */
    public function getPublication(): ?ShopifyPublication
    {
        return $this->publication;
    }

    
    /**
     * The records that track the externally-captured revenue for the app. The records are used for revenue attribution purposes.
     *
     * @return ShopifyAppRevenueAttributionRecordConnection
     */
    public function getRevenueAttributionRecords(): ?ShopifyAppRevenueAttributionRecordConnection
    {
        return $this->revenueAttributionRecords;
    }

    
    /**
     * Subscriptions charge to a shop on a recurring basis.
     *
     * @return ShopifyAppSubscription[]
     */
    public function getSubscriptions(): ?array
    {
        return $this->subscriptions;
    }

    
    /**
     * The URL to uninstall the application.
     *
     * @return string
     */
    public function getUninstallUrl(): mixed
    {
        return $this->uninstallUrl;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accessScopes']) && $data['accessScopes'] !== null) {
                $instance->accessScopes = array_map(function($item) { return ShopifyAccessScope::fromArray($item); }, $data['accessScopes']);
            }
            if (isset($data['activeSubscriptions']) && $data['activeSubscriptions'] !== null) {
                $instance->activeSubscriptions = array_map(function($item) { return ShopifyAppSubscription::fromArray($item); }, $data['activeSubscriptions']);
            }
            if (isset($data['allSubscriptions']) && $data['allSubscriptions'] !== null) {
                $instance->allSubscriptions = ShopifyAppSubscriptionConnection::fromArray($data['allSubscriptions']);
            }
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['channel']) && $data['channel'] !== null) {
                $instance->channel = ShopifyChannel::fromArray($data['channel']);
            }
            if (isset($data['credits']) && $data['credits'] !== null) {
                $instance->credits = ShopifyAppCreditConnection::fromArray($data['credits']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['launchUrl']) && $data['launchUrl'] !== null) {
                $instance->launchUrl = $data['launchUrl'];
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['oneTimePurchases']) && $data['oneTimePurchases'] !== null) {
                $instance->oneTimePurchases = ShopifyAppPurchaseOneTimeConnection::fromArray($data['oneTimePurchases']);
            }
            if (isset($data['publication']) && $data['publication'] !== null) {
                $instance->publication = ShopifyPublication::fromArray($data['publication']);
            }
            if (isset($data['revenueAttributionRecords']) && $data['revenueAttributionRecords'] !== null) {
                $instance->revenueAttributionRecords = ShopifyAppRevenueAttributionRecordConnection::fromArray($data['revenueAttributionRecords']);
            }
            if (isset($data['subscriptions']) && $data['subscriptions'] !== null) {
                $instance->subscriptions = array_map(function($item) { return ShopifyAppSubscription::fromArray($item); }, $data['subscriptions']);
            }
            if (isset($data['uninstallUrl']) && $data['uninstallUrl'] !== null) {
                $instance->uninstallUrl = $data['uninstallUrl'];
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
            if ($this->accessScopes !== null) {
                $data['accessScopes'] = array_map(function($item) { return $item->asArray(); }, $this->accessScopes);
            }
            if ($this->activeSubscriptions !== null) {
                $data['activeSubscriptions'] = array_map(function($item) { return $item->asArray(); }, $this->activeSubscriptions);
            }
            if ($this->allSubscriptions !== null) {
                $data['allSubscriptions'] = $this->allSubscriptions->asArray();
            }
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->channel !== null) {
                $data['channel'] = $this->channel->asArray();
            }
            if ($this->credits !== null) {
                $data['credits'] = $this->credits->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->launchUrl !== null) {
                $data['launchUrl'] = $this->launchUrl;
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->oneTimePurchases !== null) {
                $data['oneTimePurchases'] = $this->oneTimePurchases->asArray();
            }
            if ($this->publication !== null) {
                $data['publication'] = $this->publication->asArray();
            }
            if ($this->revenueAttributionRecords !== null) {
                $data['revenueAttributionRecords'] = $this->revenueAttributionRecords->asArray();
            }
            if ($this->subscriptions !== null) {
                $data['subscriptions'] = array_map(function($item) { return $item->asArray(); }, $this->subscriptions);
            }
            if ($this->uninstallUrl !== null) {
                $data['uninstallUrl'] = $this->uninstallUrl;
            }
            return $data;
        }
}
