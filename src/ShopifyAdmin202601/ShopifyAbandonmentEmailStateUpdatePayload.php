<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAbandonment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAbandonmentEmailStateUpdateUserError;

/**
 * Return type for `abandonmentEmailStateUpdate` mutation.
 */
class ShopifyAbandonmentEmailStateUpdatePayload
{
    protected $abandonment;
    protected $userErrors;

    
    /**
     * The updated abandonment.
     *
     * @return ShopifyAbandonment
     */
    public function getAbandonment(): ?ShopifyAbandonment
    {
        return $this->abandonment;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyAbandonmentEmailStateUpdateUserError[]
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
            if (isset($data['abandonment']) && $data['abandonment'] !== null) {
                $instance->abandonment = ShopifyAbandonment::fromArray($data['abandonment']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyAbandonmentEmailStateUpdateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->abandonment !== null) {
                $data['abandonment'] = $this->abandonment->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
