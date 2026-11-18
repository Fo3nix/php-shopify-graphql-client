<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStagedMediaUploadTarget;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyUserError;

/**
 * Return type for `stagedUploadsCreate` mutation.
 */
class ShopifyStagedUploadsCreatePayload
{
    protected $stagedTargets;
    protected $userErrors;

    
    /**
     * The staged upload targets that were generated.
     *
     * @return ShopifyStagedMediaUploadTarget[]
     */
    public function getStagedTargets(): ?array
    {
        return $this->stagedTargets;
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
            if (isset($data['stagedTargets']) && $data['stagedTargets'] !== null) {
                $instance->stagedTargets = array_map(function($item) { return ShopifyStagedMediaUploadTarget::fromArray($item); }, $data['stagedTargets']);
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
            if ($this->stagedTargets !== null) {
                $data['stagedTargets'] = array_map(function($item) { return $item->asArray(); }, $this->stagedTargets);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
