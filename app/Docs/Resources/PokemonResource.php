<?php

namespace App\Docs\Resources;

/**
 * @OA\Schema(
 *     title="PokemonResource",
 *     description="Pokemon resource",
 *     @OA\Xml(
 *         name="PokemonResource"
 *     )
 * )
 */
class PokemonResource
{
    /**
     * @OA\Property(
     *     title="Pokemon Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Docs\Models\Pokemon[]
     */
    private $data;
}