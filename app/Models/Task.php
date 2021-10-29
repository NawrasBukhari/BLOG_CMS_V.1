<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $fillable = [
        'title',
        'description',
        'author',
        'logo',
        'section_1_title',
        'section_1_span',
        'section_1_a1',
        'section_1_paragraph',
        'section_2_title',
        'section_2_paragraph',
        'section_3_title',
        'section_3_paragraph',
        'section_3_card_1',
        'section_3_card_1_p1',
        'section_3_card_2',
        'section_3_card_3',
        'section_3_card_3_p3',
        'section_3_card_4',
        'section_3_card_4_p4',
        'section_3_card_5',
        'section_3_card_5_p5',
        'section_3_card_6',
        'section_3_card_6_p6',
        'section_4_title',
        'section_4_paragraph',
        'section_4_card_1_title',
        'section_4_card_1_paragraph',
        'section_4_card_2_title',
        'section_4_card_2_paragraph',
        'section_4_card_3_title',
        'section_4_card_3_paragraph',
        'section_5_title',
        'section_5_subtitle',
        'section_5_paragraph',
        'instagram_link',
        'whatsapp_link',
        'telegram_link',
        'github_link',
        'footer_text',
    ];
}
