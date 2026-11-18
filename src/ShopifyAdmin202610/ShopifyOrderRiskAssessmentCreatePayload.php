<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderRiskAssessment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderRiskAssessmentCreateUserError;

/**
 * Return type for `orderRiskAssessmentCreate` mutation.
 */
class ShopifyOrderRiskAssessmentCreatePayload
{
    protected $orderRiskAssessment;
    protected $userErrors;

    
    /**
     * The created risk assessment.
     *
     * @return ShopifyOrderRiskAssessment
     */
    public function getOrderRiskAssessment(): ?ShopifyOrderRiskAssessment
    {
        return $this->orderRiskAssessment;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyOrderRiskAssessmentCreateUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['orderRiskAssessment']) && $data['orderRiskAssessment'] !== null) {
                $instance->orderRiskAssessment = ShopifyOrderRiskAssessment::fromArray($data['orderRiskAssessment']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyOrderRiskAssessmentCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->orderRiskAssessment !== null) {
                $data['orderRiskAssessment'] = $this->orderRiskAssessment->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
