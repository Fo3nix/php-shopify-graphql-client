<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyChannelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCount;

class ShopifyChannelsCondition
{
    protected $applicationLevel;
    protected $channels;
    protected $channelsCount;

    
    /**
     * @return ShopifyMarketConditionApplicationTypeEnumObject
     */
    public function getApplicationLevel()
    {
        return $this->applicationLevel;
    }

    
    /**
     * @return ShopifyChannelConnection
     */
    public function getChannels()
    {
        return $this->channels;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getChannelsCount()
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
