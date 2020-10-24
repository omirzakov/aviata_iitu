@extends('layouts.app')

@section('styles')

<link rel="stylesheet" href="{{ url('css/home.css') }}">
    
@endsection

@section('content')
<div class="full-bg">
    <div class="container">
        <div class="header-text">
            <h1>Поиск авиабилетов</h1>
            <p>Бронируйте билеты быстро и выгодно</p>
        </div>

        <div class="switch-tabs">
            <div class="active">
                Авиабилеты
            </div>
            <div>
                Ж/Д билеты
            </div>
        </div>

        <div class="search-ticket">
            <form action="">
                <div class="search-input-item">
                    <input type="text" placeholder="Откуда">
                </div>

                <div class="search-input-item">
                    <input type="text" placeholder="Куда">
                </div>

                <div class="search-input-item">
                    <input type="date" placeholder="Туда">
                </div>

                <div class="search-input-item">
                    <input type="date" placeholder="Обратно">
                </div>

                <div class="submit">
                    <button>Найти</button>
                </div>

            </form>
        </div>
    </div>
</div>

<section class="flights">
    <div class="container-fluid">
        <div class="flights-header">
            <h2>Поплуярные авиарейсы</h2>
        </div>
        <div class="flights-popular row d-flex justify-content-between">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="flights-item">
                    <a href="#">
                        <span>Алматы → Талдыкорган</span>
                        <span class="price">от 3900тг</span>
                    </a>
                </div>
                <div class="flights-item">
                    <a href="#">
                        <span>Алматы → Нур-Султан</span>
                        <span class="price">от 6900тг</span>
                    </a>
                </div>
                <div class="flights-item">
                    <a href="#">
                        <span>Алматы → Талдыкорган</span>
                        <span class="price">от 3900тг</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="flights-item">
                    <a href="#">
                        <span>Алматы → Талдыкорган</span>
                        <span class="price">от 3900тг</span>
                    </a>
                </div>
                <div class="flights-item">
                    <a href="#">
                        <span>Алматы → Талдыкорган</span>
                        <span class="price">от 3900тг</span>
                    </a>
                </div>
                <div class="flights-item">
                    <a href="#">
                        <span>Алматы → Талдыкорган</span>
                        <span class="price">от 3900тг</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="flights-item">
                    <a href="#">
                        <span>Алматы → Талдыкорган</span>
                        <span class="price">от 3900тг</span>
                    </a>
                </div>
                <div class="flights-item">
                    <a href="#">
                        <span>Алматы → Талдыкорган</span>
                        <span class="price">от 3900тг</span>
                    </a>
                </div>
                <div class="flights-item">
                    <a href="#">
                        <span>Алматы → Талдыкорган</span>
                        <span class="price">от 3900тг</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news">
    <div class="container-fluid">
        <div class="news-header">
            <h2>Виды билетов</h2>
        </div>

        <div class="news-field row  d-flex justify-content-center">
            <div class="col-md-5">
                <p class="header-text">Авиабилеты</p>
                <p>У нас вы можете купить билеты на самолет дешево, быстро и легко! Мы предлагаем выгодные цены как
                    на внутренние, так и на международные рейсы.</p>
            </div>
            <div class="col-md-5">
                <p class="header-text">Ж/Д билеты</p>
                <p>
                    Благодаря удобному интерфейсу и быстрому поиску у нас можно купить дешевые билеты на поезд, без
                    очередей и временных затрат.
                </p>
            </div>
            <div class="col-md-5">
                <p class="header-text">Авиабилеты</p>
                <p>У нас вы можете купить билеты на самолет дешево, быстро и легко! Мы предлагаем выгодные цены как
                    на внутренние, так и на международные рейсы.</p>
            </div>
            <div class="col-md-5">
                <p class="header-text">Ж/Д билеты</p>
                <p>
                    Благодаря удобному интерфейсу и быстрому поиску у нас можно купить дешевые билеты на поезд, без
                    очередей и временных затрат.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="main-questions">
    <div class="container-fluid">


        <div class="row d-flex align-items-center">
            <div class="col-md-3">
                <img src="{{ url('img/main-page/main-questions.jpg') }}" alt="main question">
            </div>
            <div class="col-md-8">
                <p>Наш сайт производит поиск авиабилетов в нескольких системах бронирования, что позволяет находить
                    дешевые авиабилеты в реальном времени. Поиск настроен на автоматическую выдачу самых удобных и
                    дешевых авиабилетов. В результатах поиска выберите удобный для вас билет и проверьте, подходят
                    ли вам условия тарифа, далее жмите на зелёную кнопку с ценой. В новом окне заполните паспортные
                    и контактные данные, после чего на указанный почтовый ящик придет информация о вашей брони и
                    безопасная ссылка для оплаты заказа. Пройдя по ссылке, заполните реквизиты вашей платежной карты
                    и подтвердите покупку. Вам придет письмо со счетом оплаты и электронный авиабилет.</p>
            </div>
        </div>
    </div>
</section>

<section class="sub-info">
    <div class="container-fluid">
        <div class="row sub-info-cards d-flex justify-content-center">
            <div class="col-lg-4 d-flex justify-content-center">
                <img src="{{ url('img/banks/kaspi-dark.png') }}" alt="kaspi">
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <img src="{{ url('img/banks/mastercard-dark.png') }}" alt="mastercard">
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <img src="{{ url('img/banks/visa-dark.png')}} " alt="visacard">
            </div>
        </div>
    </div>
</section>

@endsection