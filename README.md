# pokelist

## Fase 1

- Versión 1
- Versión de PHP 8.2
- Versión de Laravel 10


### Descargarse el proyecto e instalación

una vez descargado será necesario realizar la instalción de los paquetes composer, mediante el comando `composer install`

Una vez instalado los paquetes será necesario levantar la base de datos. Para ello modificaremos los datos de conexión en el fichero `.env`. Una vez modificados ejecutaremos los siguientes comandos.

- 1: `php artisan migrate`
- 2: `php artisan db:seed`

Estos comandos nos permitiran crear las tablas y generar datos de ejemplo para está primera fase. 

### Ejecución

Se ha preparado tres pokemons característicos del universo Pokemon siendo los siguientes:

```json

    [
        id: 1,
        level: 13,
        national_id: "0001",
        name: "Bulbasaur",
        key: "bulbasaur",
        actual_ps: "45.00",
        total_ps: "45.00",
        base_attack: "49.00",
        base_defense: "49.00",
        base_special_attack: "65.00",
        base_special_defense: "65.00",
        base_speed: "45.00",
    ],
    [
        id: 2,
        level: 13,
        national_id: "0004",
        name: "Charmander",
        key: "charmander",
        actual_ps: "39.00",
        total_ps: "39.00",
        base_attack: "52.00",
        base_defense: "43.00",
        base_special_attack: "60.00",
        base_special_defense: "50.00",
        base_speed: "65.00",
    ],
    [
        id: 3,
        level: 13,
        national_id: "0007",
        name: "Squirtle",
        key: "squirtle",
        actual_ps: "44.00",
        total_ps: "44.00",
        base_attack: "48.00",
        base_defense: "65.00",
        base_special_attack: "50.00",
        base_special_defense: "64.00",
        base_speed: "43.00",
    ]
```
y los siguientes movimientos:

```json
    [
        [
            "id" => 1,
            "name" => "Scratch",
            "key" => "scratch",
            "url" => null,
            "power" => "40.00",
            "type_id" => 4,
        ],
        [
            "id" => 2,
            "name" => "Ember",
            "key" => "ember",
            "url" => null,
            "power" => "40.00",
            "type_id" => 2,
        ],
        [
            "id" => 3,
            "name" => "Tackle",
            "key" => "tackle",
            "url" => null,
            "power" => "40.00",
            "type_id" => 5,
        ],
        [
            "id" => 4,
            "name" => "Water Gun",
            "key" => "water-gun",
            "url" => null,
            "power" => "40.00",
            "type_id" => 3,
        ],
        [
            "id" => 5,
            "name" => "Vine Whip",
            "key" => "vine-whip",
            "url" => null,
            "power" => "45.00",
            "type_id" => 4,
        ],
        [
            "id" => 6,
            "name" => "Rapid Spin",
            "key" => "rapid-spin",
            "url" => null,
            "power" => "50.00",
            "type_id" => 5,
        ],
    ]
```
Para poder probar el método solicitado para la fase 1, con realizar `php artisan serve` nos levantará el servicio de server para poder acceder a la siguiente url:
`http://<your-IP>:<your-Port>/calculatedamage/<attackerPokemon>/<move>/<defenderPokemon>`

Para AttackerPokemon y defenderPokemon filtrará por alguno de los siguientes campos:

    - National ID
    - Name
    - Key

Para Move filtrará por los siguientes:

    - Name
    - Key

En caso de no encontrar Pokemon y movimiento devolcerá texto de incidencia.

