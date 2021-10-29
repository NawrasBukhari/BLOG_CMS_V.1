<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateTaskRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title'     => [
                'string',
            ],
            'description'    => [
                'string',
            ],
            'author' => [
                'string',
            ],
            'logo'  => [
                'string',
            ],
            'section_1_title'    => [
                'string',
            ],
            'section_1_span'     => [
                'string',
            ],
            'section_1_a1'    => [
                'string',
            ],
            'section_1_paragraph' => [
                'string',
            ],
            'section_2_title'  => [
                'string',
            ],
            'section_2_paragraph'    => [
                'string',
            ],
            'section_3_title'     => [
                'string',
            ],
            'section_3_paragraph'    => [
                'string',
            ],
            'section_3_card_1' => [
                'string',
            ],
            'section_3_card_1_p1'  => [
                'string',
            ],
            'section_3_card_2'    => [
                'string',
            ],
            'section_3_card_3'     => [
                'string',
            ],
            'section_3_card_4'    => [
                'string',
            ],
            'section_3_card_4_p4' => [
                'string',
            ],
            'section_3_card_5'  => [
                'string',
            ],
            'section_3_card_5_p5'    => [
                'string',
            ],
            'section_3_card_6'     => [
                'string',
            ],
            'section_3_card_6_p6'    => [
                'string',
            ],
            'section_4_title' => [
                'string',
            ],
            'section_4_paragraph'  => [
                'string',
            ],
            'section_4_card_1_title'    => [
                'string',
            ],
            'section_4_card_1_paragraph'     => [
                'string',
            ],
            'section_4_card_2_title'    => [
                'string',
            ],
            'section_4_card_2_paragraph' => [
                'string',
            ],
            'section_4_card_3_title'  => [
                'string',
            ],
            'section_4_card_3_paragraph'    => [
                'string',
            ],
            'section_5_title'     => [
                'string',
            ],
            'section_5_subtitle'    => [
                'string',
            ],
            'section_5_paragraph' => [
                'string',
            ],
            'instagram_link'     => [
                'string',
            ],
            'whatsapp_link'    => [
                'string',
            ],
            'telegram_link' => [
                'string',
            ],
            'github_link'  => [
                'string',
            ],
            'footer_text'    => [
                'string',
            ],
        ];
    }

    public function authorize()
    {

        return Gate::allows('task_access');
    }
}
