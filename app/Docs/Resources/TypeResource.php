<?php

namespace App\Docs\Resources;

/**
 * @OA\Schema(
 *     title="TypeResource",
 *     description="Type resource",
 *     @OA\Xml(
 *         name="TypeResource"
 *     )
 * )
 */
class TypeResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Docs\Models\Type[]
     */
    private $data;
}