<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyChannelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;

/**
 * A condition checking the channel that the visitor is shopping from.
 */
class ShopifyChannelsCondition
{
    protected $applicationLevel;
    protected $channels;
    protected $channelsCount;

    
    /**
     * The application level for the condition.
     *
     * @return string A ShopifyMarketConditionApplicationTypeEnumObject value
     */
    public function getApplicationLevel(): ?string
    {
        return $this->applicationLevel;
    }

    
    /**
     * The channels that comprise the market.
     *
     * @return ShopifyChannelConnection
     */
    public function getChannels(): ?ShopifyChannelConnection
    {
        return $this->channels;
    }

    
    /**
     * The total number of channels condition.
     *
     * @return ShopifyCount
     */
    public function getChannelsCount(): ?ShopifyCount
    {
        return $this->channelsCount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['applicationLevel']) && $data['applicationLevel'] !== null) {
                $instance->applicationLevel = $data['applicationLevel'];
            }
            if (isset($data['channels']) && $data['channels'] !== null) {
                $instance->channels = ShopifyChannelConnection::fromArray($data['channels']);
            }
            if (isset($data['channelsCount']) && $data['channelsCount'] !== null) {
                $instance->channelsCount = ShopifyCount::fromArray($data['channelsCount']);
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
            if ($this->applicationLevel !== null) {
                $data['applicationLevel'] = $this->applicationLevel;
            }
            if ($this->channels !== null) {
                $data['channels'] = $this->channels->asArray();
            }
            if ($this->channelsCount !== null) {
                $data['channelsCount'] = $this->channelsCount->asArray();
            }
            return $data;
        }
}
