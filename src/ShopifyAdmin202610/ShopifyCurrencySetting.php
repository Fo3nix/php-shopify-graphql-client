<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;

/**
 * A setting for a presentment currency.
 */
class ShopifyCurrencySetting
{
    protected $currencyCode;
    protected $currencyName;
    protected $enabled;
    protected $manualRate;
    protected $rateUpdatedAt;

    
    /**
     * The currency's ISO code.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    
    /**
     * The full name of the currency.
     *
     * @return string
     */
    public function getCurrencyName(): ?string
    {
        return $this->currencyName;
    }

    
    /**
     * Whether the currency is enabled or not. An enabled currency setting is visible to buyers and allows orders to be generated with that currency as presentment.
     *
     * @return bool
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    
    /**
     * The manual rate, if enabled, that applies to this currency when converting from shop currency. This rate is specific to the associated market's currency setting.
     *
     * @return string
     */
    public function getManualRate(): mixed
    {
        return $this->manualRate;
    }

    
    /**
     * The date and time when the active exchange rate for the currency was last modified. It can be the automatic rate's creation date, or the manual rate's last updated at date if active.
     *
     * @return Carbon
     */
    public function getRateUpdatedAt(): ?Carbon
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
