<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KTRN</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/f4c6764ec6.js" crossorigin="anonymous"></script>
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased" style="font-family: Roboto, sans-serif">
        <header class="px-2 md:p-0 sticky top-0 z-40 bg-white">
            <div class="h-20 m-auto w-full max-w-7xl items-center flex justify-between font-bold">
                <img src="images/logo.png" alt="">
                <ul class="md:flex space-x-12 hidden">
                    <li>
                        {{ __("About us") }}
                    </li>
                    <li>
                        {{ __("Our works") }}
                    </li>
                    <li>
                        {{ __("Services and Prices") }}
                    </li>
                    <li>
                        {{ __("Work") }}
                    </li>
                    <li>
                        {{ __("Certificates") }}
                    </li>
                    <li>
                        {{ __("Kontacts") }}
                    </li>
                </ul>
                <ul class="flex space-x-4 text-xl text-gray-500">
                    <li>
                        <i class="fa-brands fa-instagram"></i>
                    </li>
                    <li>
                        <i class="fa-brands fa-telegram"></i>
                    </li>
                </ul>
            </div>
            <hr>
        </header>
        
        <main class="max-w-7xl m-auto space-y-24 p-3">
            {{-- MAIN SECTION --}}
            <section class="w-full grid gap-12 py-4">
                <div class="md:flex md:space-x-12 space-y-6 md:space-y-0 md:order-last">
                    <div class="w-full rounded bg-[#EC693E] p-16 md:p-24 relative">
                        <img class="m-auto w-[80px]" src="images/Group 1.png" alt="">
                        <p class="absolute bottom-8 left-8 text-lg font-semibold text-white">
                            #MANIKURE
                        </p>
                    </div>
                    <div class="w-full rounded bg-[#E7C7EF] p-16 md:p-24 relative">
                        <img class="m-auto w-[80px]" src="images/Group 1.png" alt="">
                        <p class="absolute bottom-8 left-8 text-lg font-semibold">
                            #PEDIKURE
                        </p>
                    </div>
                </div>
                <div class="md:flex md:space-x-6 md:order-first">
                    <div class="w-full md:w-1/2 ">
                        <h1 class="md:text-xl lg:text-2xl xl:text-3xl font-semibold text-center md:text-left">
                            Расслабьтесь и насладитесь первоклассным уходом за ногтями в нашем салоне красоты,  
                            в котором царит атмосфера релаксации 
                            и комфорта. Опытные мастера подарят 
                            вашим ногтям безупречный вид.
                        </h1>
                    </div>
                    <div class="w-full grid md:w-1/2 md:px-16 lg:px-32 content-between space-y-6 md:space-y-0">
                        <p class="text-sm hidden md:block">
                            Мы используем только качественные материалы и современные техники, чтобы ваши руки и ноги выглядели безупречно.
                        </p>
                        <button class="p-4 bg-[#E0FCB4] rounded-full w-full text-xl font-semibold uppercase whitespace-nowrap">
                            Записаться ->
                        </button>
                    </div>
                </div>
            </section>

            {{-- ABOUT US --}}
            <section class="space-y-6">
                <div class="w-full relative rounded hidden md:block">
                    <h2 class="absolute top-12 left-6 font-semibold text-4xl uppercase">
                        {{__("About us")}}
                    </h2>
                    <img src="images/duct-tape-mockups-on-black-background-top-view 5.png" alt="">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="w-full rounded p-9 space-y-9 border border-black">
                        <div>
                            <span class="text-6xl">
                                1040+ 
                            </span>
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-2xl font-medium">
                                Клиентов
                            </h3>
                            <p class="text-sm text-gray-500 leading-[1rem]">
                                Более 1000 довольных клиентов доверили нам свои руки и ноги, что является свидетельством нашего профессионализма и высокого качества услуг.
                            </p>
                        </div>
                    </div>

                    <div class="w-full rounded p-9 space-y-9 border border-black">
                        <div>
                            <span class="text-6xl">
                                13650+
                            </span>
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-2xl font-medium">
                                Проведённых услуг
                            </h3>
                            <p class="text-sm text-gray-500 leading-[1rem]">
                                Это результат многолетнего опыта и индивидуального подхода к каждому клиенту. Мы гордимся тем, что смогли помочь такому количеству людей обрести красоту и уверенность в себе.
                            </p>
                        </div>
                    </div>

                    <div class="w-full rounded p-9 space-y-9 border border-black">
                        <div>
                            <span class="text-6xl">
                                100% 
                            </span>
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-2xl font-medium">
                                Профессионализм
                            </h3>
                            <p class="text-sm text-gray-500 leading-[1rem]">
                                В салоне работают только высококвалифицированные мастера с многолетним опытом работы. Регулярно проходят обучение и повышение квалификации, чтобы гарантировать безопасность и высокое качество предоставляемых услуг.
                            </p>
                        </div>
                    </div>

                    <div class="w-full rounded-[60px] p-9 space-y-9 bg-[#FCF4F1]">
                        <div>
                            <img src="images/icons/Group.png" alt="">
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-2xl font-medium">
                                Медицинская стерилизация инструментов
                            </h3>
                            <p class="text-sm text-gray-700 leading-[1rem]">
                                Стерилизация инструментов является важнейшим условием для обеспечения безопасности и здоровья наших клиентов, поэтому мы строго соблюдаем все необходимые нормы. Используем одноразовые расходные материалы, проводим уборку салона, чтобы поддерживать уровень чистоты и гигиены.
                            </p>
                        </div>
                    </div>

                    <div class="w-full rounded-[60px] p-9 space-y-9 bg-[#E0FCB4]">
                        <div>
                            <img src="images/icons/Vector.png" alt="">
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-2xl font-medium">
                                Бесплатный Wi-Fi и горячие напитки
                            </h3>
                            <p class="text-sm text-gray-700 leading-[1rem]">
                                В салоне работают только высококвалифицированные мастера с многолетним опытом работы. Регулярно проходят обучение и повышение квалификации, чтобы гарантировать безопасность и высокое качество предоставляемых услуг.
                            </p>
                        </div>
                    </div>

                    <div class="w-full rounded-[60px] p-9 space-y-9 bg-[#BBD8E9]">
                        <div>
                            <img src="images/icons/Group 2.png" alt="">
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-2xl font-medium">
                                Круглосуточная запись онлайн
                            </h3>
                            <p class="text-sm text-gray-700 leading-[1rem]">
                                Вы можете записаться на процедуру в любое удобное время в несколько кликов, в этом вам поможет наша простая и интуитивно понятная онлайн форма записи. Также вы всегда можете написать сообщение в direct для подбора нужной для вас записи на услуги. 
                            </p>
                        </div>
                    </div>

                    <div class="w-full rounded-[60px] p-9 space-y-9 bg-[#EC693E]">
                        <div>
                            <img src="images/icons/Group 3.png" alt="">
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-2xl font-medium text-white">
                                Удобно добираться
                            </h3>
                            <p class="text-sm leading-[1rem] text-white">
                                Клиенты могут легко добраться до салона на общественном транспорте или на автомобиле. Мы выбрали самое лучшее расположение в спокойном районе города. Вход имеет вывеску с названием салона, мы позаботились о том, чтобы вход был удобным для наших клиентов.
                            </p>
                        </div>
                    </div>

                    <div class="w-full rounded-[60px] p-9 space-y-9 bg-[#E7C7EF]">
                        <div>
                            <img src="images/icons/Group 4.png" alt="">
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-2xl font-medium text-white">
                                Гибкая система оплаты
                            </h3>
                            <p class="text-sm leading-[1rem] text-white">
                                Вы можете оплатить услуги салона наличными деньгами, банковскими картами, безналичным способом, перечислив деньги на наш расчетный счет. Приобрести подарочные сертификаты на любую сумму и подарить его своим близким и друзьям.
                            </p>
                        </div>
                    </div>

                    <div class="w-full rounded-[60px] p-9 space-y-9 bg-[#202020]">
                        <div>
                            <img src="images/icons/Vector-2.png" alt="">
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-2xl font-medium text-white">
                                Паркинг
                            </h3>
                            <p class="text-sm leading-[1rem] text-white">
                                На автомобиле: салон расположен на улице Nováčkova. Рядом с салоном есть большая парковка, которая находится в зоне С (первые 60 минут бесплатно один раз в день, в выходные и праздничные дни оплата не требуется, а также в будние дни с 6:00 до 17:00).
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- OUR WORKS --}}
            <section>
                <div class="md:flex md:space-x-12 space-y-6 md:space-y-0">
                    <img src="images/21st300 1.png" class="md:w-1/2" alt="">
                    <div class="md:w-1/2 grid content-around">
                        <div class="md:flex justify-between hidden">
                            <h2 class="text-4xl uppercase font-bold">
                                Наши работы
                            </h2>
                            <img src="images/icons/Group 5.png" alt="">
                        </div>
                        <div class="space-y-9">
                            <div class="space-y-3">
                                <h4 class="text-3xl md:text-5xl font-bold">
                                    Подписывайтесь на наш Instagram! 
                                </h4>
                                <p class="text-xs text-gray-500">
                                    Наслаждайтесь примерами нашего профессионального мастерства.
                                </p>
                            </div>
                            
                            <button class="w-full py-4 bg-[#E0FCB4] rounded-full text-xl uppercase">
                                @ktrn.studio
                            </button>
                        </div>
                    </div>
                    
                </div>
            </section>

            

            {{-- SERVICES AND PRICES --}}
            <section class="space-y-12">
                {{-- <h2 class="text-4xl uppercase font-bold text-center">
                    УСЛУГИ И ЦЕНЫ
                </h2> --}}
                <div class="md:flex md:space-x-12 space-y-6 md:space-y-0">
                    <div class="w-full md:w-1/3 space-y-6 leading-1">
                        <button class="p-4 bg-[#E7C7EF] rounded-full text-xl uppercase font-bold whitespace-nowrap w-full">
                            зал педикюра
                        </button>
                        <h3 class="font-bold hidden md:block">
                            ДИЗАЙН
                        </h3>
                        <ul class="space-y--1 leading-[1.2rem] hidden md:block">
                            <li>
                                Френч/обратный френч/лунки - 100
                            </li>
                            <li>
                                Градиент блесками/фольга/слайдеры - 20
                            </li>
                            <li>
                                Ремонт ногтя - 20
                            </li>
                            <li>
                                Втирка - 50
                            </li>
                        </ul>
                        <p class="font-bold leading-[1.2rem] hidden md:block">
                            Обратите внимание, что при опаздании на 15 мин. мастер имеет право предложить вам только покрытие камуфлирующей базой без дизайна и донаращивания, при опаздании на 30 мин. - только обработка пальчиков без покрытия. 
                        </p>
                    </div>
                    <div class="w-full md:w-2/3 p-3 md:p-9 rounded-2xl md:rounded-[60px] border border-black">
                        <table class="w-full">
                            <thead class="">
                                <th class="px-2"></th>
                                <th class=" text-xs px-2">
                                    Мастер
                                </th>
                                <th class="px-2 text-xs whitespace-nowrap">
                                    Топ мастер
                                </th>
                            </thead> 
                            <tbody class="w-full">
                                <tr>
                                    <td class="font-bold text-lg md:text-2xl">
                                        Гигиенический педикюр
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pb-6 text-xs">
                                        обработка стоп и пальчиков без покрытия
                                    </td>
                                    <td class="text-center pb-6">
                                        800
                                    </td>
                                    <td class="text-center pb-6">
                                        900
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-bold text-lg md:text-2xl">
                                        Эстетический express педикюр
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pb-6  text-xs">
                                        обработка пальчиков, без ухода за стопой + покрытие гель-лак 
                                    </td>
                                    <td class="text-center pb-6">
                                        900
                                    </td>
                                    <td class="text-center pb-6">
                                        1000
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-bold text-lg md:text-2xl">
                                        Полный комплекс педикюр
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pb-6 text-xs">
                                        обработка пальчиков + уход за стопой и покрытие гель-лак 
                                    </td>
                                    <td class="text-center pb-6">
                                        1000
                                    </td>
                                    <td class="text-center pb-6">
                                        1200
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-bold text-lg md:text-2xl">
                                        Мужской педикюр
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-xs">
                                        обработка пальчиков, без ухода за стопой  
                                    </td>
                                    <td class="text-center">
                                        700
                                    </td>
                                    <td class="text-center">
                                        800
                                    </td>
                                </tr>
                                <tr>
                                    <td class=" text-xs">
                                        обработка пальчиков + уход за стопой 
                                    </td>
                                    <td class="text-center">
                                        800
                                    </td>
                                    <td class="text-center">
                                        900
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div> 
                <img src="images/side-view-woman-playing-with-her-feet-lake 2.png" alt="">
            </section>

            <section class="space-y-12">
                <div class="md:flex md:space-x-12 space-y-6 md:space-y-0">
                    <div class="w-full md:w-1/3 space-y-6 leading-1">
                        <button class="p-4 bg-[#EC693E] text-white rounded-full text-xl uppercase font-bold whitespace-nowrap w-full">
                            зал МАНикюра
                        </button>
                        <h3 class="font-bold hidden md:block">
                            ДИЗАЙН
                        </h3>
                        <ul class="space-y--1 leading-[1.2rem] hidden md:block">
                            <li>
                                Френч/обратный френч/лунки - 100
                            </li>
                            <li>
                                Градиент блесками/фольга/слайдеры - 20
                            </li>
                            <li>
                                Ремонт ногтя - 20
                            </li>
                            <li>
                                Втирка - 50
                            </li>
                        </ul>
                        <p class="font-bold leading-[1.2rem] hidden md:block">
                            Обратите внимание, что при опаздании на 15 мин. мастер имеет право предложить вам только покрытие камуфлирующей базой без дизайна и донаращивания, при опаздании на 30 мин. - только обработка пальчиков без покрытия. 
                        </p>
                    </div>
                    <div class="w-full md:w-2/3 p-3 md:p-9 rounded-2xl md:rounded-[60px] border border-black">
                        <table class="w-full">
                            <thead>
                                <th class="px-2"></th>
                                <th class=" text-xs px-2">
                                    Мастер
                                </th>
                                <th class="px-2 text-xs whitespace-nowrap">
                                    Топ мастер
                                </th>
                            </thead>
                            <tbody class="w-full">
                                <tr>
                                    <td class="font-bold text-lg md:text-2xl">
                                        Гигиенический  маникюр
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pb-6 text-xs">
                                        обработка пальчиков без покрытия
                                    </td>
                                    <td class="text-center pb-6">
                                        450
                                    </td>
                                    <td class="text-center pb-6">
                                        600
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-bold text-lg md:text-2xl">
                                        Эстетический express маникюр
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pb-6 text-xs">
                                        обработка пальчиков + покрытие гель-лак 
                                    </td>
                                    <td class="text-center pb-6">
                                        700
                                    </td>
                                    <td class="text-center pb-6">
                                        900
                                    </td>
                                </tr>

                                <tr>
                                    <td class="font-bold text-lg md:text-2xl">
                                        Полный комплекс маникюр
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pb-6 text-xs">
                                        обработка пальчиков + укрепление гелем и покрытие гель-лак
                                    </td>
                                    <td class="text-center pb-6">
                                        800
                                    </td>
                                    <td class="text-center pb-6">
                                        1000
                                    </td>
                                </tr>

                                <tr>
                                    <td class="font-bold text-lg md:text-2xl">
                                        Наращивание
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pb-6 text-xs">
                                        по договоренности с мастером
                                    </td>
                                    <td class="text-center pb-6">
                                        1000
                                    </td>
                                    <td class="text-center pb-6">
                                        1200
                                    </td>
                                </tr>

                                <tr>
                                    <td class="font-bold text-lg md:text-2xl">
                                        Мужской маникюр
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pb-6 text-xs">
                                        обработка пальчиков, без покрытия
                                    </td>
                                    <td class="text-center pb-6">
                                        500
                                    </td>
                                    <td class="text-center pb-6">
                                        600
                                    </td>
                                </tr>


                                <tr>
                                    <td class="text-xs">
                                        *снятие покрытия без дальнейшей обработки пальчиков 
                                    </td>
                                    <td class="text-center">
                                        150
                                    </td>
                                    <td class="text-center">
                                        200
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-xs"> 
                                        *снятие чужого покрытия
                                    </td>
                                    <td class="text-center">
                                        50
                                    </td>
                                    <td class="text-center">
                                        50
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div> 
                <div class="w-full md:w-1/3 space-y-6 leading-1 md:hidden">
                    <h3 class="font-bold">
                        ДИЗАЙН
                    </h3>
                    <ul class="space-y--1 leading-[1.2rem]">
                        <li>
                            Френч/обратный френч/лунки - 100
                        </li>
                        <li>
                            Градиент блесками/фольга/слайдеры - 20
                        </li>
                        <li>
                            Ремонт ногтя - 20
                        </li>
                        <li>
                            Втирка - 50
                        </li>
                    </ul>
                    <p class="font-bold leading-[1.2rem]">
                        Обратите внимание, что при опаздании на 15 мин. мастер имеет право предложить вам только покрытие камуфлирующей базой без дизайна и донаращивания, при опаздании на 30 мин. - только обработка пальчиков без покрытия. 
                    </p>
                </div>
                <img src="images/view-human-hands (2) 1.png" alt="">
            </section> 

            {{-- WORK IN KTRN --}}
            <section class="space-y-12">
                {{-- <h2 class="text-4xl uppercase font-bold text-center md:text-left">
                    РАБОТА В KTRN
                </h2> --}}
                <div class="md:flex md:space-x-12 space-y-6 md:space-y-0">
                    <div class="md:w-1/3 w-full">
                        <img class="w-full object-cover" src="images/vizitka 4.png" alt="">
                    </div>
                    
                    <div class="md:w-2/3 space-y-9 md:px-12 h-min">
                        <h3 class="font-bold text-3xl">
                            Делаешь классный<br> <span class="text-[#EC693E]">МАНИКЮР</span> или <span class="text-[#E7C7EF]">ПЕДИКЮР</span>?<br> Работай у Нас!
                        </h3>

                        <p>
                            Мы ищем талантливого и креативного специалиста для работы, который будет ответственен и пунктуальный. Присоединяйтесь к нашей команде и воплощайте свои идеи в жизнь!
                        </p>

                        <ul class="text-sm list-inside leading-[20px]">
                            <li class="flex space-x-3">
                                <img src="/images/icons/Line.png" class="w-5 h-5" width="20" height="20"/>
                                <span>
                                    Возможность работать в креативной обстановке.
                                </span>
                            </li>
                            <li class="flex space-x-3">
                                <img src="/images/icons/Line.png" class="w-5 h-5" width="20" height="20"/>
                                <span>
                                    Получение опыта и знаний от опытных специалистов.
                                </span>
                            </li>
                            <li class="flex space-x-3">
                                <img src="/images/icons/Line.png" class="w-5 h-5" width="20" height="20"/>
                                <span>
                                    Работа позволит вам встречать новых интересных людей.
                                </span>
                            </li>
                            <li class="flex space-x-3">
                                <img src="/images/icons/Line.png" class="w-5 h-5" width="20" height="20"/>
                                <span>
                                    Гибкий график работы позволяет совмещать работу с учебой.
                                </span>
                            </li>
                            <li class="flex space-x-3">
                                <img src="/images/icons/Line.png" class="w-5 h-5" width="20" height="20"/>
                                <span>
                                    Хороший уровень заработной платы.
                                </span>
                            </li>
                        </ul>

                        <form action="" class="space-y-6">
                            <p class="text-gray-500 text-sm">
                                Заполни эту простую форму и мы обязательно свяжемся с тобой. 
                            </p>
                            <div class="md:flex md:space-x-3 space-y-3 md:space-y-0">
                                <input type="text" class="w-full border border-black p-4 rounded-full text-center" placeholder="YOUR EMAIL">
                                <button type="submit" class="w-full md:w-min p-4 px-12 bg-[#EC693E] rounded-full text-xl uppercase text-white">
                                    SEND
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            {{-- CERTIFICATES --}}
            <section class="space-y-12">
                {{-- <h2 class="text-4xl uppercase font-bold text-center md:text-left hidden md:block">
                    ПОДАРОЧНЫЙ СЕРТИФИКАТ
                </h2> --}}
                <div class="w-full md:flex md:space-x-12 items-center space-y-12">
                    <div class="md:w-2/5 space-y-12 md:space-y-24">
                        
                        <div class="space-y-6">
                            <h3 class="text-5xl font-bold">
                                Дарите радость своим любимым с помощью KTRN!
                            </h3>
                            <p class="text-sm text-gray-500">
                                Приятного использования вашего подарочного сертификата!
                            </p>
                        </div>
                        
                        <button class="w-full p-4 px-12 bg-black rounded-full text-xl uppercase text-white">
                            КУПИТЬ
                        </button>
                    </div>
                    <img src="images/99 1.png" alt="" class="md:w-3/5">
                </div>
            </section>


            {{-- KONTAKTS --}}
            <section class="space-y-12 md:space-y-24">
                {{-- <h2 class="text-4xl uppercase font-bold text-center">
                    KONTACTS
                </h2> --}}
                <div class="md:flex md:space-x-12 space-y-6 md:space-y-0 w-min md:w-full m-auto ">
                    <div class="flex md:block items-center md:items-start space-x-3 md:space-x-0 text-center md:space-y-6 md:w-1/3 ">
                        <i class="fa-solid fa-location-dot text-4xl md:text-6xl"></i>
                        <address class="whitespace-nowrap">
                            Nováčkova 401/53 <br>614 00 Brno-sever
                        </address>
                    </div>
                    <div class="flex md:block items-center md:items-start space-x-3 md:space-x-0 text-center md:space-y-6 md:w-1/3 ">
                        <i class="fa-solid fa-phone text-4xl md:text-6xl"></i>
                        <a href="tel:+420 777525870" class="block whitespace-nowrap">+420 777525870</a>
                    </div>
                    <div class="flex md:block items-center md:items-start space-x-3 md:space-x-0 text-center md:space-y-6 md:w-1/3 ">
                        <i class="fa-solid fa-envelope text-4xl md:text-6xl"></i>
                        <a href="mailto:ktrn.studio@gmail.com" class="block whitespace-nowrap">ktrn.studio@gmail.com</a>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2606.3901754513054!2d16.629512377630427!3d49.21212707138236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47129488eb420ad9%3A0x654ac455e49ca8b4!2sNov%C3%A1%C4%8Dkova%20401%2F53%2C%20614%2000%20Brno-sever!5e0!3m2!1sru!2scz!4v1711116082900!5m2!1sru!2scz" class="w-full rounded-[60px] h-96 border border-black" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </main>
        <footer>
            <p class="w-full text-center text-gray-600 p-9">
                Provozní doba: dle objednání, IČO: IČ: 09018395, Odpovědná osoba: Ing.arch.Ekaterina Haiduk, Obchodní podmínky
            </p>
        </footer>
    </body>
</html>
