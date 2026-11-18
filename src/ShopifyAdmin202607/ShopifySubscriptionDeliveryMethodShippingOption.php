<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryCarrierService;

/**
 * Represents the selected shipping option on a subscription contract.
 */
class ShopifySubscriptionDeliveryMethodShippingOption
{
    protected $carrierService;
    protected $code;
    protected $description;
    protected $presentmentTitle;
    protected $title;

    
    /**
     * The carrier service that's providing this shipping option.
     * This field isn't currently supported and returns null.
     *
     * @return ShopifyDeliveryCarrierService
     */
    public function getCarrierService(): ?ShopifyDeliveryCarrierService
    {
        return $this->carrierService;
    }

    
    /**
     * The code of the shipping option.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    
    /**
     * The description of the shipping option.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The presentment title of the shipping option.
     *
     * @return string
     */
    public function getPresentmentTitle(): ?string
    {
        return $this->presentmentTitle;
    }

    
    /**
     * The title of the shipping option.
     *
     * @return string
     */
    public function getTitle(): ?string
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
            if (isset($data['presentmentTitle']) && $data['presentmentTitle'] !== null) {
                $instance->presentmentTitle = $data['presentmentTitle'];
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
            if ($this->presentmentTitle !== null) {
                $data['presentmentTitle'] = $this->presentmentTitle;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
