<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyErrorsWebPixelUserError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyWebPixel;

/**
 * Return type for `webPixelCreate` mutation.
 */
class ShopifyWebPixelCreatePayload
{
    protected $userErrors;
    protected $webPixel;

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyErrorsWebPixelUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

    
    /**
     * The created web pixel settings.
     *
     * @return ShopifyWebPixel
     */
    public function getWebPixel(): ?ShopifyWebPixel
    {
        return $this->webPixel;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyErrorsWebPixelUserError::fromArray($item); }, $data['userErrors']);
            }
            if (isset($data['webPixel']) && $data['webPixel'] !== null) {
                $instance->webPixel = ShopifyWebPixel::fromArray($data['webPixel']);
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
            if ($this->webPixel !== null) {
                $data['webPixel'] = $this->webPixel->asArray();
            }
            return $data;
        }
}
