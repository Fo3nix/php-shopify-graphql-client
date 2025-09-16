<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class OnlineStoreThemeFileBodyUnionObject extends UnionObject
{
    public function onOnlineStoreThemeFileBodyBase64()
    {
        $object = new OnlineStoreThemeFileBodyBase64QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOnlineStoreThemeFileBodyText()
    {
        $object = new OnlineStoreThemeFileBodyTextQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOnlineStoreThemeFileBodyUrl()
    {
        $object = new OnlineStoreThemeFileBodyUrlQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
