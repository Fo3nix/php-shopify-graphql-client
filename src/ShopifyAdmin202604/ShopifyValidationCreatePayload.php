<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyValidationUserError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyValidation;

/**
 * Return type for `validationCreate` mutation.
 */
class ShopifyValidationCreatePayload
{
    protected $userErrors;
    protected $validation;

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyValidationUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

    
    /**
     * The created validation.
     *
     * @return ShopifyValidation
     */
    public function getValidation(): ?ShopifyValidation
    {
        return $this->validation;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyValidationUserError::fromArray($item); }, $data['userErrors']);
            }
            if (isset($data['validation']) && $data['validation'] !== null) {
                $instance->validation = ShopifyValidation::fromArray($data['validation']);
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
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            if ($this->validation !== null) {
                $data['validation'] = $this->validation->asArray();
            }
            return $data;
        }
}
