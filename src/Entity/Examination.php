<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Timetable
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="examination")
 */
class Examination implements \JsonSerializable
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="default_frequency", type="string")
     */
    private $defaultFrequency;

    /**
     * @var string
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDefaultFrequency(): string
    {
        return $this->defaultFrequency;
    }

    /**
     * @param string $defaultFrequency
     */
    public function setDefaultFrequency(string $defaultFrequency): void
    {
        $this->defaultFrequency = $defaultFrequency;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return array
     */
    public function getFrequencyChangers(): array
    {
        return json_decode($this->frequencyChangers, true);
    }

    /**
     * @param array $frequencyChangers
     */
    public function setFrequencyChangers(array $frequencyChangers): void
    {
        $this->frequencyChangers = json_encode($frequencyChangers);
    }

    /**
     * @inheritdoc
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}