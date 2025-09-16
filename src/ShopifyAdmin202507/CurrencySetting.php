<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;

class CurrencySetting
{
    protected $currencyCode;
    protected $currencyName;
    protected $enabled;
    protected $manualRate;
    protected $rateUpdatedAt;

    
    /**
     * @return CurrencyCodeEnumObject
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    
    /**
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->currencyName;
    }

    
    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    
    /**
     * @return string
     */
    public function getManualRate()
    {
        return $this->manualRate;
    }

    
    /**
     * @return Carbon
     */
    public function getRateUpdatedAt()
    {
        return $this->rateUpdatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['currencyCode']) && $data['currencyCode'] !== null) {
                $instance->currencyCode = $data['currencyCode'];
            }
            if (isset($data['currencyName']) && $data['currencyName'] !== null) {
                $instance->currencyName = $data['currencyName'];
            }
            if (isset($data['enabled']) && $data['enabled'] !== null) {
                $instance->enabled = $data['enabled'];
            }
            if (isset($data['manualRate']) && $data['manualRate'] !== null) {
                $instance->manualRate = $data['manualRate'];
            }
            if (isset($data['rateUpdatedAt']) && $data['rateUpdatedAt'] !== null) {
                $instance->rateUpdatedAt = new Carbon($data['rateUpdatedAt']);
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
            if ($this->currencyCode !== null) {
                $data['currencyCode'] = $this->currencyCode;
            }
            if ($this->currencyName !== null) {
                $data['currencyName'] = $this->currencyName;
            }
            if ($this->enabled !== null) {
                $data['enabled'] = $this->enabled;
            }
            if ($this->manualRate !== null) {
                $data['manualRate'] = $this->manualRate;
            }
            if ($this->rateUpdatedAt !== null) {
                $data['rateUpdatedAt'] = $this->rateUpdatedAt->toIso8601String();
            }
            return $data;
        }
}
