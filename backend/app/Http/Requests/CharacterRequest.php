<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'title' => 'required|string|unique',
            'description' => '',
            'name' => 'required|string|unique',
            'isHidden' => 'required|boolean'
        ];

        switch ($this->getMethod()) {
            case 'POST':
                return $rules;
            case 'PUT':
                return [
                    'character_id' => 'required|integer|exists:characters,id', //должен существовать. Можно вот так: unique:games,id,' . $this->route('game'),
                    'title' => [
                        'required',
                        Rule::unique('characters')->ignore($this->title, 'title') //должен быть уникальным, за исключением себя же
                    ]
                ] + $rules; // и берем все остальные правила
                // case 'PATCH':
            case 'DELETE':
                return [
                    'character_id' => 'required|integer|exists:characters,id'
                ];
        };
    }

    public function messages()
    {
        return [
            'date.required' => 'A date is required',
            'date.date_format'  => 'A date must be in format: Y-m-d',
            'date.unique'  => 'This date is already taken',
            'date.after_or_equal'  => 'A date must be after or equal today',
            'date.exists'  => 'This date doesn\'t exists',
        ];
    }

    public function all($keys = null)
    {
        // return $this->all();
        $data = parent::all($keys);
        switch ($this->getMethod()) {
                // case 'PUT':
                // case 'PATCH':
            case 'DELETE':
                $data['date'] = $this->route('day');
        }
        return $data;
    }
}
