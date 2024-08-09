<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>
    </head>
    <body class="flex flex-col items-center space-y-5 m-5 font-sans antialiased dark:bg-black dark:text-white/50">
    <form action="/" method="post">
    <x-ui.card>
            @csrf
            <label class="text-white">Введите <span class="text-[#7a57f1]">vin</span> номер автомобиля</label>
            <x-ui.input type="text" name="vin"/>
            <x-ui.button type="submit">Расшифровать</x-ui.button>
        <span class="absolute bottom-1 text-sm">Расшифровщик vin v1.0 by <span class="text-[#7a57f1]">COREMRAZ</span></span>
    </x-ui.card>
    </form>

    <x-ui.card>
        <div>
            <label class="text-red-500 absolute top-7 left-11 text-xs ">Завод</label>
            <div class="absolute top-12 left-11 blur-lg shadow-[0_0px_40px_0px_red] h-5 w-5"></div>
            <label class="text-fuchsia-500 text-xs absolute bottom-7 left-[23%]">Кузов</label>
            <div class="absolute top-12 left-[24%] blur-lg shadow-[0_0px_40px_2px_fuchsia] h-5 w-5"></div>
            <label class="text-xs absolute top-7 left-[29%]">Константа</label>
            <label class="text-blue-500 text-xs absolute bottom-7 left-[41%] text-center">ГЕО</label>
            <div class="absolute bottom-10 left-[41%] blur-lg shadow-[0_0px_40px_2px_blue] h-5 w-5"></div>
            <label class="text-green-500 text-xs absolute top-7 left-[45%]">Модель</label>
            <div class="absolute top-12 left-[45%] blur-lg shadow-[0_0px_40px_4px_green] h-5 w-5"></div>
            <label class="text-fuchsia-500 text-xs absolute bottom-7 left-[53%]">Кузов</label>
            <div class="absolute top-12 left-[50%] blur-lg shadow-[0_0px_40px_2px_fuchsia] h-5 w-5"></div>
            <label class="text-teal-500 text-xs absolute bottom-7 left-[64%]">Месяц</label>
            <div class="absolute top-12 left-[62%] blur-lg shadow-[0_0px_40px_6px_teal] h-5 w-5"></div>
            <label class="text-amber-500 text-xs absolute top-7 left-[61%]">Год</label>
            <div class="absolute top-12 left-[58%] blur-lg shadow-[0_0px_40px_3px_orange] h-5 w-5"></div>
            <label class="text-blue-50 text-xs absolute top-7 left-[72%]">Номер авто</label>
            <div class="absolute top-12 left-[74%] blur-lg shadow-[0_0px_40px_1px_white] h-5 w-14"></div>
            <span class="text-3xl relative"><span class="text-red-500 drop-shadow-2xl">{{$factory}}</span><span class="text-fuchsia-500">{{$body}}</span><span class="">{{$constant}}</span><span class="text-blue-500">{{$geo}}</span><span class="text-green-500">{{$model}}</span><span class="text-fuchsia-500">{{$body}}</span><span class="text-amber-500">{{$year}}</span><span class="text-teal-500">{{$month}}</span><span class="text-blue-50">{{$number}}</span></span>
        </div>

    </x-ui.card>
    </body>
</html>
