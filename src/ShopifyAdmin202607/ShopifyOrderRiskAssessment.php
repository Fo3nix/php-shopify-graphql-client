<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyRiskFact;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyApp;

class ShopifyOrderRiskAssessment
{
    protected $facts;
    protected $provider;
    protected $riskLevel;

    
    /**
     * @return ShopifyRiskFact[]
     */
    public function getFacts()
    {
        return $this->facts;
    }

    
    /**
     * @return ShopifyApp
     */
    public function getProvider()
    {
        return $this->provider;
    }

    
    /**
     * @return ShopifyRiskAssessmentResultEnumObject
     */
    public function getRiskLevel()
    {
        return $this->riskLevel;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['facts']) && $data['facts'] !== null) {
                $instance->facts = array_map(function($item) { return ShopifyRiskFact::fromArray($item); }, $data['facts']);
            }
            if (isset($data['provider']) && $data['provider'] !== null) {
                $instance->provider = ShopifyApp::fromArray($data['provider']);
            }
            if (isset($data['riskLevel']) && $data['riskLevel'] !== null) {
                $instance->riskLevel = $data['riskLevel'];
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
            if ($this->facts !== null) {
                $data['facts'] = array_map(function($item) { return $item->asArray(); }, $this->facts);
            }
            if ($this->provider !== null) {
                $data['provider'] = $this->provider->asArray();
            }
            if ($this->riskLevel !== null) {
                $data['riskLevel'] = $this->riskLevel;
            }
            return $data;
        }
}
