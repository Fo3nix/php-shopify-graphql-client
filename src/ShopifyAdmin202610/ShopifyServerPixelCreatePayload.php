<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyServerPixel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyErrorsServerPixelUserError;

/**
 * Return type for `serverPixelCreate` mutation.
 */
class ShopifyServerPixelCreatePayload
{
    protected $serverPixel;
    protected $userErrors;

    
    /**
     * The new server pixel.
     *
     * @return ShopifyServerPixel
     */
    public function getServerPixel(): ?ShopifyServerPixel
    {
        return $this->serverPixel;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyErrorsServerPixelUserError[]
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
            if (isset($data['serverPixel']) && $data['serverPixel'] !== null) {
                $instance->serverPixel = ShopifyServerPixel::fromArray($data['serverPixel']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyErrorsServerPixelUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->serverPixel !== null) {
                $data['serverPixel'] = $this->serverPixel->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
