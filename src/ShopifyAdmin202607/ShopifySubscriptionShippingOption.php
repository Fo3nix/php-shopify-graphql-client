<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryCarrierService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;

class ShopifySubscriptionShippingOption
{
    protected $carrierService;
    protected $code;
    protected $description;
    protected $phoneRequired;
    protected $presentmentTitle;
    protected $price;
    protected $title;

    
    /**
     * @return ShopifyDeliveryCarrierService
     */
    public function getCarrierService()
    {
        return $this->carrierService;
    }

    
    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * @return bool
     */
    public function getPhoneRequired()
    {
        return $this->phoneRequired;
    }

    
    /**
     * @return string
     */
    public function getPresentmentTitle()
    {
        return $this->presentmentTitle;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getPrice()
    {
        return $this->price;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['carrierService']) && $data['carrierService'] !== null) {
                $instance->carrierService = ShopifyDeliveryCarrierService::fromArray($data['carrierService']);
            }
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['phoneRequired']) && $data['phoneRequired'] !== null) {
                $instance->phoneRequired = $data['phoneRequired'];
            }
            if (isset($data['presentmentTitle']) && $data['presentmentTitle'] !== null) {
                $instance->presentmentTitle = $data['presentmentTitle'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = ShopifyMoneyV2::fromArray($data['price']);
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->carrierService !== null) {
                $data['carrierService'] = $this->carrierService->asArray();
            }
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->phoneRequired !== null) {
                $data['phoneRequired'] = $this->phoneRequired;
            }
            if ($this->presentmentTitle !== null) {
                $data['presentmentTitle'] = $this->presentmentTitle;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price->asArray();
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
