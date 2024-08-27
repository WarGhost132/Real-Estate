<?php

require_once BASE_PATH . '/backend/models/Case.php';

$cases_header = "Несколько реальных кейсов";

$cases_data = [
    new CaseData(
        "1",
        "Peninsula 2",
        "Тип сделки: перепродажа",
        "/assets/images/cases/case-1.webp",
        "/assets/images/cases/case-1-bg.webp",
        [
            new Brief(
                "Тип недвижимости",
                "Студия"
            ),
            new Brief(
                "Местоположение",
                "Дубай"
            ),
        ],
        [
            // new AlbumItem(
            //     "/assets/images/projects/1/exterior/1.webp",
            //     "header",
            //     "description"
            // ),
            new AlbumItem(
                "/assets/images/projects/1/exterior/2.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/1/exterior/3.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/1/exterior/4.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/1/exterior/8.webp",
                "header",
                "description"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/1/interior/5.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/1/interior/6.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/1/interior/7.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/1/interior/9.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/1/interior/10.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/1/interior/11.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/1/interior/12.webp",
                "header",
                "description"
            ),
        ],
        [
            new Property(
                "/assets/images/cases/icons/price_ico.webp",
                "Цена покупки",
                "727 000 AED (199 000 $)"
            ),
            new Property(
                "/assets/images/cases/icons/funds_ico.webp",
                "Свои средства",
                "30%, 218 000 AED (59 750 $)"
            ),
            new Property(
                "/assets/images/cases/icons/resale_ico.webp",
                "Через сколько перепродали",
                "12 месяцев"
            ),
            new Property(
                "/assets/images/cases/icons/resale_price_ico.webp",
                "Цена перепродажи",
                "900 000 AED (246 600 $)"
            ),
            new Property(
                "/assets/images/cases/icons/profit_ico.webp",
                "Прибыль",
                "173 000 AED (47 400 $)"
            ),
            new Property(
                "/assets/images/cases/icons/roi_ico.webp",
                "ROI",
                "79%"
            ),
        ],
        [
            new ContentItem(
                "Проект: Peninsula 2 (Dubai)",
                '
                    <p>Тип юнита: Studio</p>

                    <p>Цена покупки: <b>727,000 аед</b> (199000 $) </p>

                    <p>Сколько оплатили своих денег:   <b>30%</b>,  218,000 аед (59750 $) </p>

                    <p>Через сколько месяцев перепродали:   <b>12мес</b> после покупки </p>

                    <p>Цена перепродажи:   <b>900,000аед</b> (246600 $) </p>

                    <p>Прибыль на вложенный капитал, %:   <b>173,000 аед</b> (47400 $), ROI:  <b>79%</b> </p>
                ',
                "/assets/images/projects/1/exterior/1.webp"
            ),
        ],
        new Review(
            "Григорий Константинович",
            true,
            "55 лет",
            "Москва",
            "Я вам очень благодарен, что вы уделили такое большое количество времени моей сделке, отвечали на огромное количество моих вопросов и все подробно объясняли. С вами очень комфортно работать. Я не самый простой клиент, всегда детально подхожу к задаче, долго анализирую и я чувствовал все время от вас поддержку"
        ),
    ),
    new CaseData(
        "2",
        "Peninsula 3",
        "Тип сделки: перепродажа",
        "/assets/images/cases/case-2.webp",
        "/assets/images/cases/case-2-bg.webp",
        [
            new Brief(
                "Тип недвижимости",
                "1 комната"
            ),
            new Brief(
                "Местоположение",
                "Дубай"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/2/exterior/1.webp",
                "header",
                "description"
            ),
            // new AlbumItem(
            //     "/assets/images/projects/2/exterior/2.webp",
            //     "header",
            //     "description"
            // ),
            new AlbumItem(
                "/assets/images/projects/2/exterior/3.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/2/exterior/4.webp",
                "header",
                "description"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/2/interior/5.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/2/interior/6.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/2/interior/7.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/2/interior/8.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/2/interior/9.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/2/interior/10.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/2/interior/11.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/2/interior/12.webp",
                "header",
                "description"
            ),

        ],
        [
            new Property(
                "/assets/images/cases/icons/price_ico.webp",
                "Цена покупки",
                "1 300 000 AED (356 000 $)"
            ),
            new Property(
                "/assets/images/cases/icons/funds_ico.webp",
                "Свои средства",
                "50%, 650 000 AED (178 000 $)"
            ),
            new Property(
                "/assets/images/cases/icons/resale_ico.webp",
                "Через сколько перепродали",
                "20 месяцев"
            ),
            new Property(
                "/assets/images/cases/icons/resale_price_ico.webp",
                "Цена перепродажи",
                "1 620 000 AED (423 800 $)"
            ),
            new Property(
                "/assets/images/cases/icons/profit_ico.webp",
                "Прибыль",
                "320 000 AED (87 670 $)"
            ),
            new Property(
                "/assets/images/cases/icons/roi_ico.webp",
                "ROI",
                "49%"
            ),
        ],
        [
            new ContentItem(
                "Проект:   Peninsula 3 (Dubai) ",
                '
                    <p>Тип юнита:   <b>1 комната</b> </p>

                    <p>Цена покупки:   <b>1,300,000 аед</b> (356000 $) </p>

                    <p>Сколько оплатили своих денег:   <b>50%</b>,   650,000 аед (178000 $) </p>

                    <p>Через сколько месяцев перепродали:   <b>20 мес</b> после покупки </p>

                    <p>Цена перепродажи:   <b>1620000 аед</b> (423800 $) </p>

                    <p>Прибыль на вложенный капитал, %:   <b>320,000 аед</b> (87670 $), 49% </p>
                ',
                "/assets/images/projects/2/exterior/2.webp"
            ),
        ],
        new Review(
            "Григорий Константинович",
            true,
            "55 лет",
            "Москва",
            "Я вам очень благодарен, что вы уделили такое большое количество времени моей сделке, отвечали на огромное количество моих вопросов и все подробно объясняли. С вами очень комфортно работать. Я не самый простой клиент, всегда детально подхожу к задаче, долго анализирую и я чувствовал все время от вас поддержку"
        ),
    ),
    new CaseData(
        "3",
        "AHAD",
        "Тип сделки: перепродажа",
        "/assets/images/cases/case-3.webp",
        "/assets/images/cases/case-3-bg.webp",
        [
            new Brief(
                "Тип недвижимости",
                "1 комната"
            ),
            new Brief(
                "Местоположение",
                "Дубай"
            ),
        ],
        [
            // new AlbumItem(
            //     "/assets/images/projects/3/exterior/1.webp",
            //     "header",
            //     "description"
            // ),
            new AlbumItem(
                "/assets/images/projects/3/exterior/2.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/3/exterior/3.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/3/exterior/4.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/3/exterior/5.webp",
                "header",
                "description"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/3/interior/6.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/3/interior/7.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/3/interior/8.webp",
                "header",
                "description"
            ),
        ],
        [
            new Property(
                "/assets/images/cases/icons/price_ico.webp",
                "Цена покупки",
                "1 530 000 AED (419 200 $)"
            ),
            new Property(
                "/assets/images/cases/icons/funds_ico.webp",
                "Свои средства",
                "50%, 765 000 AED (209 600 $)"
            ),
            new Property(
                "/assets/images/cases/icons/resale_ico.webp",
                "Через сколько перепродали",
                "18 месяцев"
            ),
            new Property(
                "/assets/images/cases/icons/resale_price_ico.webp",
                "Цена перепродажи",
                "1 880 000 AED (515 000 $)"
            ),
            new Property(
                "/assets/images/cases/icons/profit_ico.webp",
                "Прибыль",
                "350 000 AED (95 900 $)"
            ),
            new Property(
                "/assets/images/cases/icons/roi_ico.webp",
                "ROI",
                "46%"
            ),
        ],
        [
            new ContentItem(
                "Проект:   AHAD (Dubai) ",
                '
                    <p>Тип юнита:   <b>1 комната</b> </p>

                    <p>Цена покупки:   <b>1,530,000 аед</b> (419200 $) </p>

                    <p>Сколько оплатили своих денег:   <b>50%</b>,    765,000 аед (209600 $) </p>

                    <p>Через сколько месяцев перепродали:   <b>18 мес</b> после покупки </p>

                    <p>Цена перепродажи:   <b>1,880,000 аед</b> (515000 $) </p>

                    <p>Прибыль на вложенный капитал, %:   <b>350,000 аед</b> (95900 $), 46% </p>
                ',
                "/assets/images/projects/3/exterior/1.webp"
            ),
        ],
        new Review(
            "Григорий Константинович",
            true,
            "55 лет",
            "Москва",
            "Я вам очень благодарен, что вы уделили такое большое количество времени моей сделке, отвечали на огромное количество моих вопросов и все подробно объясняли. С вами очень комфортно работать. Я не самый простой клиент, всегда детально подхожу к задаче, долго анализирую и я чувствовал все время от вас поддержку"
        ),
    ),
    new CaseData(
        "4",
        "Madinat Jumeirah Living",
        "Тип сделки: перепродажа",
        "/assets/images/cases/case-4.webp",
        "/assets/images/cases/case-4-bg.webp",
        [
            new Brief(
                "Тип недвижимости",
                "2 комнаты"
            ),
            new Brief(
                "Местоположение",
                "Дубай"
            ),
        ],
        [
            // new AlbumItem(
            //     "/assets/images/projects/4/exterior/1.webp",
            //     "header",
            //     "description"
            // ),
            new AlbumItem(
                "/assets/images/projects/4/exterior/2.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/4/exterior/3.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/4/exterior/4.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/4/exterior/7.webp",
                "header",
                "description"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/4/interior/5.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/4/interior/6.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/4/interior/8.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/4/interior/9.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/4/interior/10.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/4/interior/11.webp",
                "header",
                "description"
            ),
        ],
        [
            new Property(
                "/assets/images/cases/icons/price_ico.webp",
                "Цена покупки",
                "2 690 000 AED (737 000 $)"
            ),
            new Property(
                "/assets/images/cases/icons/funds_ico.webp",
                "Свои средства",
                "30%, 807 000 AED (221 090 $)"
            ),
            new Property(
                "/assets/images/cases/icons/resale_ico.webp",
                "Через сколько перепродали",
                "6 месяцев"
            ),
            new Property(
                "/assets/images/cases/icons/resale_price_ico.webp",
                "Цена перепродажи",
                "3 000 000 AED (822 000 $)"
            ),
            new Property(
                "/assets/images/cases/icons/profit_ico.webp",
                "Прибыль",
                "310 000 AED (84 932 $)"
            ),
            new Property(
                "/assets/images/cases/icons/roi_ico.webp",
                "ROI",
                "38,4%"
            ),
        ],
        [
            new ContentItem(
                "Проект:   Madinat Jumeirah Living (Dubai)  ",
                '
                    <p>Тип юнита:   <b>2 комнаты</b> </p>

                    <p>Цена покупки:   <b>2,690,000 аед</b> (737000 $) </p>

                    <p>Сколько оплатили своих денег:   <b>30%</b>,  807,000 аед (221090 $) </p>

                    <p>Через сколько мес. перепродали:   <b>6 мес</b> </p>

                    <p>Цена перепродажи:   <b>3,000,000 аед</b> (822000 $) </p>

                    <p>Прибыль на вложенный капитал, %:   <b>310,000 аед</b> (84932 $),  38.4% </p>
                ',
                "/assets/images/projects/4/exterior/1.webp"
            ),
        ],
        new Review(
            "Григорий Константинович",
            true,
            "55 лет",
            "Москва",
            "Я вам очень благодарен, что вы уделили такое большое количество времени моей сделке, отвечали на огромное количество моих вопросов и все подробно объясняли. С вами очень комфортно работать. Я не самый простой клиент, всегда детально подхожу к задаче, долго анализирую и я чувствовал все время от вас поддержку"
        ),
    ),
    new CaseData(
        "5",
        "Peninsula 3",
        "Тип сделки: перепродажа",
        "/assets/images/cases/case-5.webp",
        "/assets/images/cases/case-5-bg.webp",
        [
            new Brief(
                "Тип недвижимости",
                "Студия"
            ),
            new Brief(
                "Местоположение",
                "Дубай"
            ),
        ],
        [
            // new AlbumItem(
            //     "/assets/images/projects/5/exterior/1.webp",
            //     "header",
            //     "description"
            // ),
            new AlbumItem(
                "/assets/images/projects/5/exterior/2.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/5/exterior/3.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/5/exterior/4.webp",
                "header",
                "description"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/5/interior/5.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/5/interior/6.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/5/interior/7.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/5/interior/8.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/5/interior/9.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/5/interior/10.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/5/interior/11.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/5/interior/12.webp",
                "header",
                "description"
            ),
        ],
        [
            new Property(
                "/assets/images/cases/icons/price_ico.webp",
                "Цена покупки",
                "651 600 AED (178 500 $)"
            ),
            new Property(
                "/assets/images/cases/icons/funds_ico.webp",
                "Свои средства",
                "30%, 195 500 AED (53 500 $)"
            ),
            new Property(
                "/assets/images/cases/icons/resale_ico.webp",
                "Через сколько перепродали",
                "18 месяцев"
            ),
            new Property(
                "/assets/images/cases/icons/resale_price_ico.webp",
                "Цена перепродажи",
                "800 000 AED (219 200 $)"
            ),
            new Property(
                "/assets/images/cases/icons/profit_ico.webp",
                "Прибыль",
                "148 400 AED (40 700 $)"
            ),
            new Property(
                "/assets/images/cases/icons/roi_ico.webp",
                "ROI",
                "76%"
            ),
        ],
        [
            new ContentItem(
                "Проект:   Peninsula 3 (Dubai) ",
                '
                    <p>Тип юнита:   <b>Студия</b> </p>

                    <p>Цена покупки:   <b>651,600 аед</b> (178500 $) </p>

                    <p>Сколько оплатили своих денег:   <b>30%</b>,    195,500 аед (53500 $) </p>

                    <p>Через сколько мес. перепродали:   <b>18 мес</b> </p>

                    <p>Цена перепродажи:   <b>800,000 аед</b> (219200 $) </p>

                    <p>Прибыль на вложенный капитал, %:   <b>148,400 аед</b> (40700 $), 76% </p>
                ',
                "/assets/images/projects/5/exterior/1.webp"
            ),
        ],
        new Review(
            "Григорий Константинович",
            true,
            "55 лет",
            "Москва",
            "Я вам очень благодарен, что вы уделили такое большое количество времени моей сделке, отвечали на огромное количество моих вопросов и все подробно объясняли. С вами очень комфортно работать. Я не самый простой клиент, всегда детально подхожу к задаче, долго анализирую и я чувствовал все время от вас поддержку"
        ),
    ),
    new CaseData(
        "6",
        "AHAD",
        "Тип сделки: выгодная аренда",
        "/assets/images/cases/case-6.webp",
        "/assets/images/cases/case-6-bg.webp",
        [
            new Brief(
                "Тип недвижимости",
                "Студия"
            ),
            new Brief(
                "Местоположение",
                "Дубай"
            ),
        ],
        [
            // new AlbumItem(
            //     "/assets/images/projects/6/exterior/1.webp",
            //     "header",
            //     "description"
            // ),
            new AlbumItem(
                "/assets/images/projects/6/exterior/2.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/6/exterior/3.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/6/exterior/4.webp",
                "header",
                "description"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/6/interior/5.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/6/interior/6.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/6/interior/7.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/6/interior/8.webp",
                "header",
                "description"
            ),
        ],
        [
            new Property(
                "/assets/images/cases/icons/price_ico.webp",
                "Цена покупки",
                "750 000 AED"
            ),
            new Property(
                "/assets/images/cases/icons/funds_ico.webp",
                "Свои средства",
                "100%"
            ),
            new Property(
                "/assets/images/cases/icons/cost_rent_ico.webp",
                "Стоимость аренды",
                "144 000 AED/год (39 450 $)"
            ),
            new Property(
                "/assets/images/cases/icons/when_rented_ico.webp",
                "Когда сдали в аренду",
                "20 месяцев, как получили ключи"
            ),
            new Property(
                "/assets/images/cases/icons/cost_increase_ico.webp",
                "Годовая доходность от аренды",
                "19,2%"
            ),
        ],
        [
            new ContentItem(
                "Проект: AHAD (Dubai) ",
                '
                    <p>Тип юнита: <b>studio</b> </p>

                    <p>Цена покупки: <b>750,000 аед</b> </p>

                    <p>Сколько оплатили своих денег: <b>100%</b> </p>

                    <p>Через сколько мес. сдали в аренду: сдали в долгосрочную аренду через <b>20 мес</b> после покупки, когда получили ключи </p>

                    <p>Стоимость аренды: <b>144,000 аед</b> в год (39450 $) </p>

                    <p>Годовая доходность от аренды, %:  <b>19.2%</b> </p>
                ',
                "/assets/images/projects/6/exterior/1.webp"
            ),
        ],
        new Review(
            "Григорий Константинович",
            true,
            "55 лет",
            "Москва",
            "Я вам очень благодарен, что вы уделили такое большое количество времени моей сделке, отвечали на огромное количество моих вопросов и все подробно объясняли. С вами очень комфортно работать. Я не самый простой клиент, всегда детально подхожу к задаче, долго анализирую и я чувствовал все время от вас поддержку"
        ),
    ),
    new CaseData(
        "7",
        "Binghatti",
        "Тип сделки: выгодная аренда",
        "/assets/images/cases/case-7.webp",
        "/assets/images/cases/case-7-bg.webp",
        [
            new Brief(
                "Тип недвижимости",
                "Студия"
            ),
            new Brief(
                "Местоположение",
                "Дубай"
            ),
        ],
        [
            // new AlbumItem(
            //     "/assets/images/projects/7/exterior/1.webp",
            //     "header",
            //     "description"
            // ),
            new AlbumItem(
                "/assets/images/projects/7/exterior/2.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/7/exterior/3.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/7/exterior/7.webp",
                "header",
                "description"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/7/interior/4.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/7/interior/5.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/7/interior/6.webp",
                "header",
                "description"
            ),
        ],
        [
            new Property(
                "/assets/images/cases/icons/price_ico.webp",
                "Цена покупки",
                "865 800 AED (237 200 $)"
            ),
            new Property(
                "/assets/images/cases/icons/funds_ico.webp",
                "Свои средства",
                "100%"
            ),
            new Property(
                "/assets/images/cases/icons/cost_rent_ico.webp",
                "Стоимость аренды",
                "96 000 AED/год (26 300 $)"
            ),
            new Property(
                "/assets/images/cases/icons/when_rented_ico.webp",
                "Когда сдали в аренду",
                "17 месяцев, как получили ключи"
            ),
            new Property(
                "/assets/images/cases/icons/cost_increase_ico.webp",
                "Годовая доходность от аренды",
                "11%"
            ),
        ],
        [
            new ContentItem(
                "Проект: Binghatti (Dubai) ",
                '
                    <p>Тип юнита: <b>Студия</b> </p>

                    <p>Цена покупки: <b>865,800 аед</b> (237200 $) </p>

                    <p>Сколько оплатили своих денег: <b>100%</b> </p>

                    <p>Через сколько мес. сдали в аренду: через <b>17 месяцев</b> после покупки, когда получили ключи </p>

                    <p>Стоимость аренды: <b>96000 аед</b> в год (26300 $) </p>

                    <p>Годовая доходность от аренды, %:  <b>11%</b> </p>
                ',
                "/assets/images/projects/7/exterior/1.webp"
            ),
        ],
        new Review(
            "Григорий Константинович",
            true,
            "55 лет",
            "Москва",
            "Я вам очень благодарен, что вы уделили такое большое количество времени моей сделке, отвечали на огромное количество моих вопросов и все подробно объясняли. С вами очень комфортно работать. Я не самый простой клиент, всегда детально подхожу к задаче, долго анализирую и я чувствовал все время от вас поддержку"
        ),
    ),
    new CaseData(
        "8",
        "J One",
        "Тип сделки: выгодная сделка с рассрочкой платежей после получения ключей",
        "/assets/images/cases/case-8.webp",
        "/assets/images/cases/case-8-bg.webp",
        [
            new Brief(
                "Тип недвижимости",
                "1 комната"
            ),
            new Brief(
                "Местоположение",
                "Дубай"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/8/exterior/1.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/8/exterior/2.webp",
                "header",
                "description"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/8/interior/3.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/8/interior/4.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/8/interior/5.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/8/interior/6.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/8/interior/7.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/8/interior/8.webp",
                "header",
                "description"
            ),
        ],
        [
            new Property(
                "/assets/images/cases/icons/price_ico.webp",
                "Цена покупки",
                "2 250 000 AED (616 500 $)"
            ),
            new Property(
                "/assets/images/cases/icons/funds_ico.webp",
                "Свои средства",
                "35%, 787 500 AED (215 800 $)"
            ),
            new Property(
                "/assets/images/cases/icons/cost_rent_ico.webp",
                "Стоимость аренды",
                "186 000 AED/год (51 000 $)"
            ),
            new Property(
                "/assets/images/cases/icons/when_rented_ico.webp",
                "Когда сдали в аренду",
                "3 месяцев, как получили ключи"
            ),
            new Property(
                "/assets/images/cases/icons/payment_type_ico.webp",
                "Тип оплаты",
                "30% при покупке, 70% в течение 3 лет"
            ),
        ],
        [
            new ContentItem(
                "Тип оплаты за апартамент",
                '
                <p>
                    <b>30%</b> стоимости квартиры оплатили застройщику при покупке, сразу же получение ключей <br/>
                    <b>70%</b> стоимости оплачивается равномерными платежами в течение 3 лет.
                </p>

                <p>
                    Доход от аренды покрывает <b>35%</b> от суммы ежемесячного платежа за квартиру застройщику:
                </p>

                <ol>
                    <li>44 300 AED (12 150 $) покупатель выплачивает ежемесячно застройщику рассрочку;</li>
                    <li>15 500 AED (4 250 $) ежемесячный доход от аренды, который частично покрывает оплату рассрочки;</li>
                    <li>28 800 AED (7 900 $) ежемесячная оплата покупателем рассрочки своими средствами.</li>
                </ol>
                ',
                "/assets/images/projects/1/exterior/8.webp"
            ),
            new ContentItem(
                "Доходность аренды",
                '
                <p>
                    Годовая доходность аренды от вложенного капитала в первые месяцы: <b>23,6%</b>
                </p>

                <p>
                    По мере выплаты рассрочки доходность будет: в течение первого года: <b>19,3%</b> <br/>
                    в течение второго года <b>15,0%</b> <br/>
                    в течение третьего года <b>11,7%</b>
                </p>

                <p>
                    После выплаты рассрочки годовая доходность <b>8,3%</b>, если стоимость аренды не вырастит
                </p>
                ',
                "/assets/images/projects/1/interior/12.webp"
            )
        ],
        new Review(
            "Григорий Константинович",
            true,
            "55 лет",
            "Москва",
            "Я вам очень благодарен, что вы уделили такое большое количество времени моей сделке, отвечали на огромное количество моих вопросов и все подробно объясняли. С вами очень комфортно работать. Я не самый простой клиент, всегда детально подхожу к задаче, долго анализирую и я чувствовал все время от вас поддержку"
        ),
    ),
    new CaseData(
        "9",
        "Keningston Waters",
        "Тип сделки: рост цены",
        "/assets/images/cases/case-9.webp",
        "/assets/images/cases/case-9-bg.webp",
        [
            new Brief(
                "Тип недвижимости",
                "3 комнаты"
            ),
            new Brief(
                "Местоположение",
                "Дубай"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/9/exterior/1.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/9/exterior/3.webp",
                "header",
                "description"
            ),
        ],
        [
            // new AlbumItem(
            //     "/assets/images/projects/9/interior/2.webp",
            //     "header",
            //     "description"
            // ),
            new AlbumItem(
                "/assets/images/projects/9/interior/4.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/9/interior/5.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/9/interior/6.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/9/interior/7.webp",
                "header",
                "description"
            ),
        ],
        [
            new Property(
                "/assets/images/cases/icons/price_ico.webp",
                "Цена покупки",
                "2 440 000 AED (668 500 $)"
            ),
            new Property(
                "/assets/images/cases/icons/funds_ico.webp",
                "Свои средства",
                "50%"
            ),
            new Property(
                "/assets/images/cases/icons/current_market_price_ico.webp",
                "Текущая рыночная цена",
                "3 350 000 AED (917 800 $)"
            ),
            new Property(
                "/assets/images/cases/icons/time_since_purchase_ico.webp",
                "Время с покупки",
                "24 месяца"
            ),
            new Property(
                "/assets/images/cases/icons/cost_increase_ico.webp",
                "Прирост стоимости",
                "910 000 AED (249 300 $)"
            ),
            new Property(
                "/assets/images/cases/icons/roi_ico.webp",
                "ROI",
                "37,3%"
            ),
            new Property(
                "/assets/images/cases/icons/growth_ico.webp",
                "Через сколько месяцев рост",
                "Семья с 3 детьми покупала квартиру для себя. Получение ключей через 6 месяцев + оплата оставшихся 50%"
            ),
        ],
        [
            new ContentItem(
                "Проект: Keningston Waters (Dubai) ",
                '
                    <p>Тип юнита: <b>3 комнаты</b> </p>

                    <p>Цена покупки: <b>2,440,000 aed (668500 $)</b> </p>

                    <p>Сколько оплатили своих денег на текущий момент: <b>50%</b> </p>

                    <p>Сколько прошло с момента покупки: <b>24 мес</b> </p>

                    <p>Через сколько мес. рост: Семья с 3 детьми покупала квартиру для себя, с целью переехать в страну. Получение ключей через 6 мес + оплата оставшихся 50% </p>

                    <p>Текущая рыночная цена: <b>3,350,000 аед</b> (917800 $) </p>

                    <p>Прирост стоимости объекта, %:  <b>910,000  aed</b> (249300 $), 37.3% </p>
                ',
                "/assets/images/projects/9/interior/2.webp"
            ),
        ],
        new Review(
            "Григорий Константинович",
            true,
            "55 лет",
            "Москва",
            "Я вам очень благодарен, что вы уделили такое большое количество времени моей сделке, отвечали на огромное количество моих вопросов и все подробно объясняли. С вами очень комфортно работать. Я не самый простой клиент, всегда детально подхожу к задаче, долго анализирую и я чувствовал все время от вас поддержку"
        ),
    ),
    new CaseData(
        "10",
        "Central Bay 1",
        "Тип сделки: рост цены",
        "/assets/images/cases/case-10.webp",
        "/assets/images/cases/case-10-bg.webp",
        [
            new Brief(
                "Тип недвижимости",
                "1 комната"
            ),
            new Brief(
                "Местоположение",
                "Рас-эль-Хайма"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/10/exterior/3.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/10/exterior/4.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/10/exterior/5.webp",
                "header",
                "description"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/10/interior/1.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/10/interior/2.webp",
                "header",
                "description"
            ),
        ],
        [
            new Property(
                "/assets/images/cases/icons/price_ico.webp",
                "Цена покупки",
                "981 000 AED (268 767 $)"
            ),
            new Property(
                "/assets/images/cases/icons/funds_ico.webp",
                "Свои средства",
                "40%"
            ),
            new Property(
                "/assets/images/cases/icons/current_market_price_ico.webp",
                "Текущая рыночная цена",
                "1 550 000 AED (424 700 $)"
            ),
            new Property(
                "/assets/images/cases/icons/time_since_purchase_ico.webp",
                "Время с покупки",
                "18 месяца"
            ),
            new Property(
                "/assets/images/cases/icons/cost_increase_ico.webp",
                "Прирост стоимости",
                "569 000 AED (156 000 $)"
            ),
            new Property(
                "/assets/images/cases/icons/roi_ico.webp",
                "ROI",
                "58%"
            ),
        ],
        [
            new ContentItem(
                "Проект: Central Bay 1 (Ras Al Khaima) ",
                '
                    <p>Тип юнита: <b>1 комната</b> </p>

                    <p>Цена покупки: <b>981,000 aed</b> (268767 $) </p>

                    <p>Сколько оплатили своих денег: <b>40%</b> </p>

                    <p>Сколько прошло с момента покупки: <b>18 мес</b> </p>

                    <p>Текущая рыночная цена: <b>1,550,000 аед</b> (424700 $) </p>

                    <p>Прирост стоимости объекта, %:  <b>569,000 аед</b>, (156000 $) <b>58%</b> </p>
                ',
                "/assets/images/projects/10/exterior/3.webp"
            ),
        ],
        new Review(
            "Григорий Константинович",
            true,
            "55 лет",
            "Москва",
            "Я вам очень благодарен, что вы уделили такое большое количество времени моей сделке, отвечали на огромное количество моих вопросов и все подробно объясняли. С вами очень комфортно работать. Я не самый простой клиент, всегда детально подхожу к задаче, долго анализирую и я чувствовал все время от вас поддержку"
        ),
    ),
    new CaseData(
        "11",
        "Binghatti",
        "Тип сделки: рост цены",
        "/assets/images/cases/case-11.webp",
        "/assets/images/cases/case-11-bg.webp",
        [
            new Brief(
                "Тип недвижимости",
                "Студия"
            ),
            new Brief(
                "Местоположение",
                "Дубай"
            ),
        ],
        [
            // new AlbumItem(
            //     "/assets/images/projects/11/exterior/1.webp",
            //     "header",
            //     "description"
            // ),
            new AlbumItem(
                "/assets/images/projects/11/exterior/2.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/11/exterior/3.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/11/exterior/7.webp",
                "header",
                "description"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/11/interior/4.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/11/interior/5.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/11/interior/6.webp",
                "header",
                "description"
            ),
        ],
        [
            new Property(
                "/assets/images/cases/icons/price_ico.webp",
                "Цена покупки",
                "865 800 AED (237 200 $)"
            ),
            new Property(
                "/assets/images/cases/icons/funds_ico.webp",
                "Свои средства",
                "100%"
            ),
            new Property(
                "/assets/images/cases/icons/current_market_price_ico.webp",
                "Текущая рыночная цена",
                "1 300 000 AED (356 200 $)"
            ),
            new Property(
                "/assets/images/cases/icons/time_since_purchase_ico.webp",
                "Время с покупки",
                "16 месяца"
            ),
            new Property(
                "/assets/images/cases/icons/cost_increase_ico.webp",
                "Прирост стоимости",
                "434 200 AED"
            ),
            new Property(
                "/assets/images/cases/icons/roi_ico.webp",
                "ROI",
                "50%"
            ),
        ],
        [
            new ContentItem(
                "Проект: Binghatti (Dubai) ",
                '
                    <p>Тип юнита: <b>Студия </p>

                    <p>Цена покупки: <b>865,800 аед</b> (237200 $) </p>

                    <p>Сколько оплатили своих денег: <b>100%</b> </p>

                    <p>Сколько прошло с момента покупки: <b>16 мес</b> </p>

                    <p>Текущая рыночная цена: <b>1,300,000 аед</b> (356200 $) </p>

                    <p>Прирост стоимости объекта, %:  <b>434,200 аед</b>, (119000 $) 50% </p>
                ',
                "/assets/images/projects/11/exterior/1.webp"
            ),
        ],
        new Review(
            "Григорий Константинович",
            true,
            "55 лет",
            "Москва",
            "Я вам очень благодарен, что вы уделили такое большое количество времени моей сделке, отвечали на огромное количество моих вопросов и все подробно объясняли. С вами очень комфортно работать. Я не самый простой клиент, всегда детально подхожу к задаче, долго анализирую и я чувствовал все время от вас поддержку"
        ),
    ),
    new CaseData(
        "12",
        "Mag Eye",
        "Тип сделки: покупка по выгодной цене, Объекты с закрытых продаж",
        "/assets/images/cases/case-12.webp",
        "/assets/images/cases/case-12-bg.webp",
        [
            new Brief(
                "Тип недвижимости",
                "Студия с мебелью"
            ),
            new Brief(
                "Местоположение",
                "Дубай"
            ),
        ],
        [
            // new AlbumItem(
            //     "/assets/images/projects/12/exterior/1.webp",
            //     "header",
            //     "description"
            // ),
            new AlbumItem(
                "/assets/images/projects/12/exterior/2.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/12/exterior/3.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/12/exterior/4.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/12/exterior/5.webp",
                "header",
                "description"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/12/interior/6.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/12/interior/7.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/12/interior/8.webp",
                "header",
                "description"
            ),
        ],
        [
            new Property(
                "/assets/images/cases/icons/price_ico.webp",
                "Цена покупки",
                "653 000 AED (178 900 $)"
            ),
            new Property(
                "/assets/images/cases/icons/funds_ico.webp",
                "Свои средства",
                "100%"
            ),
            new Property(
                "/assets/images/cases/icons/current_market_price_ico.webp",
                "Текущая рыночная цена",
                "720 000 AED (356 200 $)"
            ),
            new Property(
                "/assets/images/cases/icons/discount_ico.webp",
                "Дисконт от рыночной цены",
                "67 000 AED, (18 360 $), 10,3%"
            ),
        ],
        [
            new ContentItem(
                "Проект: Mag Eye (Dubai) ",
                '
                    <p>Тип юнита: <b>Студия</b> с мебелью </p>

                    <p>Цена покупки: <b>653000 аед</b> (178900 $) </p>

                    <p>Сколько оплатили своих денег: <b>100%</b> </p>

                    <p>Рыночная цена на момент покупки: <b>720000 аед</b> (356200 $) </p>

                    <p>Дисконт от рыночной цены, %:  <b>67000 аед</b>, (18360 $)  10.3% </p>
                ',
                "/assets/images/projects/12/exterior/1.webp"
            ),
        ],
        new Review(
            "Григорий Константинович",
            true,
            "55 лет",
            "Москва",
            "Я вам очень благодарен, что вы уделили такое большое количество времени моей сделке, отвечали на огромное количество моих вопросов и все подробно объясняли. С вами очень комфортно работать. Я не самый простой клиент, всегда детально подхожу к задаче, долго анализирую и я чувствовал все время от вас поддержку"
        ),
    ),
    new CaseData(
        "13",
        "Seaside Hills Residence",
        "Тип сделки: покупка по выгодной цене, Объекты с закрытых продаж",
        "/assets/images/cases/case-13.webp",
        "/assets/images/cases/case-13-bg.webp",
        [
            new Brief(
                "Тип недвижимости",
                "1 комната"
            ),
            new Brief(
                "Местоположение",
                "Аджман"
            ),
        ],
        [
            // new AlbumItem(
            //     "/assets/images/projects/13/exterior/1.webp",
            //     "header",
            //     "description"
            // ),
            new AlbumItem(
                "/assets/images/projects/13/exterior/2.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/13/exterior/3.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/13/exterior/4.webp",
                "header",
                "description"
            ),
        ],
        [
            new AlbumItem(
                "/assets/images/projects/13/interior/5.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/13/interior/6.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/13/interior/7.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/13/interior/8.webp",
                "header",
                "description"
            ),
            new AlbumItem(
                "/assets/images/projects/13/interior/9.webp",
                "header",
                "description"
            ),
        ],
        [
            new Property(
                "/assets/images/cases/icons/price_ico.webp",
                "Цена покупки",
                "1 632 000 AED (447 100 $)"
            ),
            new Property(
                "/assets/images/cases/icons/funds_ico.webp",
                "Свои средства",
                "10%, 163 200 AED (44 700 $)"
            ),
            new Property(
                "/assets/images/cases/icons/current_market_price_ico.webp",
                "Текущая рыночная цена",
                "1 820 000 AED (498 600 $)"
            ),
            new Property(
                "/assets/images/cases/icons/discount_ico.webp",
                "Дисконт от рыночной цены",
                "188 000 AED, (51 500 $), 11,5%"
            ),
        ],
        [
            new ContentItem(
                "Проект: Seaside Hills Residence (Ajman) ",
                '
                    <p>Тип юнита: <b>1 комната</b> </p>

                    <p>Цена покупки: <b>1,632,000 аед</b> (447100 $) </p>

                    <p>Сколько оплатили своих денег: <b>10%</b>,  163,200 aed (44700 $) </p>

                    <p>Рыночная цена на момент покупки: <b>1,820,000 аед</b> (498600 $)</p> 

                    <p>Дисконт от рыночной цены, %:  <b>188,000 аед</b>, (51500 $)  11.5% </p>
                ',
                "/assets/images/projects/13/exterior/1.webp"
            ),
        ],
        new Review(
            "Григорий Константинович",
            true,
            "55 лет",
            "Москва",
            "Я вам очень благодарен, что вы уделили такое большое количество времени моей сделке, отвечали на огромное количество моих вопросов и все подробно объясняли. С вами очень комфортно работать. Я не самый простой клиент, всегда детально подхожу к задаче, долго анализирую и я чувствовал все время от вас поддержку"
        ),
    )
];

$cases_button = "Подробнее";

$cases_ref = [
    "text" => "Для Вас мы подобдерём такие же выгодные объекты, как для перепродажи, так и для сдачи в аренду.",
    "button" => "Оставить заявку"
];
