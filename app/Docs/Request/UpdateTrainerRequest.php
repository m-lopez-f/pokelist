<?php

namespace App\Docs\Request;

/**
 * @OA\Schema(
 *      title="Update Trainer request",
 *      description="Update Trainer request body data",
 *      type="object",
 *      required={"name"}
 * )
 */

class UpdateTrainerRequest
{
    /**
     * @OA\Property(
     *      title="name",
     *      description="Name of the update Trainer",
     *      example="A nice Trainer"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *      title="pokemons",
     *      description="pokemons's of the update Trainer",
     *      format="string",
     *      example="[1]"
     * )
     *
     * @var string
     */
    public $pokemons;
}