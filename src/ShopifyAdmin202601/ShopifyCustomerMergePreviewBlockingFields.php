<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * The blocking fields of a customer merge preview. These fields will block customer merge unless edited.
 */
class ShopifyCustomerMergePreviewBlockingFields
{
    protected $note;
    protected $tags;

    
    /**
     * The merged note resulting from a customer merge. The merged note is over the 5000 character limit and will block customer merge.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * The merged tags resulting from a customer merge. The merged tags are over the 250 limit and will block customer merge.
     *
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['tags']) && $data['tags'] !== null) {
                $instance->tags = $data['tags'];
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
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->tags !== null) {
                $data['tags'] = $this->tags;
            }
            return $data;
        }
}
