<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Return Rules that apply to returns under a return policy profile.
 */
class ShopifyReturnPoliciesReturnRules
{
    protected $canAcceptReturns;
    protected $extendWindowToBusinessDay;
    protected $returnWindowDays;
    protected $returnWindowStartingFrom;

    
    /**
     * Whether the policy accepts returns. When false, the customer can't request returns for items under this policy.
     *
     * @return bool
     */
    public function getCanAcceptReturns(): ?bool
    {
        return $this->canAcceptReturns;
    }

    
    /**
     * The return window is extended to the next business day when it falls on a weekend or holiday.
     *
     * @return bool
     */
    public function getExtendWindowToBusinessDay(): ?bool
    {
        return $this->extendWindowToBusinessDay;
    }

    
    /**
     * The return window by number of days. Set to -1 to indicate an infinite return window. When `canAcceptReturns` is false, this value is ignored as returns aren't accepted.
     *
     * @return int
     */
    public function getReturnWindowDays(): ?int
    {
        return $this->returnWindowDays;
    }

    
    /**
     * The starting point for calculating the return window.
     *
     * @return string A ShopifyReturnPoliciesReturnWindowStartingFromEnumObject value
     */
    public function getReturnWindowStartingFrom(): ?string
    {
        return $this->returnWindowStartingFrom;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['canAcceptReturns']) && $data['canAcceptReturns'] !== null) {
                $instance->canAcceptReturns = $data['canAcceptReturns'];
            }
            if (isset($data['extendWindowToBusinessDay']) && $data['extendWindowToBusinessDay'] !== null) {
                $instance->extendWindowToBusinessDay = $data['extendWindowToBusinessDay'];
            }
            if (isset($data['returnWindowDays']) && $data['returnWindowDays'] !== null) {
                $instance->returnWindowDays = $data['returnWindowDays'];
            }
            if (isset($data['returnWindowStartingFrom']) && $data['returnWindowStartingFrom'] !== null) {
                $instance->returnWindowStartingFrom = $data['returnWindowStartingFrom'];
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
            if ($this->canAcceptReturns !== null) {
                $data['canAcceptReturns'] = $this->canAcceptReturns;
            }
            if ($this->extendWindowToBusinessDay !== null) {
                $data['extendWindowToBusinessDay'] = $this->extendWindowToBusinessDay;
            }
            if ($this->returnWindowDays !== null) {
                $data['returnWindowDays'] = $this->returnWindowDays;
            }
            if ($this->returnWindowStartingFrom !== null) {
                $data['returnWindowStartingFrom'] = $this->returnWindowStartingFrom;
            }
            return $data;
        }
}
