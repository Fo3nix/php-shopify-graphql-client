<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;

class TaxLine
{
    protected $channelLiable;
    protected $price;
    protected $priceSet;
    protected $rate;
    protected $ratePercentage;
    protected $source;
    protected $title;

    
    /**
     * @return bool
     */
    public function getChannelLiable()
    {
        return $this->channelLiable;
    }

    
    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    
    /**
     * @return MoneyBag
     */
    public function getPriceSet()
    {
        return $this->priceSet;
    }

    
    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    
    /**
     * @return float
     */
    public function getRatePercentage()
    {
        return $this->ratePercentage;
    }

    
    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
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
            if (isset($data['channelLiable']) && $data['channelLiable'] !== null) {
                $instance->channelLiable = $data['channelLiable'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = $data['price'];
            }
            if (isset($data['priceSet']) && $data['priceSet'] !== null) {
                $instance->priceSet = MoneyBag::fromArray($data['priceSet']);
            }
            if (isset($data['rate']) && $data['rate'] !== null) {
                $instance->rate = $data['rate'];
            }
            if (isset($data['ratePercentage']) && $data['ratePercentage'] !== null) {
                $instance->ratePercentage = $data['ratePercentage'];
            }
            if (isset($data['source']) && $data['source'] !== null) {
                $instance->source = $data['source'];
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
            if ($this->channelLiable !== null) {
                $data['channelLiable'] = $this->channelLiable;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price;
            }
            if ($this->priceSet !== null) {
                $data['priceSet'] = $this->priceSet->asArray();
            }
            if ($this->rate !== null) {
                $data['rate'] = $this->rate;
            }
            if ($this->ratePercentage !== null) {
                $data['ratePercentage'] = $this->ratePercentage;
            }
            if ($this->source !== null) {
                $data['source'] = $this->source;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
