<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Patient extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Patient::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'first_name' ;

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','name',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('First Patient Name','first_name')->rules('required'),
            Text::make('Last Patient Name','last_name')->rules('required'),
            Text::make('Patient Phone Number','phone_number')->rules('required'),
            Text::make('Patient Age','age')->rules('required'),
            Select::make('Marital Status','marital_status')->options([
                "m"=>"married", "s"=>"single",
                ])->displayUsingLabels(),
            Select::make('Patient Gender','gender')->options([
                "m"=>"Male", "f"=>"Female",
                ])->displayUsingLabels(),
            HasMany::make('Operation','opreation',Operation::class)->rules('required'),
            HasMany::make('Payment','payment',Payment::class)->rules('required'),
            HasMany::make('Appointment','appointment',Appointment::class)->rules('required'),
            BelongsToMany::make('Doctor','doctor',Doctor::class),
            BelongsTo::make('User','user',User::class),
            BelongsTo::make('Hospital','hospital',Hospital::class),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
