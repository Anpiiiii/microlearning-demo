<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModuleData;

class ModuleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModuleData::Create([
            'module_id' => '2',
            'data_en' => json_encode(['Any business or company has a department which takes care of managing the infrastructure, utilities (like electricity), company assets, and other responsibilities like travel bookings, etc.',
                           'Infrastructure management, under admin department, may include maintenance and upkeep of office premises, security, housekeeping and cleanliness',
                           'Utilities include electricity, water, waste disposal, heating/cooling and sewage. Admin team must ensure that these services are available and used without wastage for efficient running of the operations.',
                           'Rented or Owned Company assets (mostly non-IT) like company vehicles, generators, cubicles, aircon etc. also come under the purview of Admin team',
                           'Administration department like IT department is a very important enabler for any business organization'
                ]),
            'data_mm' => json_encode(['မည်သည့်လုပ်ငန်း သို့မဟုတ် ကုမ္ပဏီမဆို အခြေခံအဆောက်အအုံ၊ အသုံးအဆောင်များ (လျှပ်စစ်ဓာတ်အား)၊ ကုမ္ပဏီ၏ပိုင်ဆိုင်မှုများနှင့် ခရီးသွားကြိုတင်စာရင်းသွင်းခြင်း စသည်တို့ကဲ့သို့သော အခြားတာဝန်များကို စီမံခန့်ခွဲပေးသည့် ဌာနတစ်ခုရှိသည်။',
                        'စီမံခန့်ခွဲရေးဌာနလက်အောက်ရှိ အခြေခံအဆောက်အဦစီမံခန့်ခွဲမှု၊ ရုံးပရဝုဏ်ကို ပြုပြင်ထိန်းသိမ်းမှု၊ လုံခြုံရေး၊ အိမ်သန့်ရှင်းရေးနှင့် သန့်ရှင်းရေးတို့ ပါဝင်နိုင်သည်။',
                        'အသုံးအဆောင်များတွင် လျှပ်စစ်၊ ရေ၊ အမှိုက်စွန့်ပစ်မှု၊ အပူ/အအေးခံခြင်းနှင့် မိလ္လာများ ပါဝင်သည်။ စီမံခန့်ခွဲသူအဖွဲ့သည် ဤဝန်ဆောင်မှုများကို ရရှိနိုင်ပြီး လုပ်ဆောင်ချက်များကို ထိရောက်စွာလည်ပတ်နိုင်ရန် အလေအလွင့်မရှိဘဲ အသုံးပြုကြောင်း သေချာစေရမည်။',
                        'အသုံးအဆောင်များတွင် လျှပ်စစ်၊ ရေ၊ အမှိုက်စွန့်ပစ်မှု၊ အပူ/အအေးခံခြင်းနှင့် မိလ္လာများ ပါဝင်သည်။ စီမံခန့်ခွဲသူအဖွဲ့သည် ဤဝန်ဆောင်မှုများကို ရရှိနိုင်ပြီး လုပ်ဆောင်ချက်များကို ထိရောက်စွာလည်ပတ်နိုင်ရန် အလေအလွင့်မရှိဘဲ အသုံးပြုကြောင်း သေချာစေရမည်။',
                        'အိုင်တီဌာနကဲ့သို့ စီမံခန့်ခွဲရေးဌာနသည် လုပ်ငန်းအဖွဲ့အစည်းတိုင်းအတွက် အလွန်အရေးပါသော လုပ်ငန်းဆောင်တာတစ်ခုဖြစ်သည်။'
            ])
        ]);

        ModuleData::Create([
            'module_id' => '3',
            'data_en' => json_encode(['Administration teams look for new vendors(with support from procurement teams), negotiate contracts and ensure efficient of services or assets. In general, these assets /services are not IT related.',
                           'Contracts with respect to physical security of the business premises and employee transportation is also under admin department',
                           'As for other departments Admin team also works with budget and plans the expense with reference to these budgets',
                           'Admin expenses with respect to budgeting is an important key performance indicator(KPI) for Admin team',
                           'Additionally, administration team members ensure timely payment of utility bills and availability of such services for smooth running of the organization.',
                           'This team also helps in arranging power backup or support with alternate vendors in case of any disruption with the existing vendors/services'
                ]),
            'data_mm' => json_encode(['အုပ်ချုပ်ရေးအဖွဲ့များသည် ရောင်းသူအသစ်များ (ဝယ်ယူရေးအဖွဲ့များထံမှ ပံ့ပိုးမှုဖြင့်)၊ စာချုပ်များကို ညှိနှိုင်းပြီး ဝန်ဆောင်မှုများ သို့မဟုတ် ပိုင်ဆိုင်မှုများကို ထိရောက်မှုရှိစေရန် သေချာစေသည်။ ယေဘုယျအားဖြင့်၊ ဤပိုင်ဆိုင်မှု/ဝန်ဆောင်မှုများသည် IT နှင့်မသက်ဆိုင်ပါ။',
                        'လုပ်ငန်းခွင်လုံခြုံရေးနှင့် ဝန်ထမ်းသယ်ယူပို့ဆောင်ရေးဆိုင်ရာ စာချုပ်များသည် စီမံခန့်ခွဲရေးဌာန၏ လက်အောက်တွင်ရှိသည်။',
                        'အခြားဌာနများအတွက် စီမံခန့်ခွဲရေးအဖွဲ့သည်လည်း ဘတ်ဂျက်ဖြင့် လုပ်ဆောင်ပြီး အဆိုပါဘတ်ဂျက်များကို ကိုးကား၍ ကုန်ကျစရိတ်များကို စီစဉ်ပေးသည်။',
                        'ထို့အပြင်၊ စီမံခန့်ခွဲရေးအဖွဲ့၀င်များသည် အဖွဲ့အစည်း၏လည်ပတ်မှုချောမွေ့စေရန်အတွက် utility bills များကို အချိန်နှင့်တစ်ပြေးညီ ပေးချေနိုင်စေရန်နှင့် ထိုဝန်ဆောင်မှုများရရှိနိုင်မှုကို သေချာစေသည်။',
                        'ဤအဖွဲ့သည် လက်ရှိရောင်းချသူများ/ဝန်ဆောင်မှုများနှင့် အနှောင့်အယှက်တစ်စုံတစ်ရာဖြစ်လာပါက ပါဝါအရန်သိမ်းခြင်း သို့မဟုတ် အစားထိုးရောင်းချသူများနှင့် ပံ့ပိုးကူညီရာတွင်လည်း ကူညီပေးပါသည်။'
            ])
        ]);

        ModuleData::Create([
            'module_id' => '4',
            'data_en' => json_encode(['Vendor Management: Long-term Contract Management with vendors is a part of this role. Contracts are generally negotiated on quality of service/duration and pricing. Representative list of  contracts under Admin team are as below:',
                           '- Housekeeping Staff Contract for upkeep of office premises',
                           '- Contract with security companies for physical security of office premises',
                           '- Transportation vendor contracts for local and international travel',
                           '- Contract with cafeteria vendors for employee food arrangements',
                           'Asset Management: Except IT assts like laptop/mobile/desktop etc. most other assets like furniture, company vehicles, white goods like Aircon etc. are managed by admin personnel. Such responsibility will also include regular and timely maintenance of these assets.',
                           'Administration team personnel work closely with other departments like IT/HR/Operations/finances and sales for any interdepartmental projects'
                ]),
            'data_mm' => json_encode(['ရောင်းချသူစီမံခန့်ခွဲမှု- ရောင်းချသူများနှင့် ရေရှည်စာချုပ်စီမံခန့်ခွဲမှုသည် ဤအခန်းကဏ္ဍ၏ အစိတ်အပိုင်းတစ်ခုဖြစ်သည်။ စာချုပ်များသည် ဝန်ဆောင်မှုအရည်အသွေး/ကာလနှင့် ဈေးနှုန်းအပေါ် ယေဘုယျအားဖြင့် ညှိနှိုင်းကြသည်။ Admin Team လက်အောက်ရှိ စာချုပ်ကိုယ် စားလှယ်များစာရင်းမှာ အောက်ပါအတိုင်းဖြစ်သည်။',
                        '- ရုံးခန်းပရဝုဏ်ကို ပြုပြင်ထိန်းသိမ်းရန်အတွက် နေရာထိုင်ခင်းဝန်ထမ်း စာချုပ်',
                        '- ရုံးပရဝုဏ်အတွင်း လုံခြုံရေးအတွက် လုံခြုံရေးကုမ္ပဏီများနှင့် စာချုပ်ချုပ်ဆိုခြင်း။',
                        '- ပြည်တွင်းပြည်ပ ခရီးသွားများအတွက် သယ်ယူပို့ဆောင်ရေး ရောင်းချသူ စာချုပ်များ',
                        '- ဝန်ထမ်းအစားအသောက်အစီအစဉ်များအတွက် ကော်ဖီဆိုင်ရောင်းချသူများနှင့် စာချုပ်ချုပ်ဆိုခြင်း။',
                        'ပိုင်ဆိုင်မှုစီမံခန့်ခွဲမှု- လက်ပ်တော့/မိုဘိုင်း/ဒက်စ်တော့စသည့် အိုင်တီအကူအညီမှလွဲ၍ အခြားပစ္စည်းများ၊ ပရိဘောဂများ၊ ကုမ္ပဏီယာဉ်များ၊ Aircon ကဲ့သို့သော အဖြူရောင်ပစ္စည်းများစသည်ဖြင့် စီမံခန့်ခွဲရေးဝန်ထမ်းများက စီမံခန့်ခွဲပါသည်။ ဤတာဝန်ဝတ္တရားများသည် ဤပိုင်ဆိုင်မှုများကို ပုံမှန်နှင့် အချိန်မီ ထိန်းသိမ်းခြင်းလည်း ပါဝင်သည်။',
                        'အုပ်ချုပ်ရေးအဖွဲ့မှ ဝန်ထမ်းများသည် IT/HR/Operations/ Finance နှင့် အရောင်းဌာနများကဲ့သို့သော အခြားဌာနများနှင့် နီးနီးကပ်ကပ် အလုပ်လုပ်ပါသည်။'
            ])
        ]);

        ModuleData::Create([
            'module_id' => '5',
            'data_en' => json_encode(['Annual Maintenance Contract: Contracts for regular maintenance and support for company assets during the year.',
                           'Housekeeping: Contractual staff used for keeping office premises clean and hygienic.',
                           'Invoice: Invoices are legal document raised by the vendor company asking the other company to pay in return of services or goods provided. Admin team checks and confirms the payment request put by vendor on invoices for services under admin department',
                           'Service Level Agreements(SLA): SLA serves refers to the standards the vendor must follow and the metrics to measure the performance. Some examples as below:',
                           '- SLA for a new purchase of Aircon may include periodic checkup/maintenance and free of cost replacement within 6 months of purchase',
                           '- SLA for a housekeeping contract may include minimum number of housekeeping staff provided by vendor for any day',
                           '- SLA for transportation vendor providing vehicles for company people or goods may include on time delivery, quantity of goods damage and quality of vehicles used',
                           'Cash Voucher : Admin team also uses cash for quick and efficient payments of small expenses and such expenses are booked by vouchers. Thes expenses are generally not covered under any contract. The payment for such expenses are done from “petty cash” which are small amounts of cash available with Admin department for smaller amounts of daily expenses.'
                ]),
            'data_mm' => json_encode(['နှစ်စဉ်ထိန်းသိမ်းမှုစာချုပ်- တစ်နှစ်တာအတွင်း ကုမ္ပဏီပိုင်ဆိုင်မှုများအတွက် ပုံမှန်ထိန်းသိမ်းမှုနှင့် ပံ့ပိုးမှုများအတွက် စာချုပ်များ။',
                        'နေရာထိုင်ခင်းထိန်းသိမ်းခြင်း- ရုံးခန်းပရဝုဏ်အတွင်း သန့်ရှင်းရေးနှင့် တစ်ကိုယ်ရေသန့်ရှင်းမှုအတွက် အသုံးပြုသည့် စာချုပ်ပါဝန်ထမ်းများ။',
                        'ပြေစာ- ပြေစာများသည် အခြားကုမ္ပဏီအား ဝန်ဆောင်မှုများ သို့မဟုတ် ကုန်ပစ္စည်းများ ပြန်လည်ပေးချေရန် တောင်းဆိုသည့် ရောင်းချသူကုမ္ပဏီမှ တရားဝင်စာရွက်စာတမ်းများဖြစ်သည်။ အက်ဒ်မင်အဖွဲ့သည် စီမံခန့်ခွဲသူဌာနလက်အောက်ရှိ ဝန်ဆောင်မှုများအတွက် ပြေစာများတွင် ရောင်းချသူမှ တောင်းဆိုသည့် ငွေပေးချေမှုကို စစ်ဆေးပြီး အတည်ပြုသည်။',
                        'ဝန်ဆောင်မှုအဆင့် သဘောတူညီချက်များ(SLA)- SLA သည် ရောင်းချသူလိုက်နာရမည့် စံနှုန်းများနှင့် စွမ်းဆောင်ရည်ကို တိုင်းတာရန် မက်ထရစ်များကို ရည်ညွှန်းသည်။ အောက်ပါအတိုင်းဖြစ်သည်။',
                        '- Aircon အသစ်ဝယ်ယူမှုအတွက် SLA သည် အချိန်ကာလအလိုက် စစ်ဆေးခြင်း/ ပြုပြင်ထိန်းသိမ်းခြင်း နှင့် ဝယ်ယူပြီး 6 လအတွင်း အခမဲ့ အစားထိုးလဲလှယ်ခြင်း ပါဝင်သည်။',
                        '- SLA သည် အိမ်တွင်းရေးစာချုပ်တစ်ခုအတွက် မည်သည့်နေ့အတွက်မဆို ရောင်းချသူမှ ပံ့ပိုးပေးသော အနည်းဆုံး အိမ်စောင့်ဝန်ထမ်းအရေအတွက် ပါဝင်သည်။',
                        '- သယ်ယူပို့ဆောင်ရေးရောင်းချသူအတွက် SLA သည် ကုမ္ပဏီလူများအတွက် သို့မဟုတ် ကုန်ပစ္စည်းများကို အချိန်မီပေးပို့ခြင်း၊ ကုန်ပစ္စည်းပျက်စီးမှုပမာဏနှင့် အသုံးပြုထားသောယာဉ်များ၏ အရည်အသွေးတို့ ပါဝင်နိုင်သည်။',
                        ' ငွေသားဘောက်ချာ- စီမံခန့်ခွဲသူအဖွဲ့သည် သေးငယ်သောအသုံးစရိတ်များကို မြန်ဆန်ထိရောက်စွာပေးချေရန်အတွက်လည်း ငွေသားကိုအသုံးပြုပြီး ထိုကုန်ကျစရိတ်များကို ဘောက်ချာများဖြင့် ကြိုတင်စာရင်းသွင်းပါသည်။ ဤကုန်ကျစရိတ်များသည် ယေဘုယျအားဖြင့် မည်သည့်စာချုပ်အောက်တွင်မှ အကျုံးမဝင်ပါ။ ယင်းအသုံးစရိတ်များအတွက် ပေးချေခြင်းကို နေ့စဉ်အသုံးစရိတ် အနည်းငယ်အတွက် စီမံခန့်ခွဲရေးဌာနမှ ရရှိနိုင်သော ငွေသားအနည်းငယ်ဖြစ်သည့် "အသေးစားငွေ" မှ လုပ်ဆောင်ပါသည်။',
            ])
        ]);




        ModuleData::Create([
            'module_id' => '6',
            'data_en' => json_encode(['Any business or company sells services(like mobile repairing) or products(like mobiles) and earns money',
                           'To sell these, first the company must make it or buy it. So, it must spend money on doing so. It must also spend on transporting the products or delivering the services. Similarly, it spends on many other aspects to make or buy the product.',
                           'As a result, a part of the company sales or revenues by selling goes back to buy or make the product/service',
                           'Finally, whatever is left from revenue after the spends is the actual income of the company a.k.a. profit',
                           'In the end a business also must pay taxes to government on these profits.',
                ]),
            'data_mm' => json_encode(['မည်သည့်လုပ်ငန်း သို့မဟုတ် ကုမ္ပဏီမဆို ဝန်ဆောင်မှုများ (မိုဘိုင်းပြုပြင်ခြင်းကဲ့သို့) သို့မဟုတ် ထုတ်ကုန်များ (မိုဘိုင်းလ်များကဲ့သို့) ရောင်းချပြီး ငွေရှာပါသည်။',
                        'အဲဒါတွေကို ရောင်းဖို့ ကုမ္ပဏီက အရင်လုပ်ရမယ် ဒါမှမဟုတ် ဝယ်ရမယ်။ ဒါကြောင့် ဒီလိုလုပ်ဖို့အတွက် ပိုက်ဆံသုံးရမယ်။ ၎င်းသည် ကုန်ပစ္စည်းများ သယ်ယူပို့ဆောင်ခြင်း သို့မဟုတ် ဝန်ဆောင်မှုများ ပေးပို့ခြင်းအတွက်လည်း သုံးစွဲရမည်ဖြစ်သည်။ အလားတူပင်၊ ၎င်းသည် ထုတ်ကုန်ပြုလုပ်ရန် သို့မဟုတ် ဝယ်ယူရန် အခြားကဏ္ဍများစွာတွင် အသုံးပြုသည်။',
                        'ရလဒ်အနေဖြင့်၊ ရောင်းချခြင်းဖြင့် ကုမ္ပဏီ၏ အစိတ်အပိုင်းတစ်ခုသည် ကုန်ပစ္စည်း/ဝန်ဆောင်မှုကို ဝယ်ယူရန် သို့မဟုတ် ဝန်ဆောင်မှုပြုလုပ်ရန် ပြန်သွားပါသည်။',
                        'နောက်ဆုံးအနေနဲ့၊ သုံးစွဲမှုပြီးရင် ဝင်ငွေထဲက ကျန်တာမှန်သမျှဟာ ကုမ္ပဏီရဲ့ အမြတ်ငွေ (a.k.a. profit) ဖြစ်ပါတယ်။',
                        'နောက်ဆုံးတွင် စီးပွားရေးလုပ်ငန်းတစ်ခုသည် ထိုအမြတ်အစွန်းအတွက် အစိုးရကို အခွန်ပေးဆောင်ရမည်ဖြစ်သည်။',
            ])
        ]);

        ModuleData::Create([
            'module_id' => '7',
            'data_en' => json_encode(['Finance department pays a huge role within a business organization',
                           'It acts as gatekeeper and keeps an eye on revenues and spends ensuring revenues are earned legally/taxes are paid/budget the spending to avoid excess expense affecting profits. Personnel working with such responsibilities are called as financial controllers',
                           'This same function works closely with other departments like strategy/operations/sales etc. to get investments(money needed) for new projects/company expansion into new geographies or any other initiative company decided upon',
                           'Most important performance criteria  for finance department is ”profit generated by the company”.',
                           'Apart from this finance team members also support in internal and external financial reporting by providing accurate and clean financial data like revenues/cost of production/profitability etc.',
                           'Salary disbursement to employees is an additional responsibility which a finance team member may need to perform with support from Human Resource(HR) team,'
                ]),
            'data_mm' => json_encode(['ဘဏ္ဍာရေးဌာနသည် လုပ်ငန်းအဖွဲ့အစည်းတစ်ခုအတွင်း ကြီးမားသောအခန်းကဏ္ဍကို ထမ်းဆောင်သည်။',
                        '၎င်းသည် ဂိတ်စောင့်အဖြစ်ဆောင်ရွက်ပြီး ၀င်ငွေများတရားဝင်ရရှိကြောင်းသေချာစေရန် ၀င်ငွေများနှင့်အသုံးစရိတ်များကို စောင့်ကြည့်ပေးသည်/ အခွန်များပေးဆောင်ခြင်း/ အမြတ်အစွန်းကိုထိခိုက်စေသောပိုလျှံသောကုန်ကျစရိတ်များကိုရှောင်ရှားရန်အသုံးစရိတ်ကို ဘတ်ဂျက်ငွေစာရင်းသွင်းပါသည်။ ထိုသို့သော တာဝန်များဖြင့် လုပ်ဆောင်နေသော ဝန်ထမ်းများကို ငွေကြေးထိန်းချုပ်သူများဟု ခေါ်သည်။',
                        'ဤတူညီသောလုပ်ဆောင်ချက်သည် ပထဝီဝင်အသစ်များ သို့မဟုတ် အခြားသော ပဏာမကုမ္ပဏီတစ်ခုသို့ ရင်းနှီးမြှုပ်နှံမှုများ (လိုအပ်သောငွေ) ကို ရယူရန် အခြားဌာနများနှင့် နီးကပ်စွာ အလုပ်လုပ်ပါသည်။',
                        'ဘဏ္ဍာရေးဌာနအတွက် အရေးကြီးဆုံး စွမ်းဆောင်ရည်သတ်မှတ်ချက်မှာ "ကုမ္ပဏီမှ ထုတ်ပေးသော အမြတ်ငွေ" ဖြစ်သည်။',
                        'ဤဘဏ္ဍာရေးအသင်းအဖွဲ့ဝင်များအပြင် ဝင်ငွေ/ထုတ်လုပ်မှုကုန်ကျစရိတ်/အမြတ်အစွန်းများစသည့် တိကျသန့်ရှင်းသောဘဏ္ဍာရေးအချက်အလက်များကို ပံ့ပိုးပေးခြင်းဖြင့် ပြည်တွင်းပြည်ပဘဏ္ဍာရေးအစီရင်ခံရာတွင်လည်း ပံ့ပိုးကူညီပါသည်။',
                        'ဝန်ထမ်းများအား လစာထုတ်ပေးခြင်းသည် လူ့စွမ်းအားအရင်းအမြစ် (HR) အဖွဲ့၏ ပံ့ပိုးမှုဖြင့် ဘဏ္ဍာရေးအဖွဲ့၀င်တစ်ဦးမှ လုပ်ဆောင်ရမည့် နောက်ထပ်တာဝန်တစ်ခုဖြစ်သည်။'
            ])
        ]);

        ModuleData::Create([
            'module_id' => '8',
            'data_en' => json_encode(['Contract management: A contract is a legal binding document detailing the monetary payment and transfer of goods, services in return of those payments. A contract has terms and conditions which needs to be followed for a successful execution. Finance team members help in managing the contracts by making/receiving payments, ensuring validity of the contract while respecting the terms and conditions',
                           'Invoice Management: Invoices are legal document raised by a company asking the other company or individual to pay in return of services or goods paid. Finance team personnel play an active role in raising invoice to customers for payment ensuring timely payments for invoice raised by vendors to their own organization.',
                           'Investment Management: This role entails to secure investment for growing the company by new business expansion, merge with or acquire another company and sometimes, by selling a part of the company to better business prospects',
                ]),
            'data_mm' => json_encode(['စာချုပ်စီမံခန့်ခွဲမှု- စာချုပ်သည် ငွေကြေးပေးချေမှုနှင့် ကုန်စည်လွှဲပြောင်းမှု၊ ဝန်ဆောင်မှုများကို ပြန်လည်ပေးချေမှုဆိုင်ရာ အသေးစိတ်အချက်အချာကျသော စည်းနှောင်မှုဆိုင်ရာစာရွက်စာတမ်းတစ်ခုဖြစ်သည်။ စာချုပ်တစ်ခုတွင် အောင်မြင်စွာ အကောင်အထည်ဖော်ရန်အတွက် လိုက်နာရမည့် စည်းကမ်းသတ်မှတ်ချက်များရှိသည်။ ဘဏ္ဍာရေးအဖွဲ့၀င်များသည် စည်းမျဉ်းစည်းကမ်းများကို လေးစားလိုက်နာပြီး စာချုပ်၏တရားဝင်မှုကိုသေချာစေရန်၊ ငွေပေးချေမှုများ/လက်ခံခြင်းဖြင့် စာချုပ်များကို စီမံခန့်ခွဲရာတွင် ကူညီပေးပါသည်။',
                        'ငွေတောင်းခံလွှာစီမံခန့်ခွဲမှု- ငွေတောင်းခံလွှာများသည် ဝန်ဆောင်မှုများ သို့မဟုတ် ပေးချေထားသော ကုန်ပစ္စည်းများ ပြန်လည်ပေးဆောင်ရန် အခြားကုမ္ပဏီ သို့မဟုတ် တစ်ဦးချင်းထံ တောင်းဆိုသည့် ကုမ္ပဏီတစ်ခုမှ ထုတ်ပေးသော တရားဝင်စာရွက်စာတမ်းဖြစ်သည်။ ဘဏ္ဍာရေးအဖွဲ့ဝန်ထမ်းများသည် ၎င်းတို့၏အဖွဲ့အစည်းသို့ရောင်းချသူများမှတင်ထားသောပြေစာများအတွက် အချိန်မီငွေပေးချေမှုသေချာစေရန် ဖောက်သည်များထံ ငွေပေးချေမှုတွင် ငွေပေးချေမှုတွင် တက်ကြွစွာပါဝင်ဆောင်ရွက်ပါသည်။',
                        'ရင်းနှီးမြုပ်နှံမှုစီမံခန့်ခွဲမှု- ဤအခန်းကဏ္ဍသည် လုပ်ငန်းသစ်တိုးချဲ့ခြင်းဖြင့် ကုမ္ပဏီကို ကြီးထွားလာစေရန်အတွက် ရင်းနှီးမြှုပ်နှံမှုများ လုံခြုံစေခြင်း၊ အခြားကုမ္ပဏီတစ်ခုနှင့် ပေါင်းစည်းခြင်း သို့မဟုတ် ရယူခြင်းနှင့် တစ်ခါတစ်ရံတွင် ကုမ္ပဏီ၏အစိတ်အပိုင်းတစ်ခုအား ပိုမိုကောင်းမွန်သောစီးပွားရေးအလားအလာများရရှိစေရန် ရောင်းချခြင်းဖြင့် ရင်းနှီးမြုပ်နှံမှုဆိုင်ရာ အခန်းကဏ္ဍတွင် ပါဝင်ပါသည်။',
            ])
        ]);

        ModuleData::Create([
            'module_id' => '9',
            'data_en' => json_encode(['Have a clear understanding of whether the company is into to Business-to-Business sales(B2B) or Business to Consumer (B2C) sales. A large business can be into both type of sales.',
                           'A company can be in different industry like Ecommerce(Shop.com)/Telecom(Atom)/Automobile/Metals and Mining etc. Knowing the industry or the sector of the business is very helpful to understand the business',
                           'Understand the business of the company by knowing what the company sells and who buys like:',
                           '- A laptop manufacturing company makes laptops and sells it to customers(B2C)',
                           '- A telecom company gives telecom services to make calls/provide data to users(B2C)',
                           '- An IT company provide services like software along with managing the software to other companies(B2B)',
                           'Know the revenue and profits of the company',
                           'Be aware of any recent business news involving the company',
                           'Financial team members are expected to deal with financial data in "Microsoft Excel" ,so, having proficiency in such tools is an added advantage',
                ]),
            'data_mm' => json_encode(['ကုမ္ပဏီသည် Business-to-Business sales (B2B) သို့မဟုတ် Business to Consumer (B2C) အရောင်းသို့ ဝင်ရောက်ခြင်းရှိမရှိကို ရှင်းရှင်းလင်းလင်း နားလည်သဘောပေါက်ပါ။ လုပ်ငန်းကြီးတစ်ခုသည် အရောင်းအမျိုးအစား နှစ်မျိုးလုံးတွင် ရှိနိုင်ပါသည်။',
                        'ကုမ္ပဏီတစ်ခုသည် Ecommerce(Shop.com)/Telecom(Atom)/Automobile/Metals and Mining စသည်တို့ကဲ့သို့သော လုပ်ငန်းနယ်ပယ်အသီးသီးတွင် ရှိနိုင်ပါသည်။ လုပ်ငန်းနယ်ပယ် သို့မဟုတ် လုပ်ငန်း၏ကဏ္ဍကို သိရှိခြင်းသည် လုပ်ငန်းကို နားလည်ရန် အလွန်အထောက်အကူဖြစ်စေပါသည်။',
                        'ကုမ္ပဏီက ဘာရောင်းတယ်၊ ဘယ်သူက ဝယ်တယ်ဆိုတာ သိခြင်းအားဖြင့် ကုမ္ပဏီရဲ့ လုပ်ငန်းကို နားလည်ပါ။',
                        '- လက်ပ်တော့ထုတ်လုပ်သည့် ကုမ္ပဏီတစ်ခုသည် လက်ပ်တော့များထုတ်လုပ်ပြီး ဖောက်သည်များထံ ရောင်းချသည် (B2C)',
                        '- တယ်လီကွန်းကုမ္ပဏီတစ်ခုသည် သုံးစွဲသူများအား ဖုန်းခေါ်ဆိုမှု/ဒေတာပေးရန်အတွက် တယ်လီကွန်းဝန်ဆောင်မှုများပေးသည် (B2C)',
                        '- အိုင်တီကုမ္ပဏီတစ်ခုသည် အခြားကုမ္ပဏီများ (B2B) သို့ ဆော့ဖ်ဝဲကို စီမံခန့်ခွဲခြင်းနှင့်အတူ ဆော့ဖ်ဝဲကဲ့သို့ ဝန်ဆောင်မှုများ ပေးသည်',
                        'ကုမ္ပဏီ၏ ၀င်ငွေနှင့် အမြတ်များကို သိပါ။',
                        'ကုမ္ပဏီနှင့်ပတ်သက်သည့် လတ်တလောစီးပွားရေးသတင်းများကို သတိထားပါ။',
                        'ဘဏ္ဍာရေးအဖွဲ့၀င်များသည် “Microsoft Excel” တွင် ငွေကြေးဆိုင်ရာ အချက်အလက်များကို ကိုင်တွယ်ဖြေရှင်းရန် မျှော်လင့်ထားသောကြောင့်၊ ထိုသို့သောကိရိယာများကို ကျွမ်းကျင်မှုရှိခြင်းသည် ထပ်လောင်းအားသာချက်တစ်ခုဖြစ်သည်။',
            ])
        ]);
    }
}
