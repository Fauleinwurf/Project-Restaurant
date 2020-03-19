<?php

class Restaurant
{
    private string $restaurantName;
    private string $address;
    private string $place;
    private int $phoneNumber;
    private int $zip;
    private int $website;
    private array $menu;
    private string $imagePath;
    private string $id;
    private bool $validated;

    public function toArray(): Array
    {
        return [
            "id" => $this->id,
            "restaurantName" => $this->restaurantName,
            "validated" => $this->validated,
            "website" => $this->website,
            "phoneNumber" => $this->phoneNumber,
            "address" => $this->address,
            "place" => $this->place,
            "zip" => $this->zip,
            "menu" => $this->menu,
            "imagePath" => $this->imagePath
        ];
    }

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
        $restaurant->validated = $restaurantData['validated'];
        $restaurant->id = $restaurantData['id'];
        $restaurant->restaurantName = $restaurantData['restaurantName'];

        return $restaurant;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getPlace(): string
    {
        return $this->place;
    }

    /**
     * @param string $place
     */
    public function setPlace(string $place): void
    {
        $this->place = $place;
    }

    /**
     * @return int
     */
    public function getPhoneNumber(): int
    {
        return $this->phoneNumber;
    }

    /**
     * @param int $phoneNumber
     */
    public function setPhoneNumber(int $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return int
     */
    public function getZip(): int
    {
        return $this->zip;
    }

    /**
     * @param int $zip
     */
    public function setZip(int $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * @return int
     */
    public function getWebsite(): int
    {
        return $this->website;
    }

    /**
     * @param int $website
     */
    public function setWebsite(int $website): void
    {
        $this->website = $website;
    }

    /**
     * @return array
     */
    public function getMenu(): array
    {
        return $this->menu;
    }

    /**
     * @param array $menu
     */
    public function setMenu(array $menu): void
    {
        $this->menu = $menu;
    }

    /**
     * @return string
     */
    public function getImagePath(): string
    {
        return $this->imagePath;
    }

    /**
     * @param string $imagePath
     */
    public function setImagePath(string $imagePath): void
    {
        $this->imagePath = $imagePath;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getRestaurantName(): string
    {
        return $this->restaurantName;
    }

    /**
     * @param string $restaurantName
     */
    public function setRestaurantName(string $restaurantName): void
    {
        $this->restaurantName = $restaurantName;
    }


}