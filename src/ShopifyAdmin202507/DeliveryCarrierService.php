<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryAvailableService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Image;

class DeliveryCarrierService
{
    protected $active;
    protected $availableServicesForCountries;
    protected $callbackUrl;
    protected $formattedName;
    protected $icon;
    protected $id;
    protected $name;
    protected $supportsServiceDiscovery;

    
    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    
    /**
     * @return DeliveryAvailableService[]
     */
    public function getAvailableServicesForCountries()
    {
        return $this->availableServicesForCountries;
    }

    
    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    
    /**
     * @return string
     */
    public function getFormattedName()
    {
        return $this->formattedName;
    }

    
    /**
     * @return Image
     */
    public function getIcon()
    {
        return $this->icon;
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
     * @return bool
     */
    public function getSupportsServiceDiscovery()
    {
        return $this->supportsServiceDiscovery;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['active']) && $data['active'] !== null) {
                $instance->active = $data['active'];
            }
            if (isset($data['availableServicesForCountries']) && $data['availableServicesForCountries'] !== null) {
                $instance->availableServicesForCountries = array_map(function($item) { return DeliveryAvailableService::fromArray($item); }, $data['availableServicesForCountries']);
            }
            if (isset($data['callbackUrl']) && $data['callbackUrl'] !== null) {
                $instance->callbackUrl = $data['callbackUrl'];
            }
            if (isset($data['formattedName']) && $data['formattedName'] !== null) {
                $instance->formattedName = $data['formattedName'];
            }
            if (isset($data['icon']) && $data['icon'] !== null) {
                $instance->icon = Image::fromArray($data['icon']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['supportsServiceDiscovery']) && $data['supportsServiceDiscovery'] !== null) {
                $instance->supportsServiceDiscovery = $data['supportsServiceDiscovery'];
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
            if ($this->active !== null) {
                $data['active'] = $this->active;
            }
            if ($this->availableServicesForCountries !== null) {
                $data['availableServicesForCountries'] = array_map(function($item) { return $item->asArray(); }, $this->availableServicesForCountries);
            }
            if ($this->callbackUrl !== null) {
                $data['callbackUrl'] = $this->callbackUrl;
            }
            if ($this->formattedName !== null) {
                $data['formattedName'] = $this->formattedName;
            }
            if ($this->icon !== null) {
                $data['icon'] = $this->icon->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->supportsServiceDiscovery !== null) {
                $data['supportsServiceDiscovery'] = $this->supportsServiceDiscovery;
            }
            return $data;
        }
}
