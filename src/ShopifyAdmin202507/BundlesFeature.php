<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class BundlesFeature
{
    protected $eligibleForBundles;
    protected $ineligibilityReason;
    protected $sellsBundles;

    
    /**
     * @return bool
     */
    public function getEligibleForBundles()
    {
        return $this->eligibleForBundles;
    }

    
    /**
     * @return string
     */
    public function getIneligibilityReason()
    {
        return $this->ineligibilityReason;
    }

    
    /**
     * @return bool
     */
    public function getSellsBundles()
    {
        return $this->sellsBundles;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['eligibleForBundles']) && $data['eligibleForBundles'] !== null) {
                $instance->eligibleForBundles = $data['eligibleForBundles'];
            }
            if (isset($data['ineligibilityReason']) && $data['ineligibilityReason'] !== null) {
                $instance->ineligibilityReason = $data['ineligibilityReason'];
            }
            if (isset($data['sellsBundles']) && $data['sellsBundles'] !== null) {
                $instance->sellsBundles = $data['sellsBundles'];
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
            if ($this->eligibleForBundles !== null) {
                $data['eligibleForBundles'] = $this->eligibleForBundles;
            }
            if ($this->ineligibilityReason !== null) {
                $data['ineligibilityReason'] = $this->ineligibilityReason;
            }
            if ($this->sellsBundles !== null) {
                $data['sellsBundles'] = $this->sellsBundles;
            }
            return $data;
        }
}
