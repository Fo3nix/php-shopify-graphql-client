<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopPayPaymentRequestImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopPayPaymentRequestDiscount;

class ShopPayPaymentRequestLineItem
{
    protected $finalItemPrice;
    protected $finalLinePrice;
    protected $image;
    protected $itemDiscounts;
    protected $label;
    protected $lineDiscounts;
    protected $originalItemPrice;
    protected $originalLinePrice;
    protected $quantity;
    protected $requiresShipping;
    protected $sku;

    
    /**
     * @return MoneyV2
     */
    public function getFinalItemPrice()
    {
        return $this->finalItemPrice;
    }

    
    /**
     * @return MoneyV2
     */
    public function getFinalLinePrice()
    {
        return $this->finalLinePrice;
    }

    
    /**
     * @return ShopPayPaymentRequestImage
     */
    public function getImage()
    {
        return $this->image;
    }

    
    /**
     * @return ShopPayPaymentRequestDiscount[]
     */
    public function getItemDiscounts()
    {
        return $this->itemDiscounts;
    }

    
    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    
    /**
     * @return ShopPayPaymentRequestDiscount[]
     */
    public function getLineDiscounts()
    {
        return $this->lineDiscounts;
    }

    
    /**
     * @return MoneyV2
     */
    public function getOriginalItemPrice()
    {
        return $this->originalItemPrice;
    }

    
    /**
     * @return MoneyV2
     */
    public function getOriginalLinePrice()
    {
        return $this->originalLinePrice;
    }

    
    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    
    /**
     * @return bool
     */
    public function getRequiresShipping()
    {
        return $this->requiresShipping;
    }

    
    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['finalItemPrice']) && $data['finalItemPrice'] !== null) {
                $instance->finalItemPrice = MoneyV2::fromArray($data['finalItemPrice']);
            }
            if (isset($data['finalLinePrice']) && $data['finalLinePrice'] !== null) {
                $instance->finalLinePrice = MoneyV2::fromArray($data['finalLinePrice']);
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopPayPaymentRequestImage::fromArray($data['image']);
            }
            if (isset($data['itemDiscounts']) && $data['itemDiscounts'] !== null) {
                $instance->itemDiscounts = array_map(function($item) { return ShopPayPaymentRequestDiscount::fromArray($item); }, $data['itemDiscounts']);
            }
            if (isset($data['label']) && $data['label'] !== null) {
                $instance->label = $data['label'];
            }
            if (isset($data['lineDiscounts']) && $data['lineDiscounts'] !== null) {
                $instance->lineDiscounts = array_map(function($item) { return ShopPayPaymentRequestDiscount::fromArray($item); }, $data['lineDiscounts']);
            }
            if (isset($data['originalItemPrice']) && $data['originalItemPrice'] !== null) {
                $instance->originalItemPrice = MoneyV2::fromArray($data['originalItemPrice']);
            }
            if (isset($data['originalLinePrice']) && $data['originalLinePrice'] !== null) {
                $instance->originalLinePrice = MoneyV2::fromArray($data['originalLinePrice']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['requiresShipping']) && $data['requiresShipping'] !== null) {
                $instance->requiresShipping = $data['requiresShipping'];
            }
            if (isset($data['sku']) && $data['sku'] !== null) {
                $instance->sku = $data['sku'];
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
            if ($this->finalItemPrice !== null) {
                $data['finalItemPrice'] = $this->finalItemPrice->asArray();
            }
            if ($this->finalLinePrice !== null) {
                $data['finalLinePrice'] = $this->finalLinePrice->asArray();
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->itemDiscounts !== null) {
                $data['itemDiscounts'] = array_map(function($item) { return $item->asArray(); }, $this->itemDiscounts);
            }
            if ($this->label !== null) {
                $data['label'] = $this->label;
            }
            if ($this->lineDiscounts !== null) {
                $data['lineDiscounts'] = array_map(function($item) { return $item->asArray(); }, $this->lineDiscounts);
            }
            if ($this->originalItemPrice !== null) {
                $data['originalItemPrice'] = $this->originalItemPrice->asArray();
            }
            if ($this->originalLinePrice !== null) {
                $data['originalLinePrice'] = $this->originalLinePrice->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->requiresShipping !== null) {
                $data['requiresShipping'] = $this->requiresShipping;
            }
            if ($this->sku !== null) {
                $data['sku'] = $this->sku;
            }
            return $data;
        }
}
