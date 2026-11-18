<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;

/**
 * <div class="note"><h4>Theme app extensions</h4>
 *   <p>If your app integrates with a Shopify theme and you plan to submit it to the Shopify App Store, you must use theme app extensions instead of Script tags. Script tags can only be used with vintage themes. <a href="/apps/online-store#what-integration-method-should-i-use" target="_blank">Learn more</a>.</p></div>
 *
 *
 * A script tag represents remote JavaScript code that is loaded into the pages of a shop's storefront or the **Order status** page of checkout.
 */
class ShopifyScriptTag implements ShopifyLegacyInteroperability, ShopifyNode
{
    protected $cache;
    protected $createdAt;
    protected $displayScope;
    protected $id;
    protected $legacyResourceId;
    protected $src;
    protected $updatedAt;

    
    /**
     * Whether the Shopify CDN can cache and serve the script tag.
     * If `true`, then the script will be cached and served by the CDN.
     * The cache expires 15 minutes after the script tag is successfully returned.
     * If `false`, then the script will be served as is.
     *
     * @return bool
     */
    public function getCache(): ?bool
    {
        return $this->cache;
    }

    
    /**
     * The date and time when the script tag was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The page or pages on the online store that the script should be included.
     *
     * @return string A ShopifyScriptTagDisplayScopeEnumObject value
     */
    public function getDisplayScope(): ?string
    {
        return $this->displayScope;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * The URL to the remote script.
     *
     * @return string
     */
    public function getSrc(): mixed
    {
        return $this->src;
    }

    
    /**
     * The date and time when the script tag was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['cache']) && $data['cache'] !== null) {
                $instance->cache = $data['cache'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['displayScope']) && $data['displayScope'] !== null) {
                $instance->displayScope = $data['displayScope'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['src']) && $data['src'] !== null) {
                $instance->src = $data['src'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->cache !== null) {
                $data['cache'] = $this->cache;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->displayScope !== null) {
                $data['displayScope'] = $this->displayScope;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->src !== null) {
                $data['src'] = $this->src;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
