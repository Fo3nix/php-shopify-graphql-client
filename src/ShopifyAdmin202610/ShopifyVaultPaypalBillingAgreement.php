<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Represents a paypal billing agreement payment instrument.
 */
class ShopifyVaultPaypalBillingAgreement
{
    protected $inactive;
    protected $name;
    protected $paypalAccountEmail;

    
    /**
     * Whether the paypal billing agreement is inactive.
     *
     * @return bool
     */
    public function getInactive(): ?bool
    {
        return $this->inactive;
    }

    
    /**
     * The paypal account name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The paypal account email address.
     *
     * @return string
     */
    public function getPaypalAccountEmail(): ?string
    {
        return $this->paypalAccountEmail;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['inactive']) && $data['inactive'] !== null) {
                $instance->inactive = $data['inactive'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['paypalAccountEmail']) && $data['paypalAccountEmail'] !== null) {
                $instance->paypalAccountEmail = $data['paypalAccountEmail'];
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
            if ($this->inactive !== null) {
                $data['inactive'] = $this->inactive;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->paypalAccountEmail !== null) {
                $data['paypalAccountEmail'] = $this->paypalAccountEmail;
            }
            return $data;
        }
}
