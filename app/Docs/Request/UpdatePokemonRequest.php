<?php

namespace App\Docs\Request;

/**
 * @OA\Schema(
 *      title="Update Pokemon request",
 *      description="Update Pokemon request body data",
 *      type="object",
 *      required={"name"}
 * )
 */

class UpdatePokemonRequest
{
    /**
     * @OA\Property(
     *      title="name",
     *      description="Name of the update Pokemon",
     *      example="A nice Pokemon"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *      title="key",
     *      description="Key of the update Pokemon",
     *      example="a-nice-pokemon"
     * )
     *
     * @var string
     */
    public $key;

    /**
     * @OA\Property(
     *      title="national_id",
     *      description="National ID of the update Pokemon",
     *      example="0001"
     * )
     *
     * @var string
     */
    public $national_id;


    /**
     * @OA\Property(
     *      title="actual_ps",
     *      description="Actual PS of the update Pokemon",
     *      example="85",
     *      format="float"
     * )
     *
     * @var decimal
     */
    public $actual_ps;

    /**
     * @OA\Property(
     *      title="total_ps",
     *      description="Total PS of the update Pokemon",
     *      example="85",
     *      format="float"
     * )
     *
     * @var decimal
     */
    public $total_ps;

    /**
     * @OA\Property(
     *      title="base_attack",
     *      description="Base Attack of the update Pokemon",
     *      example="85",
     *      format="float"
     * )
     *
     * @var decimal
     */
    public $base_attack;

    /**
     * @OA\Property(
     *      title="base_defense",
     *      description="Base Defense of the update Pokemon",
     *      example="85",
     *      format="float"
     * )
     *
     * @var decimal
     */
    public $base_defense;

    /**
     * @OA\Property(
     *      title="base_special_attack",
     *      description="Base Special Attack of the update Pokemon",
     *      example="85",
     *      format="float"
     * )
     *
     * @var decimal
     */
    public $base_special_attack;

    /**
     * @OA\Property(
     *      title="base_special_defense",
     *      description="Base Special Defense of the update Pokemon",
     *      example="85",
     *      format="float"
     * )
     *
     * @var decimal
     */
    public $base_special_defense;

    /**
     * @OA\Property(
     *      title="base_speed",
     *      description="Base Speed of the update Pokemon",
     *      example="85",
     *      format="float"
     * )
     *
     * @var decimal
     */
    public $base_speed;

    /**
     * @OA\Property(
     *      title="type",
     *      description="Type's of the update Pokemon",
     *      format="string",
     *      example="[1]"
     * )
     *
     * @var string
     */
    public $type;

    /**
     * @OA\Property(
     *      title="moves",
     *      description="Moves's of the update Pokemon",
     *      format="string",
     *      example="[1]"
     * )
     *
     * @var string
     */
    public $moves;
}