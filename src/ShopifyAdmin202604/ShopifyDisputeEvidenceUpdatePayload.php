<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopifyPaymentsDisputeEvidence;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDisputeEvidenceUpdateUserError;

/**
 * Return type for `disputeEvidenceUpdate` mutation.
 */
class ShopifyDisputeEvidenceUpdatePayload
{
    protected $disputeEvidence;
    protected $userErrors;

    
    /**
     * The updated dispute evidence.
     *
     * @return ShopifyShopifyPaymentsDisputeEvidence
     */
    public function getDisputeEvidence(): ?ShopifyShopifyPaymentsDisputeEvidence
    {
        return $this->disputeEvidence;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyDisputeEvidenceUpdateUserError[]
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
            if (isset($data['disputeEvidence']) && $data['disputeEvidence'] !== null) {
                $instance->disputeEvidence = ShopifyShopifyPaymentsDisputeEvidence::fromArray($data['disputeEvidence']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyDisputeEvidenceUpdateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->disputeEvidence !== null) {
                $data['disputeEvidence'] = $this->disputeEvidence->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
