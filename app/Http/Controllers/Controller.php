<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Laravel OpenApi Pokemon Documentation",
 *      description="Pokedex and moves of pokemon universe",
 *      @OA\Contact(
 *          email="mlf.481990@gmail.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Pokemon API Server"
 * )
 * 
* @OA\Tag(
*     name="Pokemons",
*     description="API Endpoints of Pokemons"
* )
* @OA\Tag(
*     name="Moves",
*     description="API Endpoints of Moves"
* )
* @OA\Tag(
*     name="Trainers",
*     description="API Endpoints of Trainers"
* )
*/

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
