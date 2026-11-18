<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMobilePlatformApplicationHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMobilePlatformApplicationUserError;

/**
 * Return type for `mobilePlatformApplicationCreate` mutation.
 */
class ShopifyMobilePlatformApplicationCreatePayload
{
    protected $mobilePlatformApplication;
    protected $userErrors;

    
    /**
     * Created mobile platform application.
     *
     * @return ShopifyAndroidApplication|ShopifyAppleApplication
     */
    public function getMobilePlatformApplication(): ShopifyAndroidApplication|ShopifyAppleApplication|null
    {
        return $this->mobilePlatformApplication;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMobilePlatformApplicationUserError[]
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
            if (isset($data['mobilePlatformApplication']) && $data['mobilePlatformApplication'] !== null) {
                $instance->mobilePlatformApplication = ShopifyMobilePlatformApplicationHydrator::fromArray($data['mobilePlatformApplication']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyMobilePlatformApplicationUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->mobilePlatformApplication !== null) {
                $data['mobilePlatformApplication'] = ShopifyMobilePlatformApplicationHydrator::toArray($this->mobilePlatformApplication);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
