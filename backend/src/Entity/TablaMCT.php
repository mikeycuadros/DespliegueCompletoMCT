<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: "secretosMCT")]
class TablaMCT
{
 #[ORM\Id]
 #[ORM\GeneratedValue]
 #[ORM\Column(type: "integer")]
 private int $id;
 #[ORM\Column(type: "string", length: 255)]
 private string $fraseMCT;
 public function getId(): int
 {
 return $this->id;
 }
 public function getfraseMCT(): string
 {
 return $this->fraseMCT;
 }
 public function setfraseMCT(string $fraseMCT): self
 {
 $this->fraseMCT = $fraseMCT;
 return $this;
 }
}