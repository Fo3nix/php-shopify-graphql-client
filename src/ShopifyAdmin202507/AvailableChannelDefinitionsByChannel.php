<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ChannelDefinition;

class AvailableChannelDefinitionsByChannel
{
    protected $channelDefinitions;
    protected $channelName;

    
    /**
     * @return ChannelDefinition[]
     */
    public function getChannelDefinitions()
    {
        return $this->channelDefinitions;
    }

    
    /**
     * @return string
     */
    public function getChannelName()
    {
        return $this->channelName;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['channelDefinitions']) && $data['channelDefinitions'] !== null) {
                $instance->channelDefinitions = array_map(function($item) { return ChannelDefinition::fromArray($item); }, $data['channelDefinitions']);
            }
            if (isset($data['channelName']) && $data['channelName'] !== null) {
                $instance->channelName = $data['channelName'];
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
            if ($this->channelDefinitions !== null) {
                $data['channelDefinitions'] = array_map(function($item) { return $item->asArray(); }, $this->channelDefinitions);
            }
            if ($this->channelName !== null) {
                $data['channelName'] = $this->channelName;
            }
            return $data;
        }
}
