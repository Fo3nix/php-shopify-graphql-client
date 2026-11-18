<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUserError;

/**
 * Return type for `flowGenerateSignature` mutation.
 */
class ShopifyFlowGenerateSignaturePayload
{
    protected $payload;
    protected $signature;
    protected $userErrors;

    
    /**
     * The payload used to generate the signature.
     *
     * @return string
     */
    public function getPayload(): ?string
    {
        return $this->payload;
    }

    
    /**
     * The generated signature.
     *
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
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
            if (isset($data['payload']) && $data['payload'] !== null) {
                $instance->payload = $data['payload'];
            }
            if (isset($data['signature']) && $data['signature'] !== null) {
                $instance->signature = $data['signature'];
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
            if ($this->payload !== null) {
                $data['payload'] = $this->payload;
            }
            if ($this->signature !== null) {
                $data['signature'] = $this->signature;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
