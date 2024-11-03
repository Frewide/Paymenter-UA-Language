<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Мовні ресурси для валідації
    |--------------------------------------------------------------------------
    |
    | Наступні мовні рядки містять стандартні повідомлення про помилки, які використовуються
    | класом валідатора. Деякі з цих правил мають кілька версій, таких
    | як правила розміру. Не соромтеся налаштовувати кожне з цих повідомлень тут.
    |
    */

    'accepted' => 'Поле :attribute має бути прийнято.',
    'active_url' => 'Поле :attribute не є допустимим URL-адресою.',
    'after' => 'Поле :attribute має бути датою після :date.',
    'after_or_equal' => 'Поле :attribute має бути датою після або рівною :date.',
    'alpha' => 'Поле :attribute може містити лише літери.',
    'alpha_dash' => 'Поле :attribute може містити лише літери, цифри, дефіси та підкреслення.',
    'alpha_num' => 'Поле :attribute може містити лише літери та цифри.',
    'array' => 'Поле :attribute має бути масивом.',
    'before' => 'Поле :attribute має бути датою до :date.',
    'before_or_equal' => 'Поле :attribute має бути датою до або рівною :date.',
    'between' => [
        'numeric' => 'Поле :attribute має бути між :min і :max.',
        'file' => 'Поле :attribute має бути між :min і :max кілобайтами.',
        'string' => 'Поле :attribute має бути між :min і :max символами.',
        'array' => 'Поле :attribute має містити від :min до :max елементів.',
    ],
    'boolean' => 'Поле :attribute має бути істинним або хибним.',
    'confirmed' => 'Підтвердження поля :attribute не збігається.',
    'date' => 'Поле :attribute не є допустимою датою.',
    'date_equals' => 'Поле :attribute має бути датою, рівною :date.',
    'date_format' => 'Поле :attribute не відповідає формату :format.',
    'different' => 'Поля :attribute і :other мають бути різними.',
    'digits' => 'Поле :attribute має бути :digits цифрами.',
    'digits_between' => 'Поле :attribute має бути між :min і :max цифрами.',
    'dimensions' => 'Поле :attribute має недопустимі розміри зображення.',
    'distinct' => 'Поле :attribute має повторюване значення.',
    'email' => 'Поле :attribute має бути дійсною електронною адресою.',
    'ends_with' => 'Поле :attribute має закінчуватися одним із наступних значень: :values.',
    'exists' => 'Вибране значення для :attribute недійсне.',
    'file' => 'Поле :attribute має бути файлом.',
    'filled' => 'Поле :attribute обов’язкове для заповнення.',
    'gt' => [
        'numeric' => 'Поле :attribute має бути більшим за :value.',
        'file' => 'Поле :attribute має бути більшим за :value кілобайт.',
        'string' => 'Поле :attribute має бути більшим за :value символів.',
        'array' => 'Поле :attribute має містити більше :value елементів.',
    ],
    'gte' => [
        'numeric' => 'Поле :attribute має бути більшим або рівним :value.',
        'file' => 'Поле :attribute має бути більшим або рівним :value кілобайт.',
        'string' => 'Поле :attribute має бути більшим або рівним :value символів.',
        'array' => 'Поле :attribute має містити :value елементів або більше.',
    ],
    'image' => 'Поле :attribute має бути зображенням.',
    'in' => 'Вибране значення для :attribute недійсне.',
    'in_array' => 'Поле :attribute не існує в :other.',
    'integer' => 'Поле :attribute має бути цілим числом.',
    'ip' => 'Поле :attribute має бути дійсною IP-адресою.',
    'ipv4' => 'Поле :attribute має бути дійсною IPv4-адресою.',
    'ipv6' => 'Поле :attribute має бути дійсною IPv6-адресою.',
    'json' => 'Поле :attribute має бути дійсною JSON-строкою.',
    'lt' => [
        'numeric' => 'Поле :attribute має бути меншим за :value.',
        'file' => 'Поле :attribute має бути меншим за :value кілобайт.',
        'string' => 'Поле :attribute має бути меншим за :value символів.',
        'array' => 'Поле :attribute має містити менше :value елементів.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute має бути меншим або рівним :value.',
        'file' => 'Поле :attribute має бути меншим або рівним :value кілобайт.',
        'string' => 'Поле :attribute має бути меншим або рівним :value символів.',
        'array' => 'Поле :attribute не має містити більше :value елементів.',
    ],
    'max' => [
        'numeric' => 'Поле :attribute не може бути більшим за :max.',
        'file' => 'Поле :attribute не може бути більшим за :max кілобайт.',
        'string' => 'Поле :attribute не може бути більшим за :max символів.',
        'array' => 'Поле :attribute не може містити більше :max елементів.',
    ],
    'mimes' => 'Поле :attribute має бути файлом типу: :values.',
    'mimetypes' => 'Поле :attribute має бути файлом типу: :values.',
    'min' => [
        'numeric' => 'Поле :attribute має бути не менше :min.',
        'file' => 'Поле :attribute має бути не менше :min кілобайт.',
        'string' => 'Поле :attribute має бути не менше :min символів.',
        'array' => 'Поле :attribute має містити не менше :min елементів.',
    ],
    'multiple_of' => 'Поле :attribute має бути кратним :value.',
    'not_in' => 'Вибране значення для :attribute недійсне.',
    'not_regex' => 'Формат поля :attribute недійсний.',
    'numeric' => 'Поле :attribute має бути числом.',
    'password' => 'Невірний пароль.',
    'present' => 'Поле :attribute має бути присутнім.',
    'regex' => 'Формат поля :attribute недійсний.',
    'required' => 'Поле :attribute обов’язкове для заповнення.',
    'required_if' => 'Поле :attribute обов’язкове для заповнення, коли :other дорівнює :value.',
    'required_unless' => 'Поле :attribute обов’язкове для заповнення, якщо :other не входить в :values.',
    'required_with' => 'Поле :attribute обов’язкове для заповнення, коли :values присутні.',
    'required_with_all' => 'Поле :attribute обов’язкове для заповнення, коли :values присутні.',
    'required_without' => 'Поле :attribute обов’язкове для заповнення, коли :values відсутні.',
    'required_without_all' => 'Поле :attribute обов’язкове для заповнення, коли жодне з :values не присутнє.',
    'same' => 'Поле :attribute і :other мають збігатися.',
    'size' => [
        'numeric' => 'Поле :attribute має бути рівним :size.',
        'file' => 'Поле :attribute має бути рівним :size кілобайт.',
        'string' => 'Поле :attribute має бути рівним :size символів.',
        'array' => 'Поле :attribute має містити :size елементів.',
    ],
    'starts_with' => 'Поле :attribute має починатися з одного з наступних значень: :values.',
    'string' => 'Поле :attribute має бути рядком.',
    'timezone' => 'Поле :attribute має бути дійсним часовим поясом.',
    'unique' => 'Таке значення поля :attribute вже існує.',
    'uploaded' => 'Завантаження поля :attribute не вдалося.',
    'url' => 'Формат поля :attribute недійсний.',
    'uuid' => 'Поле :attribute має бути дійсним UUID.',

    /*
    |--------------------------------------------------------------------------
    | Спеціальні атрибути
    |--------------------------------------------------------------------------
    |
    | Наступні мовні рядки використовуються для заміни атрибутів у повідомленнях
    | про помилки. Зручно використовувати замість "email", "password", тощо.
    |
    */

    'attributes' => [
        'name' => 'Ім’я',
        'email' => 'Електронна адреса',
        'password' => 'Пароль',
        'password_confirmation' => 'Підтвердження пароля',
        'age' => 'Вік',
        'title' => 'Заголовок',
        'body' => 'Текст',
        'message' => 'Повідомлення',
        'file' => 'Файл',
        'photo' => 'Фото',
    ],
];
