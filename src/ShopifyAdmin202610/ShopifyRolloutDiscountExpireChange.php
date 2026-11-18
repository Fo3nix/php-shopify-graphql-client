<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDiscountNode;

/**
 * A rollout treatment change that withholds a discount from the buyers the treatment serves, regardless of the discount's own `startsAt`, `endsAt`, or `status`. Returned by [`RolloutTreatment.changes`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RolloutTreatment#field-RolloutTreatment.fields.changes).
 */
class ShopifyRolloutDiscountExpireChange implements ShopifyRolloutChange, ShopifyRolloutDiscountChange
{
    protected $discount;
    protected $id;

    
    /**
     * The discount that the change applies to. Returns `null` when the discount has been deleted or the caller can't read it.
     *
     * @return ShopifyDiscountNode
     */
    public function getDiscount(): ?ShopifyDiscountNode
    {
        return $this->discount;
    }

    
    /**
     * A globally unique ID for this change, not the resource it affects.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['discount']) && $data['discount'] !== null) {
                $instance->discount = ShopifyDiscountNode::fromArray($data['discount']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
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
            if ($this->discount !== null) {
                $data['discount'] = $this->discount->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            return $data;
        }
}
