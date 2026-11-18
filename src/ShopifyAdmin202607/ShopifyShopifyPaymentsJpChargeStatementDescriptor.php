<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The charge descriptors for a Japanese payments account.
 */
class ShopifyShopifyPaymentsJpChargeStatementDescriptor implements ShopifyShopifyPaymentsChargeStatementDescriptor
{
    protected $default;
    protected $kana;
    protected $kanji;
    protected $prefix;

    
    /**
     * The default charge statement descriptor.
     *
     * @return string
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }

    
    /**
     * The charge statement descriptor in kana.
     *
     * @return string
     */
    public function getKana(): ?string
    {
        return $this->kana;
    }

    
    /**
     * The charge statement descriptor in kanji.
     *
     * @return string
     */
    public function getKanji(): ?string
    {
        return $this->kanji;
    }

    
    /**
     * The prefix of the statement descriptor.
     *
     * @return string
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['default']) && $data['default'] !== null) {
                $instance->default = $data['default'];
            }
            if (isset($data['kana']) && $data['kana'] !== null) {
                $instance->kana = $data['kana'];
            }
            if (isset($data['kanji']) && $data['kanji'] !== null) {
                $instance->kanji = $data['kanji'];
            }
            if (isset($data['prefix']) && $data['prefix'] !== null) {
                $instance->prefix = $data['prefix'];
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
            if ($this->default !== null) {
                $data['default'] = $this->default;
            }
            if ($this->kana !== null) {
                $data['kana'] = $this->kana;
            }
            if ($this->kanji !== null) {
                $data['kanji'] = $this->kanji;
            }
            if ($this->prefix !== null) {
                $data['prefix'] = $this->prefix;
            }
            return $data;
        }
}
