<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderRiskAssessment;

/**
 * Summary of risk characteristics for an order.
 *
 * See the [example query "Retrieve order risk assessments"](https://shopify.dev/docs/api/admin-graphql/unstable/queries/order?example=retrieve-order-risk-assessments).
 */
class ShopifyOrderRiskSummary
{
    protected $assessments;
    protected $recommendation;

    
    /**
     * The risk assessments for the order.
     *
     * @return ShopifyOrderRiskAssessment[]
     */
    public function getAssessments(): ?array
    {
        return $this->assessments;
    }

    
    /**
     * The recommended action for the order based on its risk assessments.
     *
     * @return string A ShopifyOrderRiskRecommendationResultEnumObject value
     */
    public function getRecommendation(): ?string
    {
        return $this->recommendation;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['assessments']) && $data['assessments'] !== null) {
                $instance->assessments = array_map(function($item) { return ShopifyOrderRiskAssessment::fromArray($item); }, $data['assessments']);
            }
            if (isset($data['recommendation']) && $data['recommendation'] !== null) {
                $instance->recommendation = $data['recommendation'];
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
            if ($this->assessments !== null) {
                $data['assessments'] = array_map(function($item) { return $item->asArray(); }, $this->assessments);
            }
            if ($this->recommendation !== null) {
                $data['recommendation'] = $this->recommendation;
            }
            return $data;
        }
}
