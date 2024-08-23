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
            'name_mm' => 'သတင်းအချက်အလက်စီးဆင်းမှုကိုစီမံခန့်ခွဲမှု',
            'question_id' => 14
        ]); 
        Choice::Create([
            'name_en' => 'Developing software',
            'name_mm' => 'ဆော့ဖ်ဝဲကို တီထွင်ခြင်း။',
            'question_id' => 14
        ]); 
        Choice::Create([
            'name_en' => 'Managing Annual Maintenance Contract',
            'name_mm' => 'နှစ်စဉ်ထိန်းသိမ်းမှုစာချုပ်ကို စီမံခန့်ခွဲခြင်း။',
            'question_id' => 14
        ]); 
        Choice::Create([
            'name_en' => 'All the above',
            'name_mm' => 'အထက်ဖော်ပြပါအားလုံး',
            'question_id' => 14
        ]);

        Choice::Create([
            'name_en' => 'Involves in buying software and hardware',
            'name_mm' => 'ဆော့ဖ်ဝဲလ်နှင့် ဟာ့ဒ်ဝဲများ ဝယ်ယူရာတွင် ပါဝင်ပါသည်။',
            'question_id' => 15
        ]);
        Choice::Create([
            'name_en' => 'Selling software and Hardware',
            'name_mm' => 'Software နှင့် Hardware များရောင်းချပေးခြင်း',
            'question_id' => 15
        ]);
        Choice::Create([
            'name_en' => 'Manage Uptime',
            'name_mm' => 'အလုပ်ချိန်ကို စီမံပါ။',
            'question_id' => 15
        ]);
        Choice::Create([
            'name_en' => 'None of the Above',
            'name_mm' => 'အထက်ဖော်ပြပါတစ်ခုမှမဟုတ်ပါ',
            'question_id' => 15
        ]);

        Choice::Create([
            'name_en' => '99.5% Uptime',
            'name_mm' => '99.5% အလုပ်ချိန်',
            'question_id' => 16
        ]);Choice::Create([
            'name_en' => '24*5 days Support',
            'name_mm' => '24*5 ရက် ပံ့ပိုးမှု',
            'question_id' => 16
        ]);Choice::Create([
            'name_en' => 'Resolution of any issue with 36 hours',
            'name_mm' => 'မည်သည့်ပြဿနာကိုမဆို ၃၆ နာရီအတွင်း ဖြေရှင်းပေးသည်။',
            'question_id' => 16
        ]);Choice::Create([
            'name_en' => 'None of the Above',
            'name_mm' => 'အထက်ဖော်ပြပါတစ်ခုမှမဟုတ်ပါ',
            'question_id' => 16
        ]);


        Choice::Create([
            'name_en' => 'OEM Management',
            'name_mm' => 'OEM စီမံခန့်ခွဲမှု',
            'question_id' => 17
        ]);
        Choice::Create([
            'name_en' => 'Software Upgrades',
            'name_mm' => 'ဆော့ဖ်ဝဲလ် အဆင့်မြှင့်တင်မှုများ',
            'question_id' => 17
        ]);
        Choice::Create([
            'name_en' => 'Securing from cyber attacks from internet',
            'name_mm' => 'အင်တာနက်မှ ဆိုက်ဘာတိုက်ခိုက်မှုများမှ လုံခြုံစေခြင်း။',
            'question_id' => 17
        ]);
        Choice::Create([
            'name_en' => 'Managing company operations',
            'name_mm' => 'ကုမ္ပဏီလုပ်ငန်းများကို စီမံခန့်ခွဲခြင်း။',
            'question_id' => 17
        ]);


        Choice::Create([
            'name_en' => 'IT personnel',
            'name_mm' => 'အိုင်တီအမှုထမ်း',
            'question_id' => 18
        ]);
        Choice::Create([
            'name_en' => 'Customers',
            'name_mm' => 'ဖောက်သည်များ',
            'question_id' => 18
        ]);
        Choice::Create([
            'name_en' => 'Contracts',
            'name_mm' => 'စာချုပ်များ',
            'question_id' => 18
        ]);
        Choice::Create([
            'name_en' => 'Original Equipment Manufacturer(OEM)',
            'name_mm' => 'မူရင်းစက်ပစ္စည်းထုတ်လုပ်သူ (OEM)',
            'question_id' => 18
        ]);


        Choice::Create([
            'name_en' => 'Patch Management',
            'name_mm' => 'Patch စီမံခန့်ခွဲမှု',
            'question_id' => 19
        ]);
        Choice::Create([
            'name_en' => 'Hardware maintenance',
            'name_mm' => 'Hardware ထိန်းသိမ်းမှု',
            'question_id' => 19
        ]);
        Choice::Create([
            'name_en' => 'Cybersecurity',
            'name_mm' => 'ဆိုက်ဘာလုံခြုံရေး',
            'question_id' => 19
        ]);
        Choice::Create([
            'name_en' => 'Data storage in servers',
            'name_mm' => 'ဆာဗာများတွင် ဒေတာသိမ်းဆည်းခြင်း။',
            'question_id' => 19
        ]);


        Choice::Create([
            'name_en' => 'Marketing',
            'name_mm' => 'မားကတ်တင်း',
            'question_id' => 20
        ]);
        Choice::Create([
            'name_en' => 'Developing Software',
            'name_mm' => 'ဆော့ဖ်ဝဲကို ဖော်ဆောင်ခြင်း။',
            'question_id' => 20
        ]);
        Choice::Create([
            'name_en' => 'Sales',
            'name_mm' => 'အရောင်း',
            'question_id' => 20
        ]);
        Choice::Create([
            'name_en' => 'None of the above',
            'name_mm' => 'အထက်ဖော်ပြပါတစ်ခုမှမဟုတ်ပါ',
            'question_id' => 20
        ]);


        Choice::Create([
            'name_en' => 'Sales',
            'name_mm' => 'အရောင်း',
            'question_id' => 21
        ]);
        Choice::Create([
            'name_en' => 'Marketing',
            'name_mm' => 'မားကတ်တင်း',
            'question_id' => 21
        ]);
        Choice::Create([
            'name_en' => 'Finance Management',
            'name_mm' => 'ဘဏ္ဍာရေးစီမံခန့်ခွဲမှု',
            'question_id' => 21
        ]);
        Choice::Create([
            'name_en' => 'All of the above',
            'name_mm' => 'အားလုံး',
            'question_id' => 21
        ]);


        Choice::Create([
            'name_en' => 'Client Management Cost',
            'name_mm' => 'Client Management ကုန်ကျစရိတ်',
            'question_id' => 22
        ]);
        Choice::Create([
            'name_en' => 'Marketing Campaign Cost',
            'name_mm' => 'Marketing Campaign ကုန်ကျစရိတ်',
            'question_id' => 22
        ]);
        Choice::Create([
            'name_en' => 'Customer Aquisition Cost',
            'name_mm' => 'Customer Aquisition Cost',
            'question_id' => 22
        ]);
        Choice::Create([
            'name_en' => 'Social Media Cost',
            'name_mm' => 'ဆိုရှယ်မီဒီယာကုန်ကျစရိတ်',
            'question_id' => 22
        ]);


        Choice::Create([
            'name_en' => 'Accquire new customers',
            'name_mm' => 'ဖောက်သည်အသစ်များရယူပါ။',
            'question_id' => 23
        ]);
        Choice::Create([
            'name_en' => 'Successfully show service solutions and features',
            'name_mm' => 'ဝန်ဆောင်မှုဖြေရှင်းချက်များနှင့် အင်္ဂါရပ်များကို အောင်မြင်စွာပြသပါ။',
            'question_id' => 23
        ]);
        Choice::Create([
            'name_en' => 'Handling presentations in meetings and proactively communication with prospects and customers to ensure exceptional customer satisfaction',
            'name_mm' => 'ထူးခြားသောဖောက်သည်များ စိတ်ကျေနပ်မှုရရှိစေရန် အစည်းအဝေးများတွင် တင်ပြချက်များကို ကိုင်တွယ်ဆောင်ရွက်ခြင်း၊',
            'question_id' => 23
        ]);
        Choice::Create([
            'name_en' => 'Managing company operations',
            'name_mm' => 'ကုမ္ပဏီလုပ်ငန်းများကို စီမံခန့်ခွဲခြင်း။',
            'question_id' => 23
        ]);


        Choice::Create([
            'name_en' => 'True',
            'name_mm' => 'မှန်တယ်',
            'question_id' => 24
        ]);
        Choice::Create([
            'name_en' => 'False',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 24
        ]);


        Choice::Create([
            'name_en' => 'True',
            'name_mm' => 'မှန်တယ်။',
            'question_id' => 25
        ]);
        Choice::Create([
            'name_en' => 'False',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 25
        ]);


        Choice::Create([
            'name_en' => 'True',
            'name_mm' => 'မှန်တယ်။',
            'question_id' => 26
        ]);
        Choice::Create([
            'name_en' => 'False',
            'name_mm' => 'မှားတယ်။',
            'question_id' => 26
        ]);
    }
}
