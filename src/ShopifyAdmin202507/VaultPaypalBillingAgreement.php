<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class VaultPaypalBillingAgreement
{
    protected $inactive;
    protected $name;
    protected $paypalAccountEmail;

    
    /**
     * @return bool
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string
     */
    public function getPaypalAccountEmail()
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
