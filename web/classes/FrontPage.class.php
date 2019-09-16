<?php

// A test class, to test the spl_autoload_register
Class FrontPage {
  protected $heading1;
  protected $h2_first;
  protected $h2_second;
  protected $para_first;
  protected $para_second;

  public function printHeading1(string $heading1): string {
    $this->heading1 = $heading1;
    return $this->heading1;
  }

  public function printH2First(string $h2_first): string {
    $this->h2_first = $h2_first;
    return $this->h2_first;
  }

  public function printH2Second(string $h2_second): string {
    $this->h2_second = $h2_second;
    return $this->h2_second;
  }

  public function printParaFirst(string $para_first): string {
    $this->para_first = $para_first;
    return $this->para_first;
  }

  public function printParaSecond(string $para_second): string {
    $this->para_second = $para_second;
    return $this->para_second;
  }

}

 ?>
