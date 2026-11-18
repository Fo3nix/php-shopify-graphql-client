<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMarketLocalization;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTranslationUserError;

/**
 * Return type for `marketLocalizationsRemove` mutation.
 */
class ShopifyMarketLocalizationsRemovePayload
{
    protected $marketLocalizations;
    protected $userErrors;

    
    /**
     * The market localizations that were deleted.
     *
     * @return ShopifyMarketLocalization[]
     */
    public function getMarketLocalizations(): ?array
    {
        return $this->marketLocalizations;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyTranslationUserError[]
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
            if (isset($data['marketLocalizations']) && $data['marketLocalizations'] !== null) {
                $instance->marketLocalizations = array_map(function($item) { return ShopifyMarketLocalization::fromArray($item); }, $data['marketLocalizations']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyTranslationUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->marketLocalizations !== null) {
                $data['marketLocalizations'] = array_map(function($item) { return $item->asArray(); }, $this->marketLocalizations);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
