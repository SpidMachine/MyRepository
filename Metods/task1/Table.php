<?php

class Table
{


    public function clear(): self
    {
        $this->style = '';
        $this->data = '';
        return $this;
    }

    public function id(string $id): self
    {
        $this->id = " id='$id'";
        return $this;
    }

    public function class(string $class): self
    {
        $this->class = " class='$class'";
        return $this;
    }

    public function style(string $style): self
    {
        $this->style = " style='$style'";
        return $this;
    }

    public function innerText(string $innerText): self
    {
        $this->innerText = $innerText;
        return $this;
    }
}
