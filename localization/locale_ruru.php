<?php

if (!defined('AOWOW_REVISION'))
    die('illegal access');

/*
    some translations have yet to be taken from or improved by the use of:
    <path>\World of Warcraft\Data\ruRU\patch-ruRu-3.MPQ\Interface\FrameXML\GlobalStrings.lua
    like: ITEM_MOD_*, POWER_TYPE_*, ITEM_BIND_*, PVP_RANK_*
*/

$lang = array(
    // page variables
    'main' => array(
        'name'          => "Название",
        'link'          => "Ссылка",
        'signIn'        => "Войти",
        'jsError'       => "Для работы этого сайта необходим JavaScript.",
        'searchButton'  => "Искать",
        'language'      => "Язык",
        'numSQL'        => "Количество MySQL запросов",
        'timeSQL'       => "Время выполнения MySQL запросов",
        'noJScript'     => "<b>Данный сайт активно использует технологию JavaScript.</b><br />Пожалуйста, <a href=\"https://www.google.com/support/adsense/bin/answer.py?answer=12654\" target=\"_blank\">Включите JavaScript</a> в вашем браузере.",
        'profiles'      => "Ваши персонажи",    // translate.google :x
        'pageNotFound'  => "Такое %s не существует.",
        'gender'        => "Пол",
        'sex'           => [null, 'Мужчина', 'Женщина'],
        'quickFacts'    => "Краткая информация",
        'screenshots'   => "Изображения",
        'videos'        => "Видео",
        'side'          => "Сторона",
        'related'       => "Дополнительная информация",
        'contribute'    => "Добавить",
        // 'replyingTo'    => "Ответ на комментарий от",
        'submit'        => "Отправить",
        'cancel'        => "Отмена",
        'rewards'       => "Награды",
        'gains'         => "Бонус",
        'login'         => "[Login]",
        'forum'         => "[Forum]",
        'days'          => "дн",
        'hours'         => "часы",
        'minutes'       => "мин",
        'seconds'       => "секунды",
        'millisecs'     => "[milliseconds]",
        'daysAbbr'      => "дн",
        'hoursAbbr'     => "ч.",
        'minutesAbbr'   => "мин",
        'secondsAbbr'   => "сек.",
        'millisecsAbbr' => "[ms]",

        'n_a'           => "нет",

        // filter
        'extSearch'     => "Расширенный поиск",
        'addFilter'     => "Добавить другой фильтр",
        'match'         => "Совпадение",
        'allFilter'     => "Все фильтры",
        'oneFilter'     => "Любое совпадение",
        'applyFilter'   => "Применить фильтр",
        'resetForm'     => "Очистить форму",
        'refineSearch'  => "Совет: Уточните поиск, добавив <a href=\"javascript:;\" id=\"fi_subcat\">подкатегорию</a>.",
        'clear'         => "Очистить",
        'exactMatch'    => "Полное совпадение",

        // infobox
        'unavailable'   => "Недоступно игрокам",
        'disabled'      => "[Disabled]",
        'disabledHint'  => "[Cannot be attained or completed]",
        'serverside'    => "[Serverside]",
        'serversideHint' => "[These informations are not in the Client and have been provided by sniffing and/or guessing.]",

        // red buttons
        'links'         => "Ссылки",
        'compare'       => "Сравнить",
        'view3D'        => "Посмотреть в 3D"
    ),
    'search' => array(
        'search'        => "Поиск",
        'foundResult'   => "Результаты поиска для",
        'noResult'      => "Ничего не найдено для",
        'tryAgain'      => "Пожалуйста, попробуйте другие ключевые слова или проверьте правильность запроса.",
    ),
    'game' => array(
        'achievement'   => "достижение",
        'achievements'  => "Достижения",
        'class'         => "класс",
        'classes'       => "Классы",
        'currency'      => "валюта",
        'currencies'    => "Валюта",
        'difficulty'    => "Сложность",
        'dispelType'    => "Тип рассеивания",
        'duration'      => "Длительность",
        'gameObject'    => "объект",
        'gameObjects'   => "Объекты",
        'glyphType'     => "Тип символа",
        'race'          => "раса",
        'races'         => "Расы",
        'title'         => "звание",
        'titles'        => "Звания",
        'eventShort'    => "Игровое событие",
        'event'         => "Событие",
        'events'        => "Игровые события",
        'cooldown'      => "Восстановление: %s",
        'itemset'       => "комплект",
        'itemsets'      => "Комплекты",
        'mechanic'      => "Механика",
        'mechAbbr'      => "Механика",
        'pet'           => "Питомец",
        'pets'          => "Питомцы охотников",
        'profile'       => "",
        'profiles'      => "Профили",
        'petCalc'       => "Расчёт умений питомцев",
        'requires'      => "Требует %s",
        'requires2'     => "Требуется:",
        'reqLevel'      => "Требуется уровень: %s",
        'reqLevelHlm'   => "Требуется уровень: %s",
        'reqSkillLevel' => "Требуется уровень навыка",
        'level'         => "Уровень",
        'school'        => "Школа",
        'spell'         => "заклинание",
        'spells'        => "Заклинания",
        'valueDelim'    => " - ",
        'zone'          => "игровая зона",
        'zones'         => "Местности",
        'expansions'    => array("World of Warcraft", "The Burning Crusade", "Wrath of the Lich King"),
        'stats'         => array("к силе", "к ловкости", "к выносливости", "к интеллекту", "к духу"),
        'languages'     => array(
            1 => "орочий",      2 => "дарнасский",      3 => "таурахэ",     6 => "дворфийский",     7 => "всеобщий",        8 => "язык демонов",    9 => "язык титанов",    10 => "талассийский",
            11 => "драконий",   12 => "калимаг",        13 => "гномский",   14 => "язык троллей",   33 => "наречие нежити", 35 => "дренейский",     36 => "наречие зомби",  37 => "машинный гномский", 38 => "машинный гоблинский"
        ),
        'gl'            => array(null, "Большой", "Малый"),
        'si'            => array(-2 => "Орда только", -1 => "Альянс только", null, "Альянс", "Орда", "Обе"),
        'resistances'   => array(null, 'Сопротивление светлой магии', 'Сопротивление огню', 'Сопротивление силам природы', 'Сопротивление магии льда', 'Сопротивление темной магии', 'Сопротивление тайной магии'),
        'dt'            => array(null, 'Магия', 'Проклятие', 'Болезнь', 'Яд', 'Незаметность', 'Невидимость', null, null, 'Исступление'),
        'sc'            => array("Физический урон", "Свет", "Огонь", "природа", "Лед", "Тьма", "Тайная магия"),
        'cl'            => array(null, "Воин", "Паладин", "Охотник", "Разбойник", "Жрец", "Рыцарь смерти", "Шаман", "Маг", "Чернокнижник", null, "Друид"),
        'ra'            => array(-2 => "Орда", -1 => "Альянс", "Обе", "Человек", "Орк", "Дворф", "Ночной эльф", "Нежить", "Таурен", "Гном", "Тролль", null, "Эльф крови", "Дреней"),
        'rep'           => array("Ненависть", "Враждебность", "Неприязнь", "Равнодушие", "Дружелюбие", "Уважение", "Почтение", "Превознесение"),
        'st'            => array(
            null,               "Облик кошки",                  "TОблик Древа жизни",           "Походный облик",               "Водный облик",
            "Облик медведя",    null,                           null,                           "Облик лютого медведя",         null,
            null,               null,                           null,                           "Танец теней",                  null,
            null,               "Призрачный волк",              "Боевая стойка",                "Оборонительная стойка",        "Стойка берсерка",
            null,               null,                           "Метаморфоза",                  null,                           null,
            null,               null,                           "Облик стремительной птицы",    "Облик Тьмы",                   "Облик птицы",
            "Незаметность",     "Облик лунного совуха",         "Дух воздаяния"
        ),
        'me'            => array(
            null,                       "Подчинённый",              "Дезориентирован",          "Разоружённый",             "Отвлечён",                 "Убегающий",                "Неуклюжий",                "Оплетён",
            "Немота",                   "В покое",                  "Усыплён",                  "Пойманный в ловушку",      "Оглушен",                  "Замороженный",             "Бездейственный",           "Кровоточащий",
            "Целительное",              "Превращён",                "Изгнан",                   "Ограждён",                 "Скован",                   "Оседлавший",               "Соблазнён",                "Обращение",
            "Испуганный",               "Неуязвимый",               "Прервано",                 "Замедленный",              "Открытие",                 "Неуязвимый",               "Ошеломлён",                "Исступление"
        ),
        'ct'            => array(
            "Разное",                   "Животное",                 "Дракон",                   "Демон",                    "Элементаль",               "Великан",                  "Нежить",                   "Гуманоид",
            "Существо",                 "Механизм",                 "Не указано",               "Тотем",                    "Спутник",                  "Облако газа"
        ),
        'fa'            => array(
            1 => "Волк",                2 => "Кошка",               3 => "Паук",                4 => "Медведь",             5 => "Вепрь",               6 => "Кроколиск",           7 => "Падальщик",           8 => "Краб",
            9 => "Горилла",             11 => "Ящер",               12 => "Долгоног",           20 => "Скорпид",            21 => "Черепаха",           24 => "Летучая мышь",       25 => "Гиена",              26 => "Сова",
            27 => "Крылатый змей",      30 => "Дракондор",          31 => "Опустошитель",       32 => "Прыгуана",           33 => "Спороскат",          34 => "Скат Пустоты",       35 => "Змей",               37 => "Мотылек",
            38 => "Химера",             39 => "Дьявозавр",          41 => "Силитид",            42 => "Червь",              43 => "Люторог",            44 => "Оса",                45 => "Гончая Недр",        46 => "Дух зверя"
        ),
        'pvpRank'       => array(
            null,                                       "Private / Scout",                      "Corporal / Grunt",
            "Sergeant / Sergeant",                      "Master Sergeant / Senior Sergeant",    "Sergeant Major / First Sergeant",
            "Knight / Stone Guard",                     "Knight-Lieutenant / Blood Guard",      "Knight-Captain / Legionnare",
            "Knight-Champion / Centurion",              "Lieutenant Commander / Champion",      "Commander / Lieutenant General",
            "Marshal / General",                        "Field Marshal / Warlord",              "Grand Marshal / High Warlord"
        ),
    ),
    'error' => array(
        'errNotFound'   => "Page not found",
        'errPage'       => "What? How did you... nevermind that!\n<br>\n<br>\nIt appears that the page you have requested cannot be found. At least, not in this dimension.\n<br>\n<br>\nPerhaps a few tweaks to the <span class=\"q4\">[WH-799 Major Confabulation Engine]</span> may result in the page suddenly making an appearance!\n<div class=\"pad\"></div>\n<div class=\"pad\"></div>\nOr, you can try \n<a href=\"http://www.wowhead.com/?aboutus#contact\">contacting us</a>\n- the stability of the WH-799 is debatable, and we wouldn't want another accident...",
        'goStart'       => "Return to the <a href=\"index.php\">homepage</a>",
        'goForum'       => "Feedback <a href=\"?forums&board=1\">forum</a>",
    ),
    'account'  => [],
    'event' => array(
        'category'      => array("Разное", "Праздники", "Периодические", "PvP")
    ),
    'npc'   => array(
        'rank'          => ['Обычный', 'Элитный', 'Редкий элитный', 'Босс', 'Редкий']
    ),
    'achievement' => array(
        'criteria'      => "Критерий",
        'points'        => "Очки",
        'series'        => "Серии",
        'outOf'         => "из",
        'criteriaType'  => "[Criterium Type-Id]:",
        'itemReward'    => "Вы получите:",
        'titleReward'   => "Наградное звание: \"<a href=\"?title=%d\">%s</a>\"",
        'slain'         => "убито",
    ),
    'compare' => array(
        'compare'       => "Инструмент сравнения предметов",
    ),
    'talent' => array(
        'talentCalc'    => "Калькулятор Талантов",
        'petCalc'       => "Расчёт умений питомцев",
        'chooseClass'   => "Выберите класс",
        'chooseFamily'  => "Выберите семейство питомцев",
    ),
    'maps' => array(
        'maps'          => "Карты",
        'linkToThisMap' => "Ссылка на эту карту",
        'clear'         => "Очистить",
        'EasternKingdoms' => "Восточные королевства",
        'Kalimdor'      => "Калимдор",
        'Outland'       => "Запределье",
        'Northrend'     => "Нордскол",
        'Instances'     => "Поземелья и рейды",
        'Dungeons'      => "Подземелья",
        'Raids'         => "Рейды",
        'More'          => "Дополнительно ",
        'Battlegrounds' => "Поля боя",
        'Miscellaneous' => "Разное",
        'Azeroth'       => "Азерот",
        'CosmicMap'     => "Звёздная карта",
    ),
    'zone' => array(
        // 'zone'          => "Игровая зона",
        // 'zonePartOf'    => "Эта игровая локация является частью локации",
        'cat'           => array(
            "Восточные королевства",    "Калимдор",                 "Подземелья",               "Рейды",                    "Неактивно",                null,
            "Поля боя",                 null,                       "Запределье",               "Арены",                    "Нордскол"
        )
    ),
    'quest' => array(
        'level'         => '%s-го уровня',
        'daily'         => '',                              // empty on purpose .. wtf guys?!
        'requirements'  => 'Требования'
    ),
    'title' => array(
        'cat'           => array(
            'Общее',      'PvP',    'Репутация',       'Подземелья и рейды',     'Задания',       'Профессии',      'Игровые события'
        )
    ),
    'currency' => array(
        'cat'           => array(
            1 => "Разное", 2 => "PvP", 4 => "World of Warcraft", 21 => "Wrath of the Lich King", 22 => "Подземелья и рейды", 23 => "Burning Crusade", 41 => "Test", 3 => "Неактивно"
        )
    ),
    'pet'      => array(
        'exotic'        => "Экзотический",
        "cat"           => ["Свирепость", "Упорство", "Хитрость"]
    ),
    'itemset' => array(
        '_desc'         => "<b>%s</b> — <b>%s</b>. Он состоит из %s предметов.",
        '_descTagless'  => "<b>%s</b> — набор из %s предметов.",
        '_setBonuses'   => "Бонус за комплект",
        '_conveyBonus'  => "Ношение большего числа предметов из этого комплекта предоставит бонусы для вашего персонажа.",
        '_pieces'       => "частей",
        '_unavailable'  => "Этот набор предметов не доступен игрокам.",
        '_tag'          => "Тэг",
        '_type'         => "Тип",

        'notes'         => array(
            null,                                       "Комплект подземелий 1",                "Комплект подземелий 2",                        "Рейдовый комплект Tier 1",
            "Рейдовый комплект Tier 2",                 "Рейдовый комплект Tier 3",             "PvP Комплект для 60 уровня",                   "PvP Комплект для 60 уровня (старая версия)",
            "Эпический PvP Комплект для 60 уровня",     "Комплект из Руин Ан'Киража",           "Комплект из Храма Ан'Киража",                  "Комплект Зул'Гуруба",
            "Рейдовый комплект Tier 4",                 "Рейдовый комплект Tier 5",             "Комплект подземелий 3",                        "Комплект Низин Арати",
            "Редкий PvP Комплект для 70 уровня",        "Комплект Арены 1 сезона",              "Рейдовый комплект Tier 6",                     "Комплект Арены 2 сезона",
            "Комплект Арены 3 сезона",                  "PvP Комплект для 70 уровня 2",         "Комплект Арены 4 сезона",                      "Рейдовый комплект Tier 7",
            "Комплект Арены 5 сезона",                  "Рейдовый комплект Tier 8",             "Комплект Арены 6 сезона",                      "Рейдовый комплект Tier 9",
            "Комплект Арены 7 сезона",                  "Рейдовый комплект Tier 10",            "Комплект Арены 8 сезона"
        ),
        'types'         => array(
            null,               "Ткань",                "Кожа",                 "Кольчуга",                 "Латы",                     "Кинжал",                   "Кольцо",
            "Кистевое оружие",  "Одноручный топор",     "Одноручное дробящее",  "Одноручный меч",           "Аксессуар",                "Амулет"
        )
    ),
    'spell' => array(
        '_spellDetails' => "Описание заклинания",
        '_cost'         => "Цена",
        '_range'        => "Радиус действия",
        '_castTime'     => "Применение",
        '_cooldown'     => "Восстановление",
        '_distUnit'     => "метров",
        '_forms'        => "Форма",
        '_aura'         => "аура",
        '_effect'       => "Эффект",
        '_none'         => "Нет",
        '_gcd'          => "ГКД",
        '_globCD'       => "Общее время восстановления (GCD)",
        '_gcdCategory'  => "Категория ГКД",
        '_value'        => "Значение",
        '_radius'       => "Радиус действия",
        '_interval'     => "Интервал",
        '_inSlot'       => "в слот",

        'starter'       => "Начальное заклинание",
        'trainingCost'  => "Цена обучения",
        'remaining'     => "Осталось: %s",
        'untilCanceled' => "до отмены",
        'castIn'        => "Применение: %s сек.",
        'instantPhys'   => "Мгновенное действие",
        'instantMagic'  => "Мгновенное действие",
        'channeled'     => "Направляемое",
        'range'         => "Радиус действия: %s м",
        'meleeRange'    => "Дистанция ближнего боя",
        'unlimRange'    => "Неограниченное расстояние",
        'reagents'      => "Реагент",
        'home'          => "%lt;Гостиница&gt;",
        'tools'         => "Инструменты",
        'pctCostOf'     => "от базовой %s",
        'costPerSec'    => ", плюс %s в секунду",
        'costPerLevel'  => ", плюс %s за уровень",
        'powerRunes'    => ["Лед", "Руна льда", "Руна крови", "Смерти"],
        'powerTypes'    => array(
            -2 => "Здоровье",  -1 => null,  "Мана",     "Ярость",     "Тонус",    "Энергия",       "[Happiness]",        "[Rune]",    "Руническая сила",
            'AMMOSLOT' => "[Ammo]",         'STEAM' => "[Steam Pressure]",      'WRATH' => "Гневу",                 'PYRITE' => "Колчедан",
            'HEAT' => "Жар",                'OOZE' => "Слизнюка",               'BLOOD_POWER' => "Сила крови"
        ),
        'relItems'      => array (
            'base'    => "<small>Показать %s, относящиеся к профессии <b>%s</b></small>",
            'link'    => " или ",
            'recipes' => "<a href=\"?items=9.%s\">рецепты</a>",
            'crafted' => "<a href=\"?items&filter=cr=86;crs=%s\">производимые предметы</a>"
        ),
        'cat'           => array(
              7 => "Способности",
            -13 => "Символы",
            -11 => array("Умения", 8 => "Броня", 10 => "Языки", 6 => "Оружие"),
             -4 => "Классовые навыки",
             -2 => "Таланты",
             -6 => "Спутники",
             -5 => "Транспорт",
             -3 => array(
                "Способности питомцев",     782 => "Вурдалак",          270 => "Общий",                 211 => "Вепрь",                     208 => "Волк",                  654 => "Гиена",                 787 => "Гончая Недр",
                215 => "Горилла",           218 => "Долгоног",          763 => "Дракондор",             788 => "Дух зверя",                 781 => "Дьявозавр",             768 => "Змей",                  209 => "Кошка",
                214 => "Краб",              212 => "Кроколиск",         656 => "Крылатый змей",         653 => "Летучая мышь",              786 => "Люторог",               210 => "Медведь",               775 => "Мотылек",
                767 => "Опустошитель",      785 => "Оса",               213 => "Падальщик",             203 => "Паук",                      766 => "Прыгуана",              783 => "Силитид",               764 => "Скат Пустоты",
                236 => "Скорпид",           655 => "Сова",              765 => "Спороскат",             780 => "Химера",                    784 => "Червь",                 251 => "Черепаха",              217 => "Ящер",
                761 => "Страж Скверны",     189 => "Охотник Скверны",   188 => "Бес",                   205 => "Суккуб",                    204 => "Демон Бездны"
            ),
             -7 => array("Таланты питомцев", 411 => "Хитрость", 410 => "Свирепость", 409 => "Упорство"),
             11 => array(
                "Профессии",
                171 => "Алхимия",
                164 => array("Кузнечное дело", 9788 => "Школа брони", 9787 => "Школа оружейников", 17041 => "Мастер школы топора", 17040 => "Мастер школы молота", 17039 => "Мастер ковки клинков"),
                333 => "Наложение чар",
                202 => array("Инженерное дело", 20219 => "Гномская механика", 20222 => "Гоблинская механика"),
                182 => "Травничество",
                773 => "Начертание",
                755 => "Ювелирное дело",
                165 => array("Кожевничество", 10656 => "Драконья чешуя", 10658 => "Стихия", 10660 => "Племена"),
                186 => "Горное дело",
                393 => "Снятие шкур",
                197 => array("Портняжное дело", 26798 => "Портняжное дело изначальной луноткани", 26801 => "Портняжное дело тенеткани", 26797 => "Портняжное дело чародейского огня")
            ),
              9 => array("Вторичные навыки", 185 => "Кулинария", 129 => "Первая помощь", 356 => "Рыбная ловля", 762 => "Верховая езда"),
             -9 => "Способности ГМ",
             -8 => "Способности НИП",
              0 => "Разное"
        ),
        'armorSubClass' => array(
            "Разное",               "Тканевые",         "Кожаные",              "Кольчужные",                   "Латные",
            null,                   "Щиты",             "Манускрипты",          "Идолы",                        "Тотемы",
            "Печати"
        ),
        'weaponSubClass' => array(
            "Одноручные топоры",    "Двуручные топоры", "Луки",                 "Огнестрельное",                "Одноручное дробящее",
            "Двуручное дробящее",   "Древковое",        "Одноручные мечи",      "Двуручные мечи",               null,
            "Посохи",               null,               null,                   "Кистевое",                     "Разное",
            "Кинжалы",              "Метательное",      null,                   "Арбалеты",                     "Жезлы",
            "Удочки"
        ),
        'subClassMasks'      => array(
            0x02A5F3 => 'Оружие ближнего боя',          0x0060 => 'Щит',                            0x04000C => 'Оружие дальнего боя',          0xA091 => 'Одноручное оружие ближнего боя'
        ),
        'traitShort'    => array(
            'atkpwr'    => "СА",                        'rgdatkpwr' => "Сил",                                   'splpwr'    => "СЗ",
            'arcsplpwr' => "Урон",                      'firsplpwr' => "Урон",                                  'frosplpwr' => "Урон",
            'holsplpwr' => "Урон",                      'natsplpwr' => "Урон",                                  'shasplpwr' => "Урон",
            'splheal'   => "Исцеление"
        )
    ),
    'item' => array(
        'armor'         => "Броня: %s",
        'block'         => "Блок: %s",
        'charges'       => "зарядов",
        'expend'        => "expendable",
        'locked'        => "Заперт",
        'ratingString'  => "%s&nbsp;@&nbsp;L%s",
        'heroic'        => "Героический",
        'unique'        => "Уникальный",
        'uniqueEquipped'=> "Не более 1 в вооружении",
        'startQuest'    => "Этот предмет позволяет получить задание.",
        'bagSlotString' => "%s (ячеек: %d)",
        'dps'           => "ед. урона в секунду",
        'dps2'          => "урон в секунду",
        'addsDps'       => "Добавляет",
        'fap'           => "Сила атаки зверя",
        'durability'    => "Прочность:",
        'duration'      => "Длительность:",
        'realTime'      => "реальное время",
        'conjured'      => "Сотворенный предмет",
        'damagePhys'    => "Урон: %s",
        'damageMagic'   => "Урон: %s (%s)",
        'speed'         => "Скорость",
        'sellPrice'     => "Цена продажи",
        'itemLevel'     => "Уровень предмета:",
        'randEnchant'   => "&lt;Случайное зачарование&gt",
        'readClick'     => "&lt;Щелкните правой кнопкой мыши, чтобы прочитать.&gt",
        'set'           => "Набор",
        'socketBonus'   => "При соответствии цвета",
        'socket'        => array(
            "Особое гнездо",        "Красное гнездо",   "Желтое гнездо",        "Синее гнездо",           -1 => "Бесцветное гнездо"
        ),
        'quality'       => array (
            "Низкий",               "Обычный",          "Необычный",            "Редкий",
            "Эпический",            "Легендарный",      "Артефакт",             "Фамильная черта"
        ),
        'trigger'       => array (
            "Использование: ",              "Если на персонаже: ",          "Возможный эффект при попадании: ",              null,
            null,                           null,                           null
        ),
        'bonding'       => array (
            "Привязано к учетной записи",               "Персональный при поднятии",                            "Становится персональным при надевании",
            "Персональный при использовании",           "[Персональными]", /*google translate*/                 "Предмет, необходимый для задания"
        ),
        "bagFamily"     => array(
            "Сумка",                "Колчан",           "Подсумок",             "Сумка душ",                    "Сумка кожевника",
            "Сумка начертателя",    "Сумка травника",   "Сумка зачаровывателя", "Сумка инженера",               "Ключ",
            "Сумка ювелира",        "Сумка шахтера"
        ),
        'inventoryType' => array(
            null,                   "Голова",           "Шея",                  "Плечи",                        "Рубашка",
            "Грудь",                "Пояс",             "Ноги",                 "Ступни",                       "Запястья",
            "Кисти рук",            "Палец",            "Аксессуар",            "Одноручное",                   "Левая рука",
            "Дальний бой",          "Спина",            "Двуручное",            "Сумка",                        "Гербовая накидка",
            "Грудь",                "Правая рука",      "Левая рука",           "Левая рука",                   "Боеприпасы",
            "Метательное",          "Спина",            "Колчан",               "Реликвия"
        ),
        'armorSubClass' => array(
            "Разное",               "Ткань",            "Кожа",                 "Кольчуга",                     "Латы",
            null,                   "Щит",              "Манускрипт",           "Идол",                         "Тотем",
            "Печать"
        ),
        'weaponSubClass' => array(
            "топор",                "топор",            "Лук",                  "Огнестрельное",                "дробящее",
            "дробящее",             "Древковое",        "меч",                  "меч",                          null,
            "Посох",                null,               null,                   "Кистевое оружие",              "Разное",
            "Кинжал",               "Метательное",      null,                   "Арбалет",                      "Жезл",
            "Удочка"
        ),
        'projectileSubClass' => array(
            null,                   null,               "Стрелы",               "Пули",                         null
        ),
        'statType'  => array(
            "Увеличение запаса маны на %d ед.",
            "Увеличение максимального запаса здоровья на %d ед.",
            null,
            "к ловкости",
            "к силе",
            "к интеллекту",
            "к духу",
            "к выносливости",
            null, null, null, null,
            "Рейтинг защиты +%d.",
            "Рейтинг уклонения +%d.",
            "Рейтинг парирования +%d.",
            "Рейтинг блокирования щитом +%d.",
            "Рейтинг меткости (оруж. ближ. боя) +%d.",
            "Рейтинг меткости (оруж. дальн. боя) +%d.",
            "Рейтинг меткости (заклинания) +%d.",
            "Рейтинг крит. удара оруж. ближнего боя +%d.",
            "Рейтинг крит. удара оруж. дальнего боя +%d.",
            "Рейтинг критического удара (заклинания) +%d.",
            "Рейтинг уклонения от удара оруж. ближ. боя +%d.",
            "Рейтинг уклонения от удара оруж. дальн. боя +%d.",
            "Рейтинг уклонения от удара (заклинания) +%d.",
            "Рейтинг уклонения от крит. удара оруж. ближнего боя +%d.",
            "Рейтинг уклонения от крит. удара оруж. дистанц. боя +%d.",
            "Рейтинг уклонения от крит. удара (заклинания) +%d.",
            "Рейтинг скорости ближнего боя +%d.",
            "Рейтинг скорости дальнего боя +%d.",
            "Рейтинг скорости боя (заклинания) +%d.",
            "Рейтинг меткости +%d.",
            "Рейтинг критического удара +%d.",
            "Рейтинг уклонения от удара +%d.",
            "Рейтинг уклонения от крит. удара +%d.",
            "Рейтинг устойчивости +%d.",
            "Рейтинг скорости +%d.",
            "Рейтинг мастерства +%d.",
            "Увеличивает силу атаки на %d.",
            "Сила атаки дальнего боя +%d.",
            "Увеличивает силу атаки на %d в облике кошки, медведя, лютого медведя или лунного совуха.",
            "Увеличивает наносимый игроком урон от магических эффектов и заклинаний на %d ед.",
            "Увеличивает целительное действие магических заклинаний и эффектов на %d ед.",
            "Восполнение %d ед. маны раз в 5 секунд.",
            "Повышает рейтинг пробивания брони на %d.",
            "Увеличивает силу заклинаний на %d.",
            "Восполняет %d ед. здоровья каждые 5 секунд.",
            "Увеличивает проникающую способность заклинаний на %d.",
            "Увеличивает показатель блокирования щита на %d.",
            "Unknown Bonus #%d (%d)",
        )
    ),
    'colon'         => ': '
);

?>
