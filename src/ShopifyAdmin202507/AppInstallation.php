<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AccessScope;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppSubscription;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppSubscriptionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\App;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Channel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppCreditConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppPurchaseOneTimeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Publication;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppRevenueAttributionRecordConnection;

class AppInstallation
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
     * @return AccessScope[]
     */
    public function getAccessScopes()
    {
        return $this->accessScopes;
    }

    
    /**
     * @return AppSubscription[]
     */
    public function getActiveSubscriptions()
    {
        return $this->activeSubscriptions;
    }

    
    /**
     * @return AppSubscriptionConnection
     */
    public function getAllSubscriptions()
    {
        return $this->allSubscriptions;
    }

    
    /**
     * @return App
     */
    public function getApp()
    {
        return $this->app;
    }

    
    /**
     * @return Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    
    /**
     * @return AppCreditConnection
     */
    public function getCredits()
    {
        return $this->credits;
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
    public function getLaunchUrl()
    {
        return $this->launchUrl;
    }

    
    /**
     * @return Metafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return MetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return AppPurchaseOneTimeConnection
     */
    public function getOneTimePurchases()
    {
        return $this->oneTimePurchases;
    }

    
    /**
     * @return Publication
     */
    public function getPublication()
    {
        return $this->publication;
    }

    
    /**
     * @return AppRevenueAttributionRecordConnection
     */
    public function getRevenueAttributionRecords()
    {
        return $this->revenueAttributionRecords;
    }

    
    /**
     * @return AppSubscription[]
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    
    /**
     * @return string
     */
    public function getUninstallUrl()
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
                $instance->accessScopes = array_map(function($item) { return AccessScope::fromArray($item); }, $data['accessScopes']);
            }
            if (isset($data['activeSubscriptions']) && $data['activeSubscriptions'] !== null) {
                $instance->activeSubscriptions = array_map(function($item) { return AppSubscription::fromArray($item); }, $data['activeSubscriptions']);
            }
            if (isset($data['allSubscriptions']) && $data['allSubscriptions'] !== null) {
                $instance->allSubscriptions = AppSubscriptionConnection::fromArray($data['allSubscriptions']);
            }
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = App::fromArray($data['app']);
            }
            if (isset($data['channel']) && $data['channel'] !== null) {
                $instance->channel = Channel::fromArray($data['channel']);
            }
            if (isset($data['credits']) && $data['credits'] !== null) {
                $instance->credits = AppCreditConnection::fromArray($data['credits']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['launchUrl']) && $data['launchUrl'] !== null) {
                $instance->launchUrl = $data['launchUrl'];
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = Metafield::fromArray($data['metafield']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = MetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['oneTimePurchases']) && $data['oneTimePurchases'] !== null) {
                $instance->oneTimePurchases = AppPurchaseOneTimeConnection::fromArray($data['oneTimePurchases']);
            }
            if (isset($data['publication']) && $data['publication'] !== null) {
                $instance->publication = Publication::fromArray($data['publication']);
            }
            if (isset($data['revenueAttributionRecords']) && $data['revenueAttributionRecords'] !== null) {
                $instance->revenueAttributionRecords = AppRevenueAttributionRecordConnection::fromArray($data['revenueAttributionRecords']);
            }
            if (isset($data['subscriptions']) && $data['subscriptions'] !== null) {
                $instance->subscriptions = array_map(function($item) { return AppSubscription::fromArray($item); }, $data['subscriptions']);
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
