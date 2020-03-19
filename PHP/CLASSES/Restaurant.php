<?php

class Restaurant
{
    private string $address;
    private string $place;
    private int $phoneNumber;
    private int $zip;
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
        return $this->validated;
    }
}