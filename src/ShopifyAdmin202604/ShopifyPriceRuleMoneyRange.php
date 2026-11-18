<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * A money range within which the price rule is applicable.
 */
class ShopifyPriceRuleMoneyRange
{
    protected $greaterThan;
    protected $greaterThanOrEqualTo;
    protected $lessThan;
    protected $lessThanOrEqualTo;

    
    /**
     * The lower bound of the money range.
     *
     * @return string
     */
    public function getGreaterThan(): mixed
    {
        return $this->greaterThan;
    }

    
    /**
     * The lower bound or equal of the money range.
     *
     * @return string
     */
    public function getGreaterThanOrEqualTo(): mixed
    {
        return $this->greaterThanOrEqualTo;
    }

    
    /**
     * The upper bound of the money range.
     *
     * @return string
     */
    public function getLessThan(): mixed
    {
        return $this->lessThan;
    }

    
    /**
     * The upper bound or equal of the money range.
     *
     * @return string
     */
    public function getLessThanOrEqualTo(): mixed
    {
        return $this->lessThanOrEqualTo;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['greaterThan']) && $data['greaterThan'] !== null) {
                $instance->greaterThan = $data['greaterThan'];
            }
            if (isset($data['greaterThanOrEqualTo']) && $data['greaterThanOrEqualTo'] !== null) {
                $instance->greaterThanOrEqualTo = $data['greaterThanOrEqualTo'];
            }
            if (isset($data['lessThan']) && $data['lessThan'] !== null) {
                $instance->lessThan = $data['lessThan'];
            }
            if (isset($data['lessThanOrEqualTo']) && $data['lessThanOrEqualTo'] !== null) {
                $instance->lessThanOrEqualTo = $data['lessThanOrEqualTo'];
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
            if ($this->greaterThan !== null) {
                $data['greaterThan'] = $this->greaterThan;
            }
            if ($this->greaterThanOrEqualTo !== null) {
                $data['greaterThanOrEqualTo'] = $this->greaterThanOrEqualTo;
            }
            if ($this->lessThan !== null) {
                $data['lessThan'] = $this->lessThan;
            }
            if ($this->lessThanOrEqualTo !== null) {
                $data['lessThanOrEqualTo'] = $this->lessThanOrEqualTo;
            }
            return $data;
        }
}
