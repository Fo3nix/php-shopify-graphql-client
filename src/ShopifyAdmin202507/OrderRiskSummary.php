<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OrderRiskAssessment;

class OrderRiskSummary
{
    protected $assessments;
    protected $recommendation;

    
    /**
     * @return OrderRiskAssessment[]
     */
    public function getAssessments()
    {
        return $this->assessments;
    }

    
    /**
     * @return OrderRiskRecommendationResultEnumObject
     */
    public function getRecommendation()
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
                $instance->assessments = array_map(function($item) { return OrderRiskAssessment::fromArray($item); }, $data['assessments']);
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
