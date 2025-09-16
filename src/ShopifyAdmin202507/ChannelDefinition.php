<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ChannelDefinition
{
    protected $channelName;
    protected $handle;
    protected $id;
    protected $isMarketplace;
    protected $subChannelName;
    protected $svgIcon;

    
    /**
     * @return string
     */
    public function getChannelName()
    {
        return $this->channelName;
    }

    
    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return bool
     */
    public function getIsMarketplace()
    {
        return $this->isMarketplace;
    }

    
    /**
     * @return string
     */
    public function getSubChannelName()
    {
        return $this->subChannelName;
    }

    
    /**
     * @return string
     */
    public function getSvgIcon()
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
