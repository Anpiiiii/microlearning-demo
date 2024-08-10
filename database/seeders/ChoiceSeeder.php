<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Choice;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::Create([
            'name_en' => 'By selling products to another company or user',
            'name_mm' => 'အခြားကုမ္ပဏီ သို့မဟုတ် အသုံးပြုသူထံသို့ ထုတ်ကုန်များကို ရောင်းချခြင်း',
            'question_id' => 1
        ]);
        Choice::Create([
            'name_en' => 'By providing services to another company or user',
            'name_mm' => 'အခြားကုမ္ပဏီ သို့မဟုတ် အသုံးပြုသူအား ဝန်ဆောင်မှုများပေးခြင်း',
            'question_id' => 1
        ]);
        Choice::Create([
            'name_en' => 'Both Above',
            'name_mm' => 'အထက်ပါနှစ်ခုစလုံး',
            'question_id' => 1
        ]);
        Choice::Create([
            'name_en' => 'None of the Above',
            'name_mm' => 'အထက်ဖော်ပြပါတစ်ခုမှမဟုတ်ပါ',
            'question_id' => 1
        ]);

        Choice::Create([
            'name_en' => 'Software Industry',
            'name_mm' => 'Software Industry',
            'question_id' => 2
        ]);
        Choice::Create([
            'name_en' => 'Telecom Industry',
            'name_mm' => 'Telecom Industry',
            'question_id' => 2
        ]);
        Choice::Create([
            'name_en' => 'Metals and Mining Industry',
            'name_mm' => 'Metals and Mining Industry',
            'question_id' => 2
        ]);
        Choice::Create([
            'name_en' => 'Automobile Industry',
            'name_mm' => 'Automobile Industry',
            'question_id' => 2
        ]);

        Choice::Create([
            'name_en' => 'Profit',
            'name_mm' => 'အမြတ်အစွန်း',
            'question_id' => 3
        ]);
        Choice::Create([
            'name_en' => 'Revenues',
            'name_mm' => 'ရရှိသောဘဏ္ဍာငွေ',
            'question_id' => 3
        ]);
        Choice::Create([
            'name_en' => 'Invoices',
            'name_mm' => 'ပြေစာများ',
            'question_id' => 3
        ]);
        Choice::Create([
            'name_en' => 'None of the above',
            'name_mm' => 'အထက်ဖော်ပြပါတစ်ခုမှမဟုတ်ပါ',
            'question_id' => 3
        ]);

        Choice::Create([
            'name_en' => 'Invoice Management',
            'name_mm' => 'ငွေတောင်းခံလွှာစီမံခန့်ခွဲမှု',
            'question_id' => 4
        ]);
        Choice::Create([
            'name_en' => 'Contract Management',
            'name_mm' => 'စာချုပ်စီမံခန့်ခွဲမှု',
            'question_id' => 4
        ]);
        Choice::Create([
            'name_en' => 'Acting as gatekeeper and focusing on revenues and spends ensuring revenues are earned legally, taxes are paid, and expenditure is within budgets',
            'name_mm' => 'ဂိတ်စောင့်အဖြစ်ဆောင်ရွက်ကာ ၀င်ငွေများတရားဝင်ရရှိကြောင်းသေချာစေရန် ၀င်ငွေနှင့်အသုံးစရိတ်များကို အာရုံစိုက်ကာ အခွန်ပေးဆောင်ကာ အသုံးစရိတ်များသည် ဘတ်ဂျက်အတွင်းတွင်ရှိနေပါသည်။',
            'question_id' => 4
        ]);
        
        Choice::Create([
            'name_en' => 'Invoice Management',
            'name_mm' => 'ငွေတောင်းခံလွှာစီမံခန့်ခွဲမှု',
            'question_id' => 5
        ]);
        Choice::Create([
            'name_en' => 'Contract Management',
            'name_mm' => 'စာချုပ်စီမံခန့်ခွဲမှု',
            'question_id' => 5
        ]);
        Choice::Create([
            'name_en' => 'Investment Management',
            'name_mm' => 'ရင်းနှီးမြှုပ်နှံမှု စီမံခန့်ခွဲမှု',
            'question_id' => 5
        ]);
        Choice::Create([
            'name_en' => 'None of the above',
            'name_mm' => 'အထက်ဖော်ပြပါတစ်ခုမှမဟုတ်ပါ',
            'question_id' => 5
        ]);

        Choice::Create([
            'name_en' => 'Invoice Management',
            'name_mm' => 'ငွေတောင်းခံလွှာစီမံခန့်ခွဲမှု',
            'question_id' => 6
        ]);
        Choice::Create([
            'name_en' => 'Contract Management',
            'name_mm' => 'စာချုပ်စီမံခန့်ခွဲမှု',
            'question_id' => 6
        ]);
        Choice::Create([
            'name_en' => 'Acting as gatekeeper and keeps an eye on revenues and spends ensuring revenues are earned legally/taxes are paid/budget the expenditure',
            'name_mm' => 'ဂိတ်စောင့်အဖြစ်ဆောင်ရွက်ကာ ၀င်ငွေနှင့်အသုံးစရိတ်များကို စောင့်ကြည့်ကာ ၀င်ငွေများတရားဝင်ရရှိခြင်း/အခွန်များပေးဆောင်ခြင်း/ အသုံးစရိတ်များကို ဘဏ္ဍာငွေအဖြစ် ထားရှိပေးခြင်း။',
            'question_id' => 6
        ]);



        Choice::Create([
            'name_en' => 'Selling company products',
            'name_mm' => 'ကုမ္ပဏီထုတ်ကုန်များရောင်းချခြင်း။',
            'question_id' => 7
        ]);
        Choice::Create([
            'name_en' => 'Infrastructure Management',
            'name_mm' => 'အခြေခံအဆောက်အဦစီမံခန့်ခွဲမှု',
            'question_id' => 7
        ]);
        Choice::Create([
            'name_en' => 'Non-IT Asset Management',
            'name_mm' => 'အိုင်တီမဟုတ်သော ပိုင်ဆိုင်မှုစီမံခန့်ခွဲမှု',
            'question_id' => 7
        ]);
        Choice::Create([
            'name_en' => 'All the above',
            'name_mm' => 'အထက်ပါနှစ်ခုစလုံး',
            'question_id' => 7
        ]);

        Choice::Create([
            'name_en' => 'Maintenance and upkeep of office premises',
            'name_mm' => 'ရုံးခန်းများ ပြုပြင်ထိန်းသိမ်းခြင်း။',
            'question_id' => 8
        ]);
        Choice::Create([
            'name_en' => 'Managing software and hardware',
            'name_mm' => 'Software နှင့် Hardware များကို စီမံခန့်ခွဲခြင်း။',
            'question_id' => 8
        ]);
        Choice::Create([
            'name_en' => 'Payment of Invoices',
            'name_mm' => 'ငွေပေးချေမှုများ',
            'question_id' => 8
        ]);
        Choice::Create([
            'name_en' => 'None of the Above',
            'name_mm' => 'အထက်ဖော်ပြပါတစ်ခုမှမဟုတ်ပါ',
            'question_id' => 8
        ]);

        Choice::Create([
            'name_en' => 'Yearly contract',
            'name_mm' => 'နှစ်အလိုက် စာချုပ်',
            'question_id' => 9
        ]);
        Choice::Create([
            'name_en' => 'May include Service Level Agreements',
            'name_mm' => 'ဝန်ဆောင်မှုအဆင့် သဘောတူညီချက်များ ပါဝင်နိုင်သည်။',
            'question_id' => 9
        ]);
        Choice::Create([
            'name_en' => 'Takes care of maintenance of company assets',
            'name_mm' => 'ကုမ္ပဏီ၏ပိုင်ဆိုင်မှုများကို ဂရုစိုက်ထိန်းသိမ်း',
            'question_id' => 9
        ]);
        Choice::Create([
            'name_en' => 'All the above',
            'name_mm' => 'အထက်ပါနှစ်ခုစလုံး',
            'question_id' => 9
        ]);

        Choice::Create([
            'name_en' => 'Non-IT vendor management',
            'name_mm' => 'အိုင်တီမဟုတ်သော ရောင်းချသူစီမံခန့်ခွဲမှု',
            'question_id' => 10
        ]);
        Choice::Create([
            'name_en' => 'Software Upgrades',
            'name_mm' => 'Software အဆင့်မြှင့်တင်မှုများ',
            'question_id' => 10
        ]);
        Choice::Create([
            'name_en' => 'Securing from cyber attacks from internet',
            'name_mm' => 'အင်တာနက်မှ ဆိုက်ဘာတိုက်ခိုက်မှုများမှ လုံခြုံစေခြင်း။',
            'question_id' => 10
        ]);
        Choice::Create([
            'name_en' => 'Managing company operations',
            'name_mm' => 'ကုမ္ပဏီလုပ်ငန်းများကို စီမံခန့်ခွဲခြင်း။',
            'question_id' => 10
        ]);

        Choice::Create([
            'name_en' => 'Service Legislative Agreements',
            'name_mm' => 'ဝန်ဆောင်မှုဥပဒေပြုသဘောတူညီချက်များ',
            'question_id' => 11
        ]);
        Choice::Create([
            'name_en' => 'Service Level Agreements',
            'name_mm' => 'ဝန်ဆောင်မှုအဆင့် သဘောတူညီချက်များ',
            'question_id' => 11
        ]);
        Choice::Create([
            'name_en' => 'Social Leasing Agreement',
            'name_mm' => 'လူမှုအငှားစာချုပ်',
            'question_id' => 11
        ]);
        Choice::Create([
            'name_en' => 'None of the Above',
            'name_mm' => 'အထက်ဖော်ပြပါတစ်ခုမှမဟုတ်ပါ',
            'question_id' => 11
        ]);

        Choice::Create([
            'name_en' => 'True',
            'name_mm' => 'မှန်တယ်။',
            'question_id' => 12
        ]);
        Choice::Create([
            'name_en' => 'False',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 12
        ]);

        Choice::Create([
            'name_en' => 'True',
            'name_mm' => 'မှန်တယ်။',
            'question_id' => 13
        ]);
        Choice::Create([
            'name_en' => 'False',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 13
        ]);

        Choice::Create([
            'name_en' => 'Managing information flow',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 14
        ]); 
        Choice::Create([
            'name_en' => 'Developing software',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 14
        ]); 
        Choice::Create([
            'name_en' => 'Managing Annual Maintenance Contract',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 14
        ]); 
        Choice::Create([
            'name_en' => 'All the above',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 14
        ]);

        Choice::Create([
            'name_en' => 'Involves in buying software and hardware',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 15
        ]);
        Choice::Create([
            'name_en' => 'Selling software and Hardware',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 15
        ]);
        Choice::Create([
            'name_en' => 'Manage Uptime',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 15
        ]);
        Choice::Create([
            'name_en' => 'None of the Above',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 15
        ]);

        Choice::Create([
            'name_en' => '99.5% Uptime',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 16
        ]);Choice::Create([
            'name_en' => '24*5 days Support',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 16
        ]);Choice::Create([
            'name_en' => 'Resolution of any issue with 36 hours',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 16
        ]);Choice::Create([
            'name_en' => 'None of the Above',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 16
        ]);

        Choice::Create([
            'name_en' => 'OEM Management',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 17
        ]);
        Choice::Create([
            'name_en' => 'Software Upgrades ',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 17
        ]);
        Choice::Create([
            'name_en' => 'Securing from cyber attacks from internet',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 17
        ]);
        Choice::Create([
            'name_en' => 'Managing company operations',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 17
        ]);

        Choice::Create([
            'name_en' => 'IT personnel',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 18
        ]);
        Choice::Create([
            'name_en' => 'Customers',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 18
        ]);
        Choice::Create([
            'name_en' => 'Contracts',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 18
        ]);
        Choice::Create([
            'name_en' => 'Original Equipment Manufacturer(OEM)',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 18
        ]);

        Choice::Create([
            'name_en' => 'Patch Management',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 19
        ]);
        Choice::Create([
            'name_en' => 'Hardware maintenance ',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 19
        ]);
        Choice::Create([
            'name_en' => 'Cybersecurity',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 19
        ]);
        Choice::Create([
            'name_en' => 'Data storage in servers',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 19
        ]);
    }
}
