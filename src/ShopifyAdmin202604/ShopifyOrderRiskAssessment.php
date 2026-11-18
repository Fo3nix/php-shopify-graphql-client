<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyRiskFact;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyApp;

/**
 * A risk assessment for an order.
 *
 * See the [example query "Retrieve order risk assessments"](https://shopify.dev/docs/api/admin-graphql/unstable/queries/order?example=retrieve-order-risk-assessments).
 */
class ShopifyOrderRiskAssessment
{
    protected $facts;
    protected $provider;
    protected $riskLevel;

    
    /**
     * Facts included with the risk assessment. Fact values are specific to the provider.
     * See the [examples for the mutation orderRiskAssessmentCreate](https://shopify.dev/api/admin-graphql/unstable/mutations/orderRiskAssessmentCreate#section-examples).
     *
     * @return ShopifyRiskFact[]
     */
    public function getFacts(): ?array
    {
        return $this->facts;
    }

    
    /**
     * The app that provided the assessment, `null` if the assessment was provided by Shopify.
     *
     * @return ShopifyApp
     */
    public function getProvider(): ?ShopifyApp
    {
        return $this->provider;
    }

    
    /**
     * The risk level assigned to the order.
     *
     * @return string A ShopifyRiskAssessmentResultEnumObject value
     */
    public function getRiskLevel(): ?string
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
