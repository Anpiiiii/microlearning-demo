<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::Create([
            'name_en' => 'How a company earns money?',
            'name_mm' => 'ကုမ္ပဏီတစ်ခုက ဘယ်လိုငွေရှာမလဲ။',
            'course_id' => 1
        ]);
        Question::Create([
            'name_en' => 'A company manufacture steel sheets to another automobile company. Which industry is the steel manufacturing company a part of?',
            'name_mm' => 'Administration ဌာန (Admin)',
            'course_id' => 1
        ]);
        Question::Create([
            'name_en' => 'Whatever is left from revenue after the spends is the actual income of the company, which is also known as:',
            'name_mm' => 'ကုမ္ပဏီတစ်ခုသည် အခြားမော်တော်ကားကုမ္ပဏီသို့ စတီးလ်ပြားများ ထုတ်လုပ်သည်။ မည်သည့်စက်မှုလုပ်ငန်းသည် သံမဏိထုတ်လုပ်ရေးကုမ္ပဏီ၏ အစိတ်အပိုင်းဖြစ်သနည်း။',
            'course_id' => 1
        ]);
        Question::Create([
            'name_en' => 'Role of Financial Controllers in a business organization is:',
            'name_mm' => 'လုပ်ငန်းအဖွဲ့အစည်းတစ်ခုတွင် ငွေကြေးထိန်းချုပ်သူများ၏ အခန်းကဏ္ဍမှာ',
            'course_id' => 1
        ]);
        Question::Create([
            'name_en' => 'What are the common activities of finance teams in a business organization:',
            'name_mm' => 'စီးပွားရေးလုပ်ငန်းအဖွဲ့အစည်းတစ်ခုရှိ ဘဏ္ဍာရေးအဖွဲ့များ၏ ဘုံလုပ်ဆောင်ချက်များမှာ အဘယ်နည်း။',
            'course_id' => 1
        ]);
        Question::Create([
            'name_en' => 'Role of Financial Controllers in a business organization is:',
            'name_mm' => 'လုပ်ငန်းအဖွဲ့အစည်းတစ်ခုတွင် ငွေကြေးထိန်းချုပ်သူများ၏ အခန်းကဏ္ဍမှာ',
            'course_id' => 1
        ]);

        Question::Create([
            'name_en' => 'Administration department is not responsible for:',
            'name_mm' => 'အုပ်ချုပ်ရေးဌာနသည် အောက်ပါတို့အတွက် တာဝန်မရှိပါ။',
            'course_id' => 2
        ]);
        Question::Create([
            'name_en' => 'Infrastructure management, under admin department includes:',
            'name_mm' => 'စီမံခန့်ခွဲရေးဌာနလက်အောက်ရှိ အခြေခံအဆောက်အအုံစီမံခန့်ခွဲမှု အခန်းကဏ္ဍမှာ',
            'course_id' => 2
        ]);
        Question::Create([
            'name_en' => 'Annual Maintenance Contract is :',
            'name_mm' => 'နှစ်စဉ်ထိန်းသိမ်းခြင်းဆိုင်ရာ စာချုပ်မှာ',
            'course_id' => 2
        ]);
        Question::Create([
            'name_en' => 'Role of Admin personnel in a business includes:',
            'name_mm' => 'လုပ်ငန်းတစ်ခုတွင် စီမံခန့်ခွဲရေးဝန်ထမ်းများ၏ အခန်းကဏ္ဍမှာ',
            'course_id' => 2
        ]);
        Question::Create([
            'name_en' => 'What is SLA:',
            'name_mm' => 'SLA ဆိုတာဘာလဲ။',
            'course_id' => 2
        ]);
        Question::Create([
            'name_en' => 'Admin department may work with other departments:',
            'name_mm' => 'စီမံခန့်ခွဲရေးဌာနသည် အခြားဌာနများနှင့် အလုပ်လုပ်နိုင်သည်။',
            'course_id' => 2
        ]);
        Question::Create([
            'name_en' => 'Administration department expenses are not budgeted:',
            'name_mm' => 'စီမံခန့်ခွဲရေးဌာန၏ အသုံးစရိတ်များကို ဘတ်ဂျက်မသတ်မှတ်ထားပေ။',
            'course_id' => 2
        ]);

    }
}
