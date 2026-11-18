<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * The custom font customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomFont
{
    protected $genericFileId;
    protected $sources;
    protected $weight;

    
    /**
     * Globally unique ID reference to the custom font file.
     *
     * @return string
     */
    public function getGenericFileId(): ?string
    {
        return $this->genericFileId;
    }

    
    /**
     * The font sources.
     *
     * @return string
     */
    public function getSources(): ?string
    {
        return $this->sources;
    }

    
    /**
     * The font weight.
     *
     * @return int
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['genericFileId']) && $data['genericFileId'] !== null) {
                $instance->genericFileId = $data['genericFileId'];
            }
            if (isset($data['sources']) && $data['sources'] !== null) {
                $instance->sources = $data['sources'];
            }
            if (isset($data['weight']) && $data['weight'] !== null) {
                $instance->weight = $data['weight'];
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
            if ($this->genericFileId !== null) {
                $data['genericFileId'] = $this->genericFileId;
            }
            if ($this->sources !== null) {
                $data['sources'] = $this->sources;
            }
            if ($this->weight !== null) {
                $data['weight'] = $this->weight;
            }
            return $data;
        }
}
