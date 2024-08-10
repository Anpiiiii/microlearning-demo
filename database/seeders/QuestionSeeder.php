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
            'course_id' => 4
        ]);
        Question::Create([
            'name_en' => 'Infrastructure management, under admin department includes:',
            'name_mm' => 'စီမံခန့်ခွဲရေးဌာနလက်အောက်ရှိ အခြေခံအဆောက်အအုံစီမံခန့်ခွဲမှု အခန်းကဏ္ဍမှာ',
            'course_id' => 4
        ]);
        Question::Create([
            'name_en' => 'Annual Maintenance Contract is :',
            'name_mm' => 'နှစ်စဉ်ထိန်းသိမ်းခြင်းဆိုင်ရာ စာချုပ်မှာ',
            'course_id' => 4
        ]);
        Question::Create([
            'name_en' => 'Role of Admin personnel in a business includes:',
            'name_mm' => 'လုပ်ငန်းတစ်ခုတွင် စီမံခန့်ခွဲရေးဝန်ထမ်းများ၏ အခန်းကဏ္ဍမှာ',
            'course_id' => 4
        ]);
        Question::Create([
            'name_en' => 'What is SLA:',
            'name_mm' => 'SLA ဆိုတာဘာလဲ။',
            'course_id' => 4
        ]);
        Question::Create([
            'name_en' => 'Admin department may work with other departments:',
            'name_mm' => 'စီမံခန့်ခွဲရေးဌာနသည် အခြားဌာနများနှင့် အလုပ်လုပ်နိုင်သည်။',
            'course_id' => 4
        ]);
        Question::Create([
            'name_en' => 'Administration department expenses are not budgeted:',
            'name_mm' => 'စီမံခန့်ခွဲရေးဌာန၏ အသုံးစရိတ်များကို ဘတ်ဂျက်မသတ်မှတ်ထားပေ။',
            'course_id' => 4
        ]);



        Question::Create([
            'name_en' => 'IT refers to which of these below:',
            'name_mm' => 'IT သည် ဤအရာများထဲမှ မည်သည့်အရာကို ရည်ညွှန်းသည်-',
            'course_id' => 2
        ]);
        Question::Create([
            'name_en' => 'IT Vendor Management personnel :',
            'name_mm' => 'IT Vendor Management ဝန်ထမ်းများ',
            'course_id' => 2
        ]);
        Question::Create([
            'name_en' => 'Which of these below cannot be a part of Service Level Agreements for a software purchase:',
            'name_mm' => 'ဆော့ဖ်ဝဲဝယ်ယူမှုအတွက် ဝန်ဆောင်မှုအဆင့် သဘောတူညီချက်များ၏ အစိတ်အပိုင်းတစ်ခုအဖြစ် အောက်ပါတို့အနက်မှ တစ်ခုမဖြစ်နိုင်ပါ။',
            'course_id' => 2
        ]);
        Question::Create([
            'name_en' => 'Role of IT personnel in a business may not involve working on which of these below:',
            'name_mm' => 'လုပ်ငန်းတစ်ခုတွင် IT ဝန်ထမ်းများ၏ အခန်းကဏ္ဍသည် အောက်ပါတို့အနက်မှ မည်သည့်အရာများကို လုပ်ဆောင်ခြင်းမှ ပါဝင်မည်မဟုတ်ပါ။',
            'course_id' => 2
        ]);
        Question::Create([
            'name_en' => 'Software developer and hardware vendors are also referred as:',
            'name_mm' => 'ဆော့ဖ်ဝဲတီထွင်သူနှင့် ဟာ့ဒ်ဝဲရောင်းချသူများကိုလည်း ရည်ညွှန်းသည်-',
            'course_id' => 2
        ]);
        Question::Create([
            'name_en' => 'Due to 24/7 use IT systems and software with exposure to internet, which branch of IT has become very important for companies in recent years. :',
            'name_mm' => 'အိုင်တီစနစ်များနှင့် ဆော့ဖ်ဝဲလ်များကို အင်တာနက်နှင့် ထိတွေ့မှုရှိသော 24/7 အသုံးပြုခြင်းကြောင့် မကြာသေးမီနှစ်များအတွင်း ကုမ္ပဏီများအတွက် အလွန်အရေးကြီးသော IT ဌာနခွဲဖြစ်လာခဲ့သည်။ :',
            'course_id' => 2
        ]);





        Question::Create([
            'name_en' => 'What is the process of taking products and/or delivering the services to the right customer :',
            'name_mm' => 'ထုတ်ကုန်များရယူခြင်းနှင့်/သို့မဟုတ် မှန်ကန်သောဖောက်သည်ထံသို့ ဝန်ဆောင်မှုများပေးအပ်ခြင်း၏လုပ်ငန်းစဉ်သည် အဘယ်နည်း။',
            'course_id' => 3
        ]);
        Question::Create([
            'name_en' => 'Informing companies/customers/business partners about your products and services :',
            'name_mm' => 'သင့်ထုတ်ကုန်များနှင့် ဝန်ဆောင်မှုများအကြောင်း ကုမ္ပဏီ/ဖောက်သည်များ/စီးပွားရေးလုပ်ဖော်ကိုင်ဖက်များအား အသိပေးခြင်း-',
            'course_id' => 3
        ]);
        Question::Create([
            'name_en' => 'Many companies refer to combination of Sales and Marketing Costs as :',
            'name_mm' => 'ကုမ္ပဏီများစွာသည် အရောင်းနှင့် စျေးကွက်ရှာဖွေရေးကုန်ကျစရိတ်များ ပေါင်းစပ်ခြင်းကို ရည်ညွှန်းသည်-',
            'course_id' => 3
        ]);
        Question::Create([
            'name_en' => 'A Sales personnel in a business may not be involved in which of these below:',
            'name_mm' => 'လုပ်ငန်းတစ်ခုရှိ အရောင်းဝန်ထမ်းတစ်ဦးသည် အောက်ပါအရာများထဲတွင် ပါဝင်မည်မဟုတ်ပါ။',
            'course_id' => 3
        ]);
        Question::Create([
            'name_en' => 'A B2B and a B2C company will have same set of customers',
            'name_mm' => 'B2B နှင့် B2C ကုမ္ပဏီတစ်ခုတွင် တူညီသော ဖောက်သည်များ ရှိသည်။',
            'course_id' => 3
        ]);
        Question::Create([
            'name_en' => 'Selling opportunities under discussion with new or existing customers which may result in actuals sales and revenues  is known as sales pipeline',
            'name_mm' => 'အမှန်တကယ်ရောင်းချမှုနှင့် ၀င်ငွေများကို အရောင်းပိုက်လိုင်းဟု လူသိများသည့် ဖောက်သည်အသစ် သို့မဟုတ် ရှိပြီးသား ဖောက်သည်များနှင့် ဆွေးနွေးမှုအောက်တွင် အခွင့်အလမ်းများကို ရောင်းချခြင်း။',
            'course_id' => 3
        ]);
        Question::Create([
            'name_en' => '“Above the Line” marketing, which refers to a form of marketing that targets a wide audience through mass media such as television, radio, and newspapers',
            'name_mm' => '"Above the Line" မားကတ်တင်းသည် ရုပ်မြင်သံကြား၊ ရေဒီယိုနှင့် သတင်းစာများကဲ့သို့ ကျယ်ပြန့်သော ပရိသတ်များကို ပစ်မှတ်ထားသည့် စျေးကွက်ရှာဖွေမှုပုံစံကို ရည်ညွှန်းသည်။',
            'course_id' => 3
        ]);

    }
}
