<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PriceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Publication;

class MarketCatalog
{
    protected $id;
    protected $markets;
    protected $marketsCount;
    protected $operations;
    protected $priceList;
    protected $publication;
    protected $status;
    protected $title;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return MarketConnection
     */
    public function getMarkets()
    {
        return $this->markets;
    }

    
    /**
     * @return Count
     */
    public function getMarketsCount()
    {
        return $this->marketsCount;
    }

    
    /**
     * @return mixed[]
     */
    public function getOperations()
    {
        return $this->operations;
    }

    
    /**
     * @return PriceList
     */
    public function getPriceList()
    {
        return $this->priceList;
    }

    
    /**
     * @return Publication
     */
    public function getPublication()
    {
        return $this->publication;
    }

    
    /**
     * @return CatalogStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['markets']) && $data['markets'] !== null) {
                $instance->markets = MarketConnection::fromArray($data['markets']);
            }
            if (isset($data['marketsCount']) && $data['marketsCount'] !== null) {
                $instance->marketsCount = Count::fromArray($data['marketsCount']);
            }
            if (isset($data['operations']) && $data['operations'] !== null) {
                $instance->operations = $data['operations'];
            }
            if (isset($data['priceList']) && $data['priceList'] !== null) {
                $instance->priceList = PriceList::fromArray($data['priceList']);
            }
            if (isset($data['publication']) && $data['publication'] !== null) {
                $instance->publication = Publication::fromArray($data['publication']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->markets !== null) {
                $data['markets'] = $this->markets->asArray();
            }
            if ($this->marketsCount !== null) {
                $data['marketsCount'] = $this->marketsCount->asArray();
            }
            if ($this->operations !== null) {
                $data['operations'] = $this->operations;
            }
            if ($this->priceList !== null) {
                $data['priceList'] = $this->priceList->asArray();
            }
            if ($this->publication !== null) {
                $data['publication'] = $this->publication->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
