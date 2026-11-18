<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillmentOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillmentOrderMoveFulfillmentOrderMoveUserError;

/**
 * Return type for `fulfillmentOrderMove` mutation.
 */
class ShopifyFulfillmentOrderMovePayload
{
    protected $movedFulfillmentOrder;
    protected $originalFulfillmentOrder;
    protected $remainingFulfillmentOrder;
    protected $userErrors;

    
    /**
     * The fulfillment order which now contains the moved line items and is assigned to the destination location.
     *
     * If the original fulfillment order doesn't have any line items which are fully or partially fulfilled, the original fulfillment order will be moved to the new location.
     * However if this isn't the case, the moved fulfillment order will differ from the original one.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getMovedFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->movedFulfillmentOrder;
    }

    
    /**
     * The final state of the original fulfillment order.
     *
     * As a result of the move operation, the original fulfillment order might be moved to the new location
     * or remain in the original location. The original fulfillment order might have the same status or be closed.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getOriginalFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->originalFulfillmentOrder;
    }

    
    /**
     * This field is deprecated.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getRemainingFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->remainingFulfillmentOrder;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyFulfillmentOrderMoveFulfillmentOrderMoveUserError[]
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
            if (isset($data['movedFulfillmentOrder']) && $data['movedFulfillmentOrder'] !== null) {
                $instance->movedFulfillmentOrder = ShopifyFulfillmentOrder::fromArray($data['movedFulfillmentOrder']);
            }
            if (isset($data['originalFulfillmentOrder']) && $data['originalFulfillmentOrder'] !== null) {
                $instance->originalFulfillmentOrder = ShopifyFulfillmentOrder::fromArray($data['originalFulfillmentOrder']);
            }
            if (isset($data['remainingFulfillmentOrder']) && $data['remainingFulfillmentOrder'] !== null) {
                $instance->remainingFulfillmentOrder = ShopifyFulfillmentOrder::fromArray($data['remainingFulfillmentOrder']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyFulfillmentOrderMoveFulfillmentOrderMoveUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->movedFulfillmentOrder !== null) {
                $data['movedFulfillmentOrder'] = $this->movedFulfillmentOrder->asArray();
            }
            if ($this->originalFulfillmentOrder !== null) {
                $data['originalFulfillmentOrder'] = $this->originalFulfillmentOrder->asArray();
            }
            if ($this->remainingFulfillmentOrder !== null) {
                $data['remainingFulfillmentOrder'] = $this->remainingFulfillmentOrder->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
