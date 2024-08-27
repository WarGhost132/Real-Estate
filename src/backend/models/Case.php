<?php

class CaseData
{
  public string $id;
  public string $title;
  public string $description;
  public string $image;
  public string $background;
  public array $briefs;
  public array $exterior;
  public array $interior;
  public array $properties;
  public array $content;
  public Review $review;

  public function __construct(
    string $id,
    string $title,
    string $description,
    string $image,
    string $background,
    array $briefs,
    array $exterior,
    array $interior,
    array $properties,
    array $content,
    Review $review
  ) {
    $this->id = $id;
    $this->title = $title;
    $this->description = $description;
    $this->image = $image;
    $this->background = $background;
    $this->briefs = $briefs;
    $this->exterior = $exterior;
    $this->interior = $interior;
    $this->properties = $properties;
    $this->content = $content;
    $this->review = $review;
  }
}

class Brief
{
  public string $title;
  public string $value;

  public function __construct(string $title, string $value)
  {
    $this->title = $title;
    $this->value = $value;
  }
}

class AlbumItem
{
  public string $imageLink;
  public string $header;
  public string $description;

  public function __construct(string $imageLink, string $header, string $description)
  {
    $this->imageLink = $imageLink;
    $this->header = $header;
    $this->description = $description;
  }
}

class Property
{
  public string $svgLink;
  public string $title;
  public string $value;

  public function __construct(string $svgLink, string $title, string $value)
  {
    $this->svgLink = $svgLink;
    $this->title = $title;
    $this->value = $value;
  }
}

class ContentItem
{
  public string $title;
  public string $body;
  public string $imageLink;

  public function __construct(string $title, string $body, string $imageLink)
  {
    $this->title = $title;
    $this->body = $body;
    $this->imageLink = $imageLink;
  }
}

class Review
{
  public string $name;
  public bool $isMale;
  public string $age;
  public string $placement;
  public string $feedback;

  public function __construct(string $name, bool $isMale, string $age, string $placement, string $feedback)
  {
    $this->name = $name;
    $this->isMale = $isMale;
    $this->age = $age;
    $this->placement = $placement;
    $this->feedback = $feedback;
  }
}
