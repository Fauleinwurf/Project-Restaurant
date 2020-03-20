<?php
require_once "Restaurant.php";

class RestaurantCollection
{
    private array $restaurants;
    private string $filename = "../json/restaurants.json";

    private function addRestaurant(Restaurant $restaurant): void
    {
        $this->restaurants[] = $restaurant;
    }

    private function delete(string $id): void
    {

    }

    public function toArray(): array
    {
        $data = [];
        foreach ($this->restaurants as $restaurant) {
            $data[] = $restaurant->toArray();
        }
        return $data;
    }

    public function toJson(): String
    {
        return json_encode($this->toArray());
    }

    public function save(): void
    {
        file_put_contents($this->filename,$this->toJson());
    }

    public static function createFromArray(array $restaurants): RestaurantCollection
    {
        $restaurantCollection = new static();
        foreach ($restaurants as $restaurant) {
            $restaurantCollection->addRestaurant(Restaurant::createFromArray($restaurant));
        }
        return $restaurantCollection;
    }

    public static function createFromJson(): RestaurantCollection
    {
        return RestaurantCollection::createFromArray(json_decode(file_get_contents("../json/restaurants.json"), JSON_OBJECT_AS_ARRAY));
    }

    /**
     * @return array
     */
    public function getRestaurants(): array
    {
        return $this->restaurants;
    }



}