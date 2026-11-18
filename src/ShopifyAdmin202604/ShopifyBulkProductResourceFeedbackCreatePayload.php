<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductResourceFeedback;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyBulkProductResourceFeedbackCreateUserError;

/**
 * Return type for `bulkProductResourceFeedbackCreate` mutation.
 */
class ShopifyBulkProductResourceFeedbackCreatePayload
{
    protected $feedback;
    protected $userErrors;

    
    /**
     * The feedback that's created.
     *
     * @return ShopifyProductResourceFeedback[]
     */
    public function getFeedback(): ?array
    {
        return $this->feedback;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyBulkProductResourceFeedbackCreateUserError[]
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
                $instance->feedback = array_map(function($item) { return ShopifyProductResourceFeedback::fromArray($item); }, $data['feedback']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyBulkProductResourceFeedbackCreateUserError::fromArray($item); }, $data['userErrors']);
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
                $data['feedback'] = array_map(function($item) { return $item->asArray(); }, $this->feedback);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
