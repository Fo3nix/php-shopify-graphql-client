<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyProductFeed
{
    protected $channelId;
    protected $country;
    protected $id;
    protected $language;
    protected $status;

    
    /**
     * @return string
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    
    /**
     * @return ShopifyCountryCodeEnumObject
     */
    public function getCountry()
    {
        return $this->country;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyLanguageCodeEnumObject
     */
    public function getLanguage()
    {
        return $this->language;
    }

    
    /**
     * @return ShopifyProductFeedStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['channelId']) && $data['channelId'] !== null) {
                $instance->channelId = $data['channelId'];
            }
            if (isset($data['country']) && $data['country'] !== null) {
                $instance->country = $data['country'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['language']) && $data['language'] !== null) {
                $instance->language = $data['language'];
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->channelId !== null) {
                $data['channelId'] = $this->channelId;
            }
            if ($this->country !== null) {
                $data['country'] = $this->country;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->language !== null) {
                $data['language'] = $this->language;
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}
