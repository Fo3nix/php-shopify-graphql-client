<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCartTransform;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCartTransformCreateUserError;

/**
 * Return type for `cartTransformCreate` mutation.
 */
class ShopifyCartTransformCreatePayload
{
    protected $cartTransform;
    protected $userErrors;

    
    /**
     * The newly created cart transform function.
     *
     * @return ShopifyCartTransform
     */
    public function getCartTransform(): ?ShopifyCartTransform
    {
        return $this->cartTransform;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyCartTransformCreateUserError[]
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
            if (isset($data['cartTransform']) && $data['cartTransform'] !== null) {
                $instance->cartTransform = ShopifyCartTransform::fromArray($data['cartTransform']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyCartTransformCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->cartTransform !== null) {
                $data['cartTransform'] = $this->cartTransform->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
