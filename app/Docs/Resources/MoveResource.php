<?php

namespace App\Docs\Resources;

/**
 * @OA\Schema(
 *     title="MoveResource",
 *     description="Move resource",
 *     @OA\Xml(
 *         name="MoveResource"
 *     )
 * )
 */
class MoveResource
{
    /**
     * @OA\Property(
     *     title="Move Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Docs\Models\Move[]
     */
    private $data;
}