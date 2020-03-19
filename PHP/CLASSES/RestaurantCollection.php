<?php


class RestaurantCollection
{
    private array $restaurants;

    private function addRestaurant(Restaurant $restaurant): void
    {
        $this->restaurants[] = $restaurant->toArray();
    }

    private function delete(string $id): void
    {

    }
}