<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Http\Requests\NovaRequest;

class CreateProject extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        info($fields);
    }

    /**
     * Get the fields available on the action.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        $model = $request->selectedResources()?->first() ?? $this->model;

        return [
            Number::make('Car parking price')
                ->rules(Rule::requiredIf(fn () => $model->car_parking))
                ->canSee(fn ($request) => $model->car_parking),

            Number::make('Moto parking price')
                ->rules(Rule::requiredIf(fn () => $model->moto_parking))
                ->canSee(fn ($request) => $model->moto_parking),
        ];
    }
}
