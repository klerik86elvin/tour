<?php

namespace App\Nova;

use Benjacho\BelongsToManyField\BelongsToManyField;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Spatie\NovaTranslatable\Translatable;

class Tour extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Tour::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Images::make('image', 'main'),
            BelongsTo::make('tour type', 'tourType', TourType::class),
            BelongsTo::make('room type', 'roomType', RoomType::class),
            BelongsTo::make('pax', 'pax', Pax::class),
            Translatable::make([
                Text::make('name'),
            ]),
            Translatable::make([
                Text::make('options'),
            ]),
            Translatable::make([
                Textarea::make('inclusions')
            ]),
            Translatable::make([
                Textarea::make('exclusions')
            ]),
            Translatable::make([
                Text::make('days')
            ]),
            Currency::make('price'),
            BelongsToManyField::make('hotels', 'hotels', 'App\Nova\Hotel')->optionsLabel(
                'label'
            ),
            DateTime::make('date')->format('DD.MM.Y'),
            HasMany::make('daily plan', 'dailyPlans', DailyPlan::class)
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
