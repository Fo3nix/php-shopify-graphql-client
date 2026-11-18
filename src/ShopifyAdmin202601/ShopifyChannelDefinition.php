<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * A specific selling surface within a [sales channel](https://shopify.dev/docs/apps/build/sales-channels) platform. A channel definition identifies where products can be sold. Definitions can represent entire platforms (like Facebook or TikTok) or specific sales channels within those platforms, such as Instagram Shops, Instagram Shopping, or TikTok Live.
 *
 * Each definition includes the parent [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel) name and subchannel name to indicate the selling surface hierarchy.
 */
class ShopifyChannelDefinition implements ShopifyNode
{
    protected $channelName;
    protected $handle;
    protected $id;
    protected $isMarketplace;
    protected $subChannelName;
    protected $svgIcon;

    
    /**
     * Name of the channel that this sub channel belongs to.
     *
     * @return string
     */
    public function getChannelName(): ?string
    {
        return $this->channelName;
    }

    
    /**
     * Unique string used as a public identifier for the channel definition.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * The unique ID for the channel definition.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Whether this channel definition represents a marketplace.
     *
     * @return bool
     */
    public function getIsMarketplace(): ?bool
    {
        return $this->isMarketplace;
    }

    
    /**
     * Name of the sub channel (e.g. Online Store, Instagram Shopping, TikTok Live).
     *
     * @return string
     */
    public function getSubChannelName(): ?string
    {
        return $this->subChannelName;
    }

    
    /**
     * Icon displayed when showing the channel in admin.
     *
     * @return string
     */
    public function getSvgIcon(): ?string
    {
        return $this->svgIcon;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['channelName']) && $data['channelName'] !== null) {
                $instance->channelName = $data['channelName'];
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['isMarketplace']) && $data['isMarketplace'] !== null) {
                $instance->isMarketplace = $data['isMarketplace'];
            }
            if (isset($data['subChannelName']) && $data['subChannelName'] !== null) {
                $instance->subChannelName = $data['subChannelName'];
            }
            if (isset($data['svgIcon']) && $data['svgIcon'] !== null) {
                $instance->svgIcon = $data['svgIcon'];
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
            if ($this->channelName !== null) {
                $data['channelName'] = $this->channelName;
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->isMarketplace !== null) {
                $data['isMarketplace'] = $this->isMarketplace;
            }
            if ($this->subChannelName !== null) {
                $data['subChannelName'] = $this->subChannelName;
            }
            if ($this->svgIcon !== null) {
                $data['svgIcon'] = $this->svgIcon;
            }
            return $data;
        }
}
