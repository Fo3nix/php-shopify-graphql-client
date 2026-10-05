<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyReturnPoliciesReturnRules
{
    protected $canAcceptReturns;
    protected $extendWindowToBusinessDay;
    protected $returnWindowDays;
    protected $returnWindowStartingFrom;

    
    /**
     * @return bool
     */
    public function getCanAcceptReturns()
    {
        return $this->canAcceptReturns;
    }

    
    /**
     * @return bool
     */
    public function getExtendWindowToBusinessDay()
    {
        return $this->extendWindowToBusinessDay;
    }

    
    /**
     * @return int
     */
    public function getReturnWindowDays()
    {
        return $this->returnWindowDays;
    }

    
    /**
     * @return ShopifyReturnPoliciesReturnWindowStartingFromEnumObject
     */
    public function getReturnWindowStartingFrom()
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
