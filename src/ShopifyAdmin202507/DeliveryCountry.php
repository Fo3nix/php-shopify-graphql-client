<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryCountryCodeOrRestOfWorld;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryProvince;

class DeliveryCountry
{
    protected $code;
    protected $id;
    protected $name;
    protected $provinces;
    protected $translatedName;

    
    /**
     * @return DeliveryCountryCodeOrRestOfWorld
     */
    public function getCode()
    {
        return $this->code;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return DeliveryProvince[]
     */
    public function getProvinces()
    {
        return $this->provinces;
    }

    
    /**
     * @return string
     */
    public function getTranslatedName()
    {
        return $this->translatedName;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = DeliveryCountryCodeOrRestOfWorld::fromArray($data['code']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['provinces']) && $data['provinces'] !== null) {
                $instance->provinces = array_map(function($item) { return DeliveryProvince::fromArray($item); }, $data['provinces']);
            }
            if (isset($data['translatedName']) && $data['translatedName'] !== null) {
                $instance->translatedName = $data['translatedName'];
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
            if ($this->code !== null) {
                $data['code'] = $this->code->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->provinces !== null) {
                $data['provinces'] = array_map(function($item) { return $item->asArray(); }, $this->provinces);
            }
            if ($this->translatedName !== null) {
                $data['translatedName'] = $this->translatedName;
            }
            return $data;
        }
}
