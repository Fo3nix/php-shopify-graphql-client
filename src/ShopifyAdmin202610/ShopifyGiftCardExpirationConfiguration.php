<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyGiftCardExpirationConfiguration
{
    protected $expirationUnit;
    protected $expirationValue;

    
    /**
     * @return ShopifyGiftCardConfigurationExpirationUnitEnumObject
     */
    public function getExpirationUnit()
    {
        return $this->expirationUnit;
    }

    
    /**
     * @return int
     */
    public function getExpirationValue()
    {
        return $this->expirationValue;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['expirationUnit']) && $data['expirationUnit'] !== null) {
                $instance->expirationUnit = $data['expirationUnit'];
            }
            if (isset($data['expirationValue']) && $data['expirationValue'] !== null) {
                $instance->expirationValue = $data['expirationValue'];
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
            if ($this->expirationUnit !== null) {
                $data['expirationUnit'] = $this->expirationUnit;
            }
            if ($this->expirationValue !== null) {
                $data['expirationValue'] = $this->expirationValue;
            }
            return $data;
        }
}
