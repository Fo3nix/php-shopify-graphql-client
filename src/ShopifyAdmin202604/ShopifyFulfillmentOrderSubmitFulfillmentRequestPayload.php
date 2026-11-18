<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUserError;

/**
 * Return type for `fulfillmentOrderSubmitFulfillmentRequest` mutation.
 */
class ShopifyFulfillmentOrderSubmitFulfillmentRequestPayload
{
    protected $originalFulfillmentOrder;
    protected $submittedFulfillmentOrder;
    protected $unsubmittedFulfillmentOrder;
    protected $userErrors;

    
    /**
     * The original fulfillment order intended to request fulfillment for.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getOriginalFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->originalFulfillmentOrder;
    }

    
    /**
     * The fulfillment order that was submitted to the fulfillment service. This will be the same as
     * the original fulfillment order field. The exception to this is partial fulfillment requests or
     * fulfillment request for cancelled or incomplete fulfillment orders.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getSubmittedFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->submittedFulfillmentOrder;
    }

    
    /**
     * This field will only be present for partial fulfillment requests. This will represent the new
     * fulfillment order with the remaining line items not submitted to the fulfillment service.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getUnsubmittedFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->unsubmittedFulfillmentOrder;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUserError[]
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
            if (isset($data['originalFulfillmentOrder']) && $data['originalFulfillmentOrder'] !== null) {
                $instance->originalFulfillmentOrder = ShopifyFulfillmentOrder::fromArray($data['originalFulfillmentOrder']);
            }
            if (isset($data['submittedFulfillmentOrder']) && $data['submittedFulfillmentOrder'] !== null) {
                $instance->submittedFulfillmentOrder = ShopifyFulfillmentOrder::fromArray($data['submittedFulfillmentOrder']);
            }
            if (isset($data['unsubmittedFulfillmentOrder']) && $data['unsubmittedFulfillmentOrder'] !== null) {
                $instance->unsubmittedFulfillmentOrder = ShopifyFulfillmentOrder::fromArray($data['unsubmittedFulfillmentOrder']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->originalFulfillmentOrder !== null) {
                $data['originalFulfillmentOrder'] = $this->originalFulfillmentOrder->asArray();
            }
            if ($this->submittedFulfillmentOrder !== null) {
                $data['submittedFulfillmentOrder'] = $this->submittedFulfillmentOrder->asArray();
            }
            if ($this->unsubmittedFulfillmentOrder !== null) {
                $data['unsubmittedFulfillmentOrder'] = $this->unsubmittedFulfillmentOrder->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
