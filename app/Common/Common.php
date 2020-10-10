<?php

function getImageUrl($image)
{
    return isset($image) ?
        Storage::disk('public')->url($image)
        : url(asset('backend/img/no-image.png'));
}
