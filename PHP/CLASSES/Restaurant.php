<?php

class Restaurant
{
    private string $address;
    private string $place;
    private int $phoneNumber;
    private int $zip;
    private int $website;
    private array $menu;
    private string $imagePath;
    private string $id;
    private bool $validated;

    public function __construct()
    {
        $this->id = uniqid();
    }

    public function changeValidated(): void
    {
        $this->validated = !$this->validated;
    }

    public function isValidated(): bool
    {
        if ($this->validated == true) {
            return true;
        }
        return false;
    }

    public static function createFromArray(array $restaurantData): Restaurant
    {
        $restaurant = New Restaurant();

        $restaurant->address = $restaurantData['address'];
        $restaurant->place = $restaurantData['place'];
        $restaurant->zip = $restaurantData['zip'];
        $restaurant->website = $restaurantData['website'];
        $restaurant->phoneNumber = $restaurantData['phoneNumber'];
        $restaurant->menu = $restaurantData['menu'];
        $restaurant->imagePath = $restaurantData['imagePath'];
        $restaurant->validated = false;

        return $restaurant;
    }


}