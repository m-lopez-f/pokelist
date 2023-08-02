<?php

namespace App\Docs\Resources;

/**
 * @OA\Schema(
 *     title="TrainerResource",
 *     description="Trainer resource",
 *     @OA\Xml(
 *         name="TrainerResource"
 *     )
 * )
 */
class TrainerResource
{
    /**
     * @OA\Property(
     *     title="Trainer Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Docs\Models\Trainer[]
     */
    private $data;
}