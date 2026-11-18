<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Represents the default expiration configuration of gift cards on the shop.
 */
class ShopifyGiftCardExpirationConfiguration
{
    protected $expirationUnit;
    protected $expirationValue;

    
    /**
     * The unit for the default gift card expiration.
     *
     * @return string A ShopifyGiftCardConfigurationExpirationUnitEnumObject value
     */
    public function getExpirationUnit(): ?string
    {
        return $this->expirationUnit;
    }

    
    /**
     * The value for the default gift card expiration.
     *
     * @return int
     */
    public function getExpirationValue(): ?int
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
