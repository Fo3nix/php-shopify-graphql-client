<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAppFeedback;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyShopResourceFeedbackCreateUserError;

/**
 * Return type for `shopResourceFeedbackCreate` mutation.
 */
class ShopifyShopResourceFeedbackCreatePayload
{
    protected $feedback;
    protected $userErrors;

    
    /**
     * The shop feedback that's created. Returns `null` when `state: ACCEPTED` is used, because setting state to `ACCEPTED` clears the active feedback signal. A `null` value here indicates success, not an error.
     *
     * @return ShopifyAppFeedback
     */
    public function getFeedback(): ?ShopifyAppFeedback
    {
        return $this->feedback;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyShopResourceFeedbackCreateUserError[]
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
            if (isset($data['feedback']) && $data['feedback'] !== null) {
                $instance->feedback = ShopifyAppFeedback::fromArray($data['feedback']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyShopResourceFeedbackCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->feedback !== null) {
                $data['feedback'] = $this->feedback->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
