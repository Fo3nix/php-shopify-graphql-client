<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CompanyLocationTaxSettings
{
    protected $taxExempt;
    protected $taxExemptions;
    protected $taxRegistrationId;

    
    /**
     * @return bool
     */
    public function getTaxExempt()
    {
        return $this->taxExempt;
    }

    
    /**
     * @return TaxExemptionEnumObject[]
     */
    public function getTaxExemptions()
    {
        return $this->taxExemptions;
    }

    
    /**
     * @return string
     */
    public function getTaxRegistrationId()
    {
        return $this->taxRegistrationId;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['taxExempt']) && $data['taxExempt'] !== null) {
                $instance->taxExempt = $data['taxExempt'];
            }
            if (isset($data['taxExemptions']) && $data['taxExemptions'] !== null) {
                $instance->taxExemptions = $data['taxExemptions'];
            }
            if (isset($data['taxRegistrationId']) && $data['taxRegistrationId'] !== null) {
                $instance->taxRegistrationId = $data['taxRegistrationId'];
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
            if ($this->taxExempt !== null) {
                $data['taxExempt'] = $this->taxExempt;
            }
            if ($this->taxExemptions !== null) {
                $data['taxExemptions'] = $this->taxExemptions;
            }
            if ($this->taxRegistrationId !== null) {
                $data['taxRegistrationId'] = $this->taxRegistrationId;
            }
            return $data;
        }
}
