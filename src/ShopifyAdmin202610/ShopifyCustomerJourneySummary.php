<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerVisit;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerMomentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;

class ShopifyCustomerJourneySummary
{
    protected $customerOrderIndex;
    protected $daysToConversion;
    protected $firstVisit;
    protected $lastVisit;
    protected $moments;
    protected $momentsCount;
    protected $ready;

    
    /**
     * @return int
     */
    public function getCustomerOrderIndex()
    {
        return $this->customerOrderIndex;
    }

    
    /**
     * @return int
     */
    public function getDaysToConversion()
    {
        return $this->daysToConversion;
    }

    
    /**
     * @return ShopifyCustomerVisit
     */
    public function getFirstVisit()
    {
        return $this->firstVisit;
    }

    
    /**
     * @return ShopifyCustomerVisit
     */
    public function getLastVisit()
    {
        return $this->lastVisit;
    }

    
    /**
     * @return ShopifyCustomerMomentConnection
     */
    public function getMoments()
    {
        return $this->moments;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getMomentsCount()
    {
        return $this->momentsCount;
    }

    
    /**
     * @return bool
     */
    public function getReady()
    {
        return $this->ready;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customerOrderIndex']) && $data['customerOrderIndex'] !== null) {
                $instance->customerOrderIndex = $data['customerOrderIndex'];
            }
            if (isset($data['daysToConversion']) && $data['daysToConversion'] !== null) {
                $instance->daysToConversion = $data['daysToConversion'];
            }
            if (isset($data['firstVisit']) && $data['firstVisit'] !== null) {
                $instance->firstVisit = ShopifyCustomerVisit::fromArray($data['firstVisit']);
            }
            if (isset($data['lastVisit']) && $data['lastVisit'] !== null) {
                $instance->lastVisit = ShopifyCustomerVisit::fromArray($data['lastVisit']);
            }
            if (isset($data['moments']) && $data['moments'] !== null) {
                $instance->moments = ShopifyCustomerMomentConnection::fromArray($data['moments']);
            }
            if (isset($data['momentsCount']) && $data['momentsCount'] !== null) {
                $instance->momentsCount = ShopifyCount::fromArray($data['momentsCount']);
            }
            if (isset($data['ready']) && $data['ready'] !== null) {
                $instance->ready = $data['ready'];
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
            if ($this->customerOrderIndex !== null) {
                $data['customerOrderIndex'] = $this->customerOrderIndex;
            }
            if ($this->daysToConversion !== null) {
                $data['daysToConversion'] = $this->daysToConversion;
            }
            if ($this->firstVisit !== null) {
                $data['firstVisit'] = $this->firstVisit->asArray();
            }
            if ($this->lastVisit !== null) {
                $data['lastVisit'] = $this->lastVisit->asArray();
            }
            if ($this->moments !== null) {
                $data['moments'] = $this->moments->asArray();
            }
            if ($this->momentsCount !== null) {
                $data['momentsCount'] = $this->momentsCount->asArray();
            }
            if ($this->ready !== null) {
                $data['ready'] = $this->ready;
            }
            return $data;
        }
}
