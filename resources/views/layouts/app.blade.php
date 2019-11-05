<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" type="image/png">

    <!-- Bundle Styles -->
    <link rel="stylesheet" href="css/bundle.css">

    <link rel="stylesheet" href="css/enjoyhint.css">

    <!-- App styles -->
    <link rel="stylesheet" href="css/app.min.css">
</head>
<body class="purchase-banner-active">

    <!-- page loading -->
        <div class="page-loading"></div>
        <!-- ./ page loading -->



        <!-- add friends modal -->
        <div class="modal fade" id="addFriends" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                        <i data-feather="user-plus" class="mr-2"></i> Add Friends
                    </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="ti-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">Send invitations to friends.</div>
                        <form>
                            <div class="form-group">
                                <label for="emails" class="col-form-label">Email addresses</label>
                                <input type="text" class="form-control" id="emails">
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-form-label">Invitation message</label>
                                <textarea class="form-control" id="message"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ add friends modal -->

        <!-- new group modal -->
        <div class="modal fade" id="newGroup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                        <i data-feather="users" class="mr-2"></i> New Group
                    </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="ti-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="group_name" class="col-form-label">Group name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="group_name">
                                    <div class="input-group-append">
                                        <button class="btn btn-light" data-toggle="tooltip" title="Emoji" type="button">
                                            <i data-feather="smile"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-2">The group members</p>
                            <div class="form-group">
                                <div class="avatar-group">
                                    <figure class="avatar" data-toggle="tooltip" title="Tobit Spraging">
                                        <span class="avatar-title bg-success rounded-circle">T</span>
                                    </figure>
                                    <figure class="avatar" data-toggle="tooltip" title="Cloe Jeayes">
                                        <img src="img/women_avatar4.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                    <figure class="avatar" data-toggle="tooltip" title="Marlee Perazzo">
                                        <span class="avatar-title bg-warning rounded-circle">M</span>
                                    </figure>
                                    <figure class="avatar" data-toggle="tooltip" title="Stafford Pioch">
                                        <img src="img/man_avatar1.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                    <figure class="avatar" data-toggle="tooltip" title="Bethena Langsdon">
                                        <span class="avatar-title bg-info rounded-circle">B</span>
                                    </figure>
                                    <a href="#" title="Add friends">
                                        <figure class="avatar">
                                            <span class="avatar-title bg-primary rounded-circle">
                                            <i data-feather="plus"></i>
                                        </span>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-form-label">Description</label>
                                <textarea class="form-control" id="description"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Create Group</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ new group modal -->

        <!-- setting modal -->
        <div class="modal fade" id="settingModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                        <i data-feather="settings" class="mr-2"></i> Настройки
                    </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="ti-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true">Аккаунт</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#notification" role="tab" aria-controls="notification" aria-selected="false">Уведомления</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Безопасность</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="account" role="tabpanel">
                                <div class="form-item custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                    <label class="custom-control-label" for="customSwitch4">Показать контактные данные</label>
                                </div>
                                <div class="form-item custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" checked id="customSwitch5">
                                    <label class="custom-control-label" for="customSwitch5">Двухфакторная аутотентификация
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane" id="notification" role="tabpanel">
                                <div class="form-item custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" checked id="customSwitch6">
                                    <label class="custom-control-label" for="customSwitch6">Включить push-уведомления</label>
                                </div>
                                <div class="form-item custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch7">
                                    <label class="custom-control-label" for="customSwitch7">Отправлять уведомления по sms
                                    </label>
                                </div>
                                <div class="form-item custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch8">
                                    <label class="custom-control-label" for="customSwitch8">Отправлять уведомления по электронной почте</label>
                                </div>
                            </div>
                            <div class="tab-pane" id="contact" role="tabpanel">
                                <div class="form-item custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch9">
                                    <label class="custom-control-label" for="customSwitch9">Ежемесячно напоминать о смене пароля
                                    </label>
                                </div>
                                <div class="form-item custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" checked id="customSwitch10">
                                    <label class="custom-control-label" for="customSwitch10">Предупреждать о входе с другого устройства</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ setting modal -->

        <!-- edit profile modal -->
        <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                        <i data-feather="edit-2" class="mr-2"></i> Редактировать профиль
                    </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="ti-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Контакнтые данные</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">Адрес</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#social-links" role="tab" aria-controls="social-links" aria-selected="false">Сменить пароль</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="personal" role="tabpanel">
                                <form>
                                    <div class="form-group">
                                        <label class="col-form-label">Фото профиля</label>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <figure class="avatar mr-3 item-rtl">
                                                    <img src="img/no-avatar.png" class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" value="Загрузить">
                                                <label class="custom-file-label" for="customFile">Загрузить фотографию</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fullname" class="col-form-label">Имя</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="{{{Auth::user()->name}}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="fullname" class="col-form-label">Фамилия</label>
                                        <input type="text" class="form-control" id="second_name" name="second_name" placeholder="{{{Auth::user()->second_name}}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="fullname" class="col-form-label">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="{{{Auth::user()->email}}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="fullname" class="col-form-label">Номер телефона</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="{{{Auth::user()->phone}}}">
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="about" role="tabpanel">
                                <form>
                                    <div class="form-group">
                                        <label for="fullname" class="col-form-label">Город</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="{{{Auth::user()->city}}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="fullname" class="col-form-label">Улица</label>
                                        <input type="text" class="form-control" id="street" name="street" placeholder="{{{Auth::user()->street}}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="fullname" class="col-form-label">Номер дома</label>
                                        <input type="text" class="form-control" id="house" name="house" placeholder="{{{Auth::user()->house}}}">
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="social-links" role="tabpanel">
                                <form>
                                    <div class="form-group">
                                        <label for="old_password" class="col-form-label">Старый пароль</label>
                                        <input type="text" class="form-control" id="old_password" name="old_password">
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password" class="col-form-label">Новый пароль</label>
                                        <input type="text" class="form-control" id="new_password" name="new_password">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ edit profile modal -->

        <!-- layout -->
        <div class="layout">

            <!-- navigation -->
            <nav class="navigation">
                <div class="nav-group">
                    <ul>
                        <li class="logo">
                            <a href="#">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612px" height="612px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                                    <g>
                                        <g id="_x32__26_">
                                            <g>
                                                <path d="M401.625,325.125h-191.25c-10.557,0-19.125,8.568-19.125,19.125s8.568,19.125,19.125,19.125h191.25
                                        c10.557,0,19.125-8.568,19.125-19.125S412.182,325.125,401.625,325.125z M439.875,210.375h-267.75
                                        c-10.557,0-19.125,8.568-19.125,19.125s8.568,19.125,19.125,19.125h267.75c10.557,0,19.125-8.568,19.125-19.125
                                        S450.432,210.375,439.875,210.375z M306,0C137.012,0,0,119.875,0,267.75c0,84.514,44.848,159.751,114.75,208.826V612
                                        l134.047-81.339c18.552,3.061,37.638,4.839,57.203,4.839c169.008,0,306-119.875,306-267.75C612,119.875,475.008,0,306,0z
                                        M306,497.25c-22.338,0-43.911-2.601-64.643-7.019l-90.041,54.123l1.205-88.701C83.5,414.133,38.25,345.513,38.25,267.75
                                        c0-126.741,119.875-229.5,267.75-229.5c147.875,0,267.75,102.759,267.75,229.5S453.875,497.25,306,497.25z" />
                                            </g>
                                        </g>
                                    </g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="active" data-navigation-target="chats" href="#" data-toggle="tooltip" title="Обращения" data-placement="right">
                                <span class="badge badge-warning"></span>
                                <i data-feather="message-circle"></i>
                            </a>
                        </li>
                        <li>
                            <a data-navigation-target="friends" href="#" data-toggle="tooltip" title="Список должностных лиц" data-placement="right">
                                <span class="badge badge-danger"></span>
                                <i data-feather="user"></i>
                            </a>
                        </li>
                        <li>
                            <a data-navigation-target="favorites" data-toggle="tooltip" title="Избранное" data-placement="right" href="#">
                                <i data-feather="star"></i>
                            </a>
                        </li>
                        <li class="brackets">
                            <a data-navigation-target="archived" href="#" data-toggle="tooltip" title="Архив обращений" data-placement="right">
                                <i data-feather="archive"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dark-light-switcher" data-toggle="tooltip" title="Ночной режим" data-placement="right">
                                <i data-feather="moon"></i>
                            </a>
                        </li>
                        <li data-toggle="tooltip" title="{{{Auth::user()->name}}} {{{Auth::user()->second_name}}}" data-placement="right">
                            <a href="/login" data-toggle="dropdown">
                                <figure class="avatar">
                                    <img src="img/no-avatar.png" class="rounded-circle" alt="image">
                                </figure>
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#editProfileModal">Контактные данные</a>
                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#settingModal">Настройки аккаунта</a>
                                <div class="dropdown-divider"></div>
                                <a href="/logout" class="dropdown-item text-danger">Выйти</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- ./ navigation -->

            <!-- content -->
            <div class="content">

                <!-- sidebar group -->
                <div class="sidebar-group">

                    <!-- Chats sidebar -->
                    <div id="chats" class="sidebar active">
                        <header>
                            <span>Обращения</span>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="btn btn-outline-light" data-toggle="tooltip" title="Новое обращение" href="#" data-navigation-target="friends">
                                        <i data-feather="plus-circle"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item d-xl-none d-inline">
                                    <a href="#" class="btn btn-outline-light text-danger sidebar-close">
                                        <i data-feather="x"></i>
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <form>
                            <input type="text" class="form-control" placeholder="Поиск по сообщениям">
                        </form>
                        <div class="sidebar-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <figure class="avatar avatar-state-success">
                                        <img src="img/man_avatar3.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                    <div class="users-list-body">
                                        <div>
                                            <h5 class="text-primary">Иванов Иван</h5>
                                            <p>Добрый день! Уточните, пожалуйста, фамилию имя и отчество ребенка и диагноз по МКБ. По какой причине не можете получить ответ?</p>
                                        </div>
                                        <div class="users-list-action">
                                            <div class="new-message-count">1</div>
                                            <small class="text-primary">14:35</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <figure class="avatar avatar-state-warning">
                                        <img src="img/man_avatar1.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                    <div class="users-list-body">
                                        <div>
                                            <h5 class="text-primary">Станислав Леонов</h5>
                                            <p>
                                                <i class="fa fa-camera mr-1"></i> Фотография
                                            </p>
                                        </div>
                                        <div class="users-list-action">
                                            <div class="new-message-count">3</div>
                                            <small class="text-primary">Вчера</small>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- ./ Chats sidebar -->

                    <!-- Friends sidebar -->
                    <div id="friends" class="sidebar">
                        <header>
                            <span>Список должностных лиц</span>
                            <ul class="list-inline">
                                <li class="list-inline-item d-xl-none d-inline">
                                    <a href="#" class="btn btn-outline-light text-danger sidebar-close">
                                        <i data-feather="x"></i>
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <form>
                            <input type="text" class="form-control" placeholder="Поиск по ФИО должностного лица или должности">
                        </form>
                        <div class="sidebar-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" data-navigation-target="chats">
                                    <div>
                                        <figure class="avatar">
                                            <img src="img/man_avatar3.jpg" class="rounded-circle" alt="image">
                                        </figure>
                                    </div>
                                    <div class="users-list-body">
                                        <div>
                                            <h5>Иванов Иван</h5>
                                            <p>Депутат избирательного участка №3</p>
                                        </div>
                                        <div class="users-list-action">
                                            <div class="action-toggle">
                                                <div class="dropdown">
                                                    <a data-toggle="dropdown" href="#">
                                                        <i data-feather="more-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Создать обращение</a>
                                                        <a href="#" data-navigation-target="contact-information" class="dropdown-item">Личный профиль депутата</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item" data-navigation-target="chats">
                                    <div>
                                        <figure class="avatar">
                                            <img src="img/man_avatar1.jpg" class="rounded-circle" alt="image">
                                        </figure>
                                    </div>
                                    <div class="users-list-body">
                                        <div>
                                            <h5>Станислав Леонов</h5>
                                            <p>Депутат избирательного участка №3</p>
                                        </div>
                                        <div class="users-list-action">
                                            <div class="action-toggle">
                                                <div class="dropdown">
                                                    <a data-toggle="dropdown" href="#">
                                                        <i data-feather="more-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Создать обращение</a>
                                                        <a href="#" data-navigation-target="contact-information" class="dropdown-item">Личный профиль депутата</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ./ Friends sidebar -->

                    <!-- Favorites sidebar -->
                    <div id="favorites" class="sidebar">
                        <header>
                            <span>Избранное</span>
                            <ul class="list-inline">
                                <li class="list-inline-item d-xl-none d-inline">
                                    <a href="#" class="btn btn-outline-light text-danger sidebar-close">
                                        <i data-feather="x"></i>
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <form>
                            <input type="text" class="form-control" placeholder="Поиск в избранном">
                        </form>
                        <div class="sidebar-body">
                            <ul class="list-group list-group-flush users-list">
                                <li class="list-group-item">
                                    <div class="users-list-body">
                                        <div>
                                            <h5>Иван Иванов</h5>
                                            <p>Добрый день! Уточните, пожалуйста, фамилию имя и отчество ребенка и диагноз по МКБ. По какой причине не можете получить ответ?</p>
                                        </div>
                                        <div class="users-list-action">
                                            <div class="action-toggle">
                                                <div class="dropdown">
                                                    <a data-toggle="dropdown" href="#">
                                                        <i data-feather="more-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Открыть</a>
                                                        <a href="#" class="dropdown-item">Убрать из избранного</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ./ Stars sidebar -->

                    <!-- Archived sidebar -->
                    <div id="archived" class="sidebar">
                        <header>
                            <span>Архив обращений</span>
                            <ul class="list-inline">
                                <li class="list-inline-item d-xl-none d-inline">
                                    <a href="#" class="btn btn-outline-light text-danger sidebar-close">
                                        <i data-feather="x"></i>
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <form>
                            <input type="text" class="form-control" placeholder="Search archived">
                        </form>
                        <div class="sidebar-body">
                            <ul class="list-group list-group-flush users-list">
                                <li class="list-group-item">
                                    <figure class="avatar">
                                        <span class="avatar-title bg-danger rounded-circle">M</span>
                                    </figure>
                                    <div class="users-list-body">
                                        <div>
                                            <h5>Михаил Морозов</h5>
                                            <p>Спасибо за обращение, надеюсь, у вас все получится!</p>
                                        </div>
                                        <div class="users-list-action">
                                            <div class="action-toggle">
                                                <div class="dropdown">
                                                    <a data-toggle="dropdown" href="#">
                                                        <i data-feather="more-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Открыть</a>
                                                        <a href="#" class="dropdown-item">Восстановить</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item text-danger">Удалить</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ./ Archived sidebar -->

                </div>
                <!-- ./ sidebar group -->

                <!-- chat -->
                <div class="chat">
                    <div class="chat-header">
                        <div class="chat-header-user">
                            <figure class="avatar">
                                <img src="img/man_avatar3.jpg" class="rounded-circle" alt="image">
                            </figure>
                            <div>
                                <h5>Иванов Иван</h5>
                                <small class="text-default">
                                <i>Депутат от избирательного участка №3</i>
                            </small>
                            </div>
                        </div>
                        <div class="chat-header-action">
                            <ul class="list-inline">
                                <li class="list-inline-item d-xl-none d-inline">
                                    <a href="#" class="btn btn-outline-light mobile-navigation-button">
                                        <i data-feather="menu"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item" data-toggle="tooltip" title="Аудиовызов">
                                    <a href="#" class="btn btn-outline-light text-success" data-toggle="modal" data-target="#call">
                                        <i data-feather="phone"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item" data-toggle="tooltip" title="Видеозвонок">
                                    <a href="#" class="btn btn-outline-light text-warning" data-toggle="modal" data-target="#videoCall">
                                        <i data-feather="video"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-outline-light" data-toggle="dropdown">
                                        <i data-feather="more-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" data-navigation-target="contact-information" class="dropdown-item">Профиль депутата</a>
                                        <a href="#" class="dropdown-item">Рейтинг</a>
                                        <a href="#" class="dropdown-item">Пожаловаться</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-danger">Закрыть обращение</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-body">
                        <!-- .no-message -->
                        <!--
                    <div class="no-message-container">
                        <div class="row mb-5">
                            <div class="col-md-4 offset-4">
                                <img src="./dist/media/svg/undraw_empty_xct9.svg" class="img-fluid" alt="image">
                            </div>
                        </div>
                        <p class="lead">Select a chat to read messages</p>
                    </div>
                    -->
                        <div class="messages">
                            <div class="message-item outgoing-message">
                                <div class="message-avatar">
                                    <figure class="avatar">
                                        <img src="img/no-avatar.png" class="rounded-circle" alt="image">
                                    </figure>
                                    <div>
                                        <h5>{{{Auth::user()->name}}} {{{Auth::user()->second_name}}}</h5>
                                        <div class="time">14:20<i class="ti-double-check text-info"></i></div>
                                    </div>
                                </div>
                                <div class="message-content">
                                    Добрый день! Хотел бы узнать, как получить льготу по инвалидности для ребенка 7 лет. Не могу получить ответ от департамента здравоохранения 😞
                                </div>
                            </div>
                            <div class="message-item">
                                <div class="message-avatar">
                                    <figure class="avatar">
                                        <img src="img/man_avatar3.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                    <div>
                                        <h5>Иванов Иван</h5>
                                        <div class="time">14:35</div>
                                    </div>
                                </div>
                                <div class="message-content">
                                    Добрый день! Уточните, пожалуйста, фамилию имя и отчество ребенка и диагноз по МКБ. По какой причине не можете получить ответ?
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="chat-footer">
                        <form>
                            <div>
                                <button class="btn btn-light mr-3" data-toggle="tooltip" title="Эмоджи" type="button">
                                    <i data-feather="smile"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control" placeholder="Отправить сообщение.">
                            <div class="form-buttons">
                                <button class="btn btn-light" data-toggle="tooltip" title="Прикрепить вложение" type="button">
                                    <i data-feather="paperclip"></i>
                                </button>
                                <button class="btn btn-light d-block" data-toggle="tooltip" title="Записать аудио-обращение" type="button">
                                    <i data-feather="mic"></i>
                                </button>
                                <button class="btn btn-primary" type="submit" data-toggle="tooltip" title="Отправить сообщение">
                                    <i data-feather="send"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ./ chat -->

                <div class="sidebar-group">
                    <div id="contact-information" class="sidebar">
                        <header>
                            <span><small>Информация</small></span>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-outline-light text-danger sidebar-close">
                                        <i data-feather="x"></i>
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="sidebar-body">
                            <div class="pl-4 pr-4">
                                <div class="text-center">
                                    <figure class="avatar avatar-xl mb-4">
                                        <img src="img/man_avatar3.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                    <h5 class="mb-1">Иванов Иван</h5>
                                    <small class="text-muted font-italic">Депутат от избирательного участка №3</small>

                                    <ul class="nav nav-tabs justify-content-center mt-5" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Краткая информация</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Вложения</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <p class="text-muted">Иванов Иван Иванович — российский политик. Депутат городской думы г. Муравленко с 21 октября 2010. 21 октября 2010 наделён полномочиями депутата Муравленковской городской думой. 12 сентября 2013, после победы на выборах, вступил в должность как депутат от 3-го избирательного округа.
                                        </p>
                                        <div class="mt-4 mb-4">
                                            <h6>Телефон</h6>
                                            <p class="text-muted">+7 (34938) 21-9-54</p>
                                        </div>
                                        <div class="mt-4 mb-4">
                                            <h6>Город</h6>
                                            <p class="text-muted">Муравленко, ЯНАО</p>
                                        </div>
                                        <div class="mt-4 mb-4">
                                            <h6>Личная страница</h6>
                                            <p>
                                                <a href="#">ivanov.deputat-online.ru</a>
                                            </p>
                                        </div>
                                        <div class="mt-4 mb-4">
                                            <h6 class="mb-3">Социальные сети</h6>
                                            <ul class="list-inline social-links">
                                                <li class="list-inline-item">
                                                    <a href="#" class="btn btn-sm btn-floating btn-facebook" data-toggle="tooltip" title="Facebook">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="btn btn-sm btn-floating btn-twitter" data-toggle="tooltip" title="Twitter">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="btn btn-sm btn-floating btn-whatsapp" data-toggle="tooltip" title="Whatsapp">
                                                        <i class="fa fa-whatsapp"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="btn btn-sm btn-floating btn-instagram" data-toggle="tooltip" title="Instagram">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <h6 class="mb-3 d-flex align-items-center justify-content-between">
                                        <span>Файлы беседы</span>
                                        <a href="#" class="btn btn-link small">
                                            <i data-feather="upload" class="mr-2"></i> Загруженное
                                        </a>
                                    </h6>
                                        <div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item pl-0 pr-0 d-flex align-items-center">
                                                    <a href="#">
                                                        <i class="fa fa-file-pdf-o text-danger mr-2"></i> ипр_нагиев.pdf
                                                    </a>
                                                </li>
                                                <li class="list-group-item pl-0 pr-0 d-flex align-items-center">
                                                    <a href="#">
                                                        <i class="fa fa-image text-muted mr-2"></i> скан_паспорта.png
                                                    </a>
                                                </li>
                                                <li class="list-group-item pl-0 pr-0 d-flex align-items-center">
                                                    <a href="#">
                                                        <i class="fa fa-file-excel-o text-success mr-2"></i> excel_report_file2019.xlsx
                                                    </a>
                                                </li>
                                                <li class="list-group-item pl-0 pr-0 d-flex align-items-center">
                                                    <a href="#">
                                                        <i class="fa fa-file-text-o text-warning mr-2"></i> сведения_из_выписки.txt
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ./ content -->

        </div>
        <!-- ./ layout -->
   <script>
       var userName = "{{{Auth::user()->name}}} {{{Auth::user()->second_name}}}";
   </script>
   <!-- Bundle -->
   <script src="js/bundle.js"></script>

   <script src="js/enjoyhint.min.js"></script>

   <!-- App scripts -->
   <script src="js/app.min.js"></script>

   <!-- Examples -->
   <script src="js/examples.js"></script>

</body>
</html>
