<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyChannelDefinition;

/**
 * Identifies the [sales channel](https://shopify.dev/docs/apps/build/sales-channels) and [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) from which an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) originated. Provides attribution details such as the specific platform (Facebook Marketplace, Instagram Shopping) or marketplace where the order was placed.
 *
 * Links to the app that manages the channel and optional [`ChannelDefinition`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ChannelDefinition) details that specify the exact sub-channel or selling surface.
 */
class ShopifyChannelInformation implements ShopifyNode
{
    protected $app;
    protected $channelDefinition;
    protected $channelId;
    protected $displayName;
    protected $id;

    
    /**
     * The app associated with the channel.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * The channel definition associated with the channel.
     *
     * @return ShopifyChannelDefinition
     */
    public function getChannelDefinition(): ?ShopifyChannelDefinition
    {
        return $this->channelDefinition;
    }

    
    /**
     * The unique ID for the channel.
     *
     * @return string
     */
    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    
    /**
     * The publishing destination display name or channel name.
     *
     * @return string
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['channelDefinition']) && $data['channelDefinition'] !== null) {
                $instance->channelDefinition = ShopifyChannelDefinition::fromArray($data['channelDefinition']);
            }
            if (isset($data['channelId']) && $data['channelId'] !== null) {
                $instance->channelId = $data['channelId'];
            }
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
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
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->channelDefinition !== null) {
                $data['channelDefinition'] = $this->channelDefinition->asArray();
            }
            if ($this->channelId !== null) {
                $data['channelId'] = $this->channelId;
            }
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            return $data;
        }
}
