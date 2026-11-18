<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * A product feed.
 */
class ShopifyProductFeed implements ShopifyNode
{
    protected $country;
    protected $id;
    protected $language;
    protected $status;

    
    /**
     * The country of the product feed.
     *
     * @return string A ShopifyCountryCodeEnumObject value
     */
    public function getCountry(): ?string
    {
        return $this->country;
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
     * The language of the product feed.
     *
     * @return string A ShopifyLanguageCodeEnumObject value
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    
    /**
     * The status of the product feed.
     *
     * @return string A ShopifyProductFeedStatusEnumObject value
     */
    public function getStatus(): ?string
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
