<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPublication;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPublicationUserError;

/**
 * Return type for `publicationUpdate` mutation.
 */
class ShopifyPublicationUpdatePayload
{
    protected $publication;
    protected $userErrors;

    
    /**
     * The publication that's been updated.
     *
     * @return ShopifyPublication
     */
    public function getPublication(): ?ShopifyPublication
    {
        return $this->publication;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyPublicationUserError[]
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
            if (isset($data['publication']) && $data['publication'] !== null) {
                $instance->publication = ShopifyPublication::fromArray($data['publication']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyPublicationUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->publication !== null) {
                $data['publication'] = $this->publication->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
