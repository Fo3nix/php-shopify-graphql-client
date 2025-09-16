<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DomainLocalization;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketWebPresence;

class Domain
{
    protected $host;
    protected $id;
    protected $localization;
    protected $marketWebPresence;
    protected $sslEnabled;
    protected $url;

    
    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return DomainLocalization
     */
    public function getLocalization()
    {
        return $this->localization;
    }

    
    /**
     * @return MarketWebPresence
     */
    public function getMarketWebPresence()
    {
        return $this->marketWebPresence;
    }

    
    /**
     * @return bool
     */
    public function getSslEnabled()
    {
        return $this->sslEnabled;
    }

    
    /**
     * @return string
     */
    public function getUrl()
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
            if (isset($data['host']) && $data['host'] !== null) {
                $instance->host = $data['host'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['localization']) && $data['localization'] !== null) {
                $instance->localization = DomainLocalization::fromArray($data['localization']);
            }
            if (isset($data['marketWebPresence']) && $data['marketWebPresence'] !== null) {
                $instance->marketWebPresence = MarketWebPresence::fromArray($data['marketWebPresence']);
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
