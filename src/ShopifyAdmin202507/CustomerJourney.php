<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerVisit;

class CustomerJourney
{
    protected $customerOrderIndex;
    protected $daysToConversion;
    protected $firstVisit;
    protected $lastVisit;
    protected $moments;

    
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
     * @return CustomerVisit
     */
    public function getFirstVisit()
    {
        return $this->firstVisit;
    }

    
    /**
     * @return CustomerVisit
     */
    public function getLastVisit()
    {
        return $this->lastVisit;
    }

    
    /**
     * @return mixed[]
     */
    public function getMoments()
    {
        return $this->moments;
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
                $instance->firstVisit = CustomerVisit::fromArray($data['firstVisit']);
            }
            if (isset($data['lastVisit']) && $data['lastVisit'] !== null) {
                $instance->lastVisit = CustomerVisit::fromArray($data['lastVisit']);
            }
            if (isset($data['moments']) && $data['moments'] !== null) {
                $instance->moments = $data['moments'];
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
                $data['moments'] = $this->moments;
            }
            return $data;
        }
}
