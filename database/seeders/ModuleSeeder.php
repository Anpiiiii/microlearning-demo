<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::Create([
            'name_en' => 'What is Finance for Business',
            'name_mm' => 'စီးပွားရေးအတွက် ဘဏ္ဍာရေးဆိုတာ ဘာလဲ။',
            'course_id' => 1
        ]);
        Module::Create([
            'name_en' => 'Understanding the role of finance',
            'name_mm' => 'ငွေကြေး၏ အခန်းကဏ္ဍကို နားလည်ခြင်း။',
            'course_id' => 1
        ]);
        Module::Create([
            'name_en' => 'Common Activities  for finance personnel',
            'name_mm' => 'ငွေရေးကြေးရေးဝန်ထမ်းများအတွက် ယေဘုယျလှုပ်ရှားမှုများ',
            'course_id' => 1
        ]);
        Module::Create([
            'name_en' => 'Business Finance Help guide for job aspirants',
            'name_mm' => 'အလုပ်အကိုင်ရှာဖွေလိုသူများအတွက် စီးပွားရေးဘဏ္ဍာရေးအကူအညီလမ်းညွှန်',
            'course_id' => 1
        ]);

        Module::Create([
            'name_en' => 'Administration Department (Admin)',
            'name_mm' => 'Administration ဌာန (Admin)',
            'course_id' => 2
        ]);
        Module::Create([
            'name_en' => 'Understanding the role of Admin Department',
            'name_mm' => 'စီမံခန့်ခွဲရေးဌာန၏ အခန်းကဏ္ဍကို နားလည်ခြင်း။',
            'course_id' => 2
        ]);
        Module::Create([
            'name_en' => 'Common activities  for Admin personnel',
            'name_mm' => 'Admin ဝန်ထမ်းများအတွက် ယေဘုယျလှုပ်ရှားမှုများ',
            'course_id' => 2
        ]);
        Module::Create([
            'name_en' => 'Commonly Used terms for Admin',
            'name_mm' => 'Admin အတွက် အသုံးများသော အသုံးအနှုန်းများ',
            'course_id' => 2
        ]);

        Module::Create([
            'name_en' => 'Information Technology (IT)',
            'name_mm' => 'သတင်းအချက်အလက်နည်းပညာ (IT)',
            'course_id' => 3
        ]);
        Module::Create([
            'name_en' => 'Understanding the role of IT',
            'name_mm' => 'IT ၏အခန်းကဏ္ဍကိုနားလည်ခြင်း',
            'course_id' => 3
        ]);
        Module::Create([
            'name_en' => 'Common Activities for IT personnel',
            'name_mm' => 'IT ဝန်ထမ်းများအတွက် အသုံးများသော လုပ်ဆောင်ချက်များ',
            'course_id' => 3
        ]);
        Module::Create([
            'name_en' => 'Commonly Used terms in IT',
            'name_mm' => 'IT တွင် အသုံးများသော အသုံးအနှုန်းများ',
            'course_id' => 3
        ]);

        Module::Create([
            'name_en' => 'Sales and Marketing',
            'name_mm' => 'အရောင်းနှင့်စျေးကွက်ရှာဖွေရေး',
            'course_id' => 4
        ]);
        Module::Create([
            'name_en' => 'Understanding the role of  a Sales and Marketing person',
            'name_mm' => 'Sales and Marketing ၏ အခန်းကဏ္ဍကို နားလည်ခြင်း',
            'course_id' => 4
        ]);
        Module::Create([
            'name_en' => 'Sales and Marketing Expenses',
            'name_mm' => 'အရောင်းနှင့်စျေးကွက်ကုန်ကျစရိတ်',
            'course_id' => 4
        ]);
        Module::Create([
            'name_en' => 'Commonly Used Terms in Sales and Marketing',
            'name_mm' => 'အရောင်းနှင့် စျေးကွက်တွင် အသုံးများသော စည်းမျဥ်းများ',
            'course_id' => 4
        ]);
    }
}
