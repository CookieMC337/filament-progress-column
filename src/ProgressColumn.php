<?php

namespace CookieMC337\FilamentProgressColumn;

use Closure;
use Filament\Tables\Columns\Column;

class ProgressColumn extends Column
{
    protected string $view = 'filament-progress-column::column';

    protected string | Closure $color = 'primary';

    protected ?Closure $progress = null;

    protected string | Closure | null $poll = null;

    public function color(string | Closure $callback): static
    {
        $this->color = $callback;

        return $this;
    }

    public function getColor(): string
    {
        return $this->evaluate($this->color);
    }

    public function progress(int | Closure $callback): static
    {
        $this->progress = $callback;

        return $this;
    }

    public function getProgress(): int|float
    {
        if ($this->progress === null) {
            return floor($this->getStateFromRecord());
        }

        return $this->evaluate($this->progress);
    }

    public function title(string | Closure $callback): static
    {
        $this->title = $callback;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->evaluate($this->title);
    }

    public function usageValue(string | Closure $callback): static
    {
        $this->usageValue = $callback;

        return $this;
    }

    public function getUsageValue(): string
    {
        return $this->evaluate($this->usageValue);
    }

    public function usageValue(string | Closure $callback): static
    {
        $this->freeValue = $callback;

        return $this;
    }

    public function getFreeValue(): string
    {
        return $this->evaluate($this->freeValue);
    }


    public function poll(string | Closure $duration): static
    {
        $this->poll = $duration;

        return $this;
    }

    public function getPoll(): ?string
    {
        return $this->evaluate($this->poll);
    }
}
