<?php

namespace App\Docs\Models;

/**
 * @OA\Schema(
 *     title="Trainer",
 *     description="Trainer model",
 *     @OA\Xml(
 *         name="Trainer"
 *     )
 * )
 */
class Trainer
{

    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *      title="Name",
     *      description="Name of the new Trainer",
     *      example="A nice Trainer"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $created_at;

    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @OA\Property(
     *     title="pokemons",
     *     description="pokemons pokemons's model"
     * )
     *
     * @var \App\Docs\Models\Pokemon[]
     */
    private $pokemons;
}