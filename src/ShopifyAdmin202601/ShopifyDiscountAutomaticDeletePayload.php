<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountUserError;

/**
 * Return type for `discountAutomaticDelete` mutation.
 */
class ShopifyDiscountAutomaticDeletePayload
{
    protected $deletedAutomaticDiscountId;
    protected $userErrors;

    
    /**
     * The ID of the automatic discount that was deleted.
     *
     * @return string
     */
    public function getDeletedAutomaticDiscountId(): ?string
    {
        return $this->deletedAutomaticDiscountId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyDiscountUserError[]
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
            if (isset($data['deletedAutomaticDiscountId']) && $data['deletedAutomaticDiscountId'] !== null) {
                $instance->deletedAutomaticDiscountId = $data['deletedAutomaticDiscountId'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyDiscountUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedAutomaticDiscountId !== null) {
                $data['deletedAutomaticDiscountId'] = $this->deletedAutomaticDiscountId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
