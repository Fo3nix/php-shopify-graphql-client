<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDomainLocalization;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketWebPresence;

/**
 * A unique string that represents the address of a Shopify store on the Internet.
 */
class ShopifyDomain implements ShopifyNode
{
    protected $createdAt;
    protected $host;
    protected $id;
    protected $localization;
    protected $marketWebPresence;
    protected $sslEnabled;
    protected $url;

    
    /**
     * The date and time when the domain was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The host name of the domain. For example, `example.com`.
     *
     * @return string
     */
    public function getHost(): ?string
    {
        return $this->host;
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
     * The localization of the domain, if the domain doesn't redirect.
     *
     * @return ShopifyDomainLocalization
     */
    public function getLocalization(): ?ShopifyDomainLocalization
    {
        return $this->localization;
    }

    
    /**
     * The web presence of the domain.
     *
     * @return ShopifyMarketWebPresence
     */
    public function getMarketWebPresence(): ?ShopifyMarketWebPresence
    {
        return $this->marketWebPresence;
    }

    
    /**
     * Whether SSL is enabled.
     *
     * @return bool
     */
    public function getSslEnabled(): ?bool
    {
        return $this->sslEnabled;
    }

    
    /**
     * The URL of the domain (for example, `https://example.com`).
     *
     * @return string
     */
    public function getUrl(): mixed
    {
        return $this->url;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['host']) && $data['host'] !== null) {
                $instance->host = $data['host'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['localization']) && $data['localization'] !== null) {
                $instance->localization = ShopifyDomainLocalization::fromArray($data['localization']);
            }
            if (isset($data['marketWebPresence']) && $data['marketWebPresence'] !== null) {
                $instance->marketWebPresence = ShopifyMarketWebPresence::fromArray($data['marketWebPresence']);
            }
            if (isset($data['sslEnabled']) && $data['sslEnabled'] !== null) {
                $instance->sslEnabled = $data['sslEnabled'];
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->host !== null) {
                $data['host'] = $this->host;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->localization !== null) {
                $data['localization'] = $this->localization->asArray();
            }
            if ($this->marketWebPresence !== null) {
                $data['marketWebPresence'] = $this->marketWebPresence->asArray();
            }
            if ($this->sslEnabled !== null) {
                $data['sslEnabled'] = $this->sslEnabled;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
