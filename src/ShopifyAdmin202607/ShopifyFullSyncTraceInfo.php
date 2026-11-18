<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Trace information for a single country-language product feed sync triggered by [`channelFullSync`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/channelFullSync).
 */
class ShopifyFullSyncTraceInfo
{
    protected $country;
    protected $language;
    protected $operationId;

    
    /**
     * The country of the product feed that was triggered.
     *
     * @return string A ShopifyCountryCodeEnumObject value
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    
    /**
     * The language of the product feed that was triggered.
     *
     * @return string A ShopifyLanguageCodeEnumObject value
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    
    /**
     * The operation ID of a successfully initiated product full sync operation. This field is set to nil when the full sync operation isn't successfully initiated.
     *
     * @return string
     */
    public function getOperationId(): ?string
    {
        return $this->operationId;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['country']) && $data['country'] !== null) {
                $instance->country = $data['country'];
            }
            if (isset($data['language']) && $data['language'] !== null) {
                $instance->language = $data['language'];
            }
            if (isset($data['operationId']) && $data['operationId'] !== null) {
                $instance->operationId = $data['operationId'];
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
            if ($this->country !== null) {
                $data['country'] = $this->country;
            }
            if ($this->language !== null) {
                $data['language'] = $this->language;
            }
            if ($this->operationId !== null) {
                $data['operationId'] = $this->operationId;
            }
            return $data;
        }
}
