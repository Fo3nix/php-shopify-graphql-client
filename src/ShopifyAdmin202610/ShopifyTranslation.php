<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarket;
use Carbon\Carbon;

/**
 * A localized version of a field on a resource. Translations enable merchants to provide content in multiple languages for [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects, [`Collection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection) objects, and other store resources.
 *
 * Each translation specifies the locale, the field being translated (identified by its key), and the translated value. Translations can be market-specific, allowing different content for the same language across different markets, or available globally when no [`Market`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) is specified. The `outdated` flag indicates whether the original content has changed since this translation was last updated.
 *
 * Learn more about [managing translated content](https://shopify.dev/docs/apps/build/markets/manage-translated-content).
 */
class ShopifyTranslation
{
    protected $key;
    protected $locale;
    protected $market;
    protected $outdated;
    protected $updatedAt;
    protected $value;

    
    /**
     * On the resource that this translation belongs to, the reference to the value being translated.
     *
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    
    /**
     * ISO code of the translation locale.
     *
     * @return string
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    
    /**
     * The market that the translation is specific to. Null value means the translation is available in all markets.
     *
     * @return ShopifyMarket
     */
    public function getMarket(): ?ShopifyMarket
    {
        return $this->market;
    }

    
    /**
     * Whether the original content has changed since this translation was updated.
     *
     * @return bool
     */
    public function getOutdated(): ?bool
    {
        return $this->outdated;
    }

    
    /**
     * The date and time when the translation was updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * Translation value.
     *
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['locale']) && $data['locale'] !== null) {
                $instance->locale = $data['locale'];
            }
            if (isset($data['market']) && $data['market'] !== null) {
                $instance->market = ShopifyMarket::fromArray($data['market']);
            }
            if (isset($data['outdated']) && $data['outdated'] !== null) {
                $instance->outdated = $data['outdated'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = $data['value'];
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
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->locale !== null) {
                $data['locale'] = $this->locale;
            }
            if ($this->market !== null) {
                $data['market'] = $this->market->asArray();
            }
            if ($this->outdated !== null) {
                $data['outdated'] = $this->outdated;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
