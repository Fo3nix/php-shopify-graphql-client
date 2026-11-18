<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

/**
 * An available pickup option for a subscription contract calculation.
 */
class ShopifySubscriptionContractCalculationPickupOption
{
    protected $code;
    protected $description;
    protected $location;
    protected $phoneRequired;
    protected $pickupTime;
    protected $presentmentTitle;
    protected $price;
    protected $title;

    
    /**
     * The code of the delivery option.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    
    /**
     * The description of the delivery option.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The location where the customer will pick up the merchandise.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * Whether a phone number is required for the delivery option.
     *
     * @return bool
     */
    public function getPhoneRequired(): ?bool
    {
        return $this->phoneRequired;
    }

    
    /**
     * The estimated amount of time it takes for the pickup to be ready (e.g., "Usually ready in 24 hours").
     *
     * @return string
     */
    public function getPickupTime(): ?string
    {
        return $this->pickupTime;
    }

    
    /**
     * The presentment title of the delivery option. This is the customer-facing title displayed at checkout.
     *
     * @return string
     */
    public function getPresentmentTitle(): ?string
    {
        return $this->presentmentTitle;
    }

    
    /**
     * The price of the delivery option.
     *
     * @return ShopifyMoneyV2
     */
    public function getPrice(): ?ShopifyMoneyV2
    {
        return $this->price;
    }

    
    /**
     * The title of the delivery option.
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
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['phoneRequired']) && $data['phoneRequired'] !== null) {
                $instance->phoneRequired = $data['phoneRequired'];
            }
            if (isset($data['pickupTime']) && $data['pickupTime'] !== null) {
                $instance->pickupTime = $data['pickupTime'];
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
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->phoneRequired !== null) {
                $data['phoneRequired'] = $this->phoneRequired;
            }
            if ($this->pickupTime !== null) {
                $data['pickupTime'] = $this->pickupTime;
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
