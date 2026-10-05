<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyCollectionSubCollectionEligibilityState
{
    protected $eligible;
    protected $ineligibleReason;

    
    /**
     * @return bool
     */
    public function getEligible()
    {
        return $this->eligible;
    }

    
    /**
     * @return ShopifySubCollectionIneligibleReasonEnumObject
     */
    public function getIneligibleReason()
    {
        return $this->ineligibleReason;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['eligible']) && $data['eligible'] !== null) {
                $instance->eligible = $data['eligible'];
            }
            if (isset($data['ineligibleReason']) && $data['ineligibleReason'] !== null) {
                $instance->ineligibleReason = $data['ineligibleReason'];
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
            if ($this->eligible !== null) {
                $data['eligible'] = $this->eligible;
            }
            if ($this->ineligibleReason !== null) {
                $data['ineligibleReason'] = $this->ineligibleReason;
            }
            return $data;
        }
}
