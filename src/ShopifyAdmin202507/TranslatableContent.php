<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class TranslatableContent
{
    protected $digest;
    protected $key;
    protected $locale;
    protected $type;
    protected $value;

    
    /**
     * @return string
     */
    public function getDigest()
    {
        return $this->digest;
    }

    
    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    
    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    
    /**
     * @return LocalizableContentTypeEnumObject
     */
    public function getType()
    {
        return $this->type;
    }

    
    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['digest']) && $data['digest'] !== null) {
                $instance->digest = $data['digest'];
            }
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['locale']) && $data['locale'] !== null) {
                $instance->locale = $data['locale'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = $data['value'];
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
            if ($this->digest !== null) {
                $data['digest'] = $this->digest;
            }
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->locale !== null) {
                $data['locale'] = $this->locale;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
