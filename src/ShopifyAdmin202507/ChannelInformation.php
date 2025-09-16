<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\App;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ChannelDefinition;

class ChannelInformation
{
    protected $app;
    protected $channelDefinition;
    protected $channelId;
    protected $displayName;
    protected $id;

    
    /**
     * @return App
     */
    public function getApp()
    {
        return $this->app;
    }

    
    /**
     * @return ChannelDefinition
     */
    public function getChannelDefinition()
    {
        return $this->channelDefinition;
    }

    
    /**
     * @return string
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    
    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    
    /**
     * @return string
     */
    public function getId()
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
                $instance->app = App::fromArray($data['app']);
            }
            if (isset($data['channelDefinition']) && $data['channelDefinition'] !== null) {
                $instance->channelDefinition = ChannelDefinition::fromArray($data['channelDefinition']);
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
