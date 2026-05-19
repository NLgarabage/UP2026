<style>
    .first{
        color: green;
    }
    .last{
        color: red;
    }
    .active{
        color:blue;
    }
    .zero{
        color:red;
    }
    .one{
        color:green;
    }
</style>

<!-- @ команда = < ? php> #без пробелов -->

<!-- <p>{{ $name }}</p>
<p>{{ $age }}</p>
<p>{{ $salary }}</p> -->
<?$howOld = 18;?>
@if ($howOld > 18)
    <p>проходите</p>
    @elseif ($howOld == 18)
    <p>ну ты ни туда ни сюда</p>
    @else
    <p>входа нет</p>
@endif
@unless ($howOld >= 18)
    <p>проходите</p>
@endunless

<input value="{{ $name }}">
<input value="{{ $age }}">
<input value="{{ $salary }}">


{{--  <div class="{{ $csskal }}"></div> --}}
<?$frscolor = "color:blue";?>
<p><a @style($frscolor)>red -- </a><a style="color: purple;">зелёный</a></p>
<a href="{{ $href }}">{{ $text }}</a>
<p>current timestamp: {{ date("d.m.y") }}</p>
<p>{{ $arr[0] }}</p>
<p>{{ $arr[1] }}</p>
<p>{{ $arr[2] }}</p>
<p>{{ sizeof($arr) }}</p>
<p>{{ $city ?? 'Москва' }}</p>
<p>{{ $country ?? 'Россия' }}</p>
<p>{{ $location['city'][0] }} {{ $location['country'][0] }}</p>
<p>{{ $year ?? date("y") }}-{{ $month ?? date("m") }}-{{ $day ?? date("d") }}</p>
<p>{!! $str !!}</p>
<?$taskArr = [1, 46, 45, 243, 54, 38, 15];?>
<?$taskArrIndxs = count($taskArr);  $sum = 0?>
@if ($taskArrIndxs > 0)
    @for ($i = 1; $i < $taskArrIndxs; $i++)
        <? $sum += $taskArr[$i]; ?>
    @endfor
    <p>Получилось {{ $sum }}</p>
@elseif ($taskArrIndxs == 0)
    <p></p>
@endif

<ul>
    @foreach ($taskArr as $elem)
        <li> {{  pow($elem, 2) }}</li>
        <li>{{ sqrt($elem) }}</li>
    @endforeach
</ul>


<?$taskArr2 = ["asdasd", "git", "has", "been", "blocked", "asdasrarfs"];?>
<ul>
    @foreach ($taskArr2 as $key => $elem)
        <?echo $key+1; echo $elem;?>
    @endforeach
</ul>

<ul>
    @foreach ($taskArr as $elem)
        @if ($elem % 2 == 0 || $elem == 0)
            <li>{{ $elem }}</li>
        @endif
    @endforeach
</ul>

<?$data = 5;?>


@if (is_array($data))
    <ul>
        @foreach ($data as $elem)
            <li>{{ $elem }}</li>
        @endforeach
    </ul>
@elseif (is_int($data))
<p>{{ $data }}</p>
@endif


<?$taskArr3 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];?>
<table border="1px">
    @foreach ($taskArr3 as $subArr)
        <tr>
            <td>
                @foreach ($subArr as $elem)
                    {{ $elem }}
                @endforeach
            </td>
        </tr>
    @endforeach
</table>

<?$employees = [
    [
        'name' => 'user1',
        'surname' => 'surname1',
        'salary' => 1000
    ],
    [
        'name' => 'user2',
        'surname' => 'surname2',
        'salary' => 2000
    ],
    [
        'name' => 'user3',
        'surname' => 'surname3',
        'salary' => 3000
    ]
];?>

<ul>
    @foreach ($employees as $employee)
        <li>{{ $employee['name'] }}, {{ $employee['surname'] }} {{ $employee['salary'] }}</li>
    @endforeach
</ul>

<table border="1px">
@foreach ($employees as $employee)
    <tr>
        <td>{{ $employee['name'] }} </td>
        <td>{{ $employee['surname'] }}</td>
        <td>{{ $employee['salary'] }}</td>
    </tr>
@endforeach
</table>

<? $users = ['denis', '7on', 'teparak', 'timur']; ?>
<ul>
@forelse ($users as $user)
    <p>{{ $user }}</p><br>
@empty
    <p>элементы отсутвуют в этом массиве</p>
@endforelse
</ul>

<ul>
    @foreach ($taskArr2 as $elem)
        <li>{{ $loop->index }} : {{ $elem }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($taskArr2 as $elem)
        <li>{{ $loop->iteration }} : {{ $elem }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($taskArr2 as $elem)
        @if ($loop->first)
            <li class="first">{{ $loop->iteration }} : {{ $elem }}</li>
        @elseif ($loop->last)
            <li class="last">{{ $loop->iteration }} : {{ $elem }}</li>
        @else
            <li>{{ $loop->iteration }} : {{ $elem }}</li>
        @endif
    @endforeach
</ul>


<!-- task33 -->

<? $taskArr4 = [3, 4, 6, 0, 8, 9, 0, 12, 454, 42, 34]; $remaining = count($taskArr4) - 3; ?>
@foreach ($taskArr4 as $elem)
    @if ($remaining < 1)
        <i>{{ $elem }}</i>
    @else
        <b>{{ $elem }}</b>
    @endif
    <?$remaining -= 1?>
@endforeach

<br>

<!-- task34 -->

@foreach ($taskArr4 as $elem)
    {{ $elem }}
    @if ($elem < 0)
        @break
    @endif
@endforeach

<br>

<!-- при наличии break: перед выполнением итерации проверяется условие связанное с break -->

<!-- task35 -->
@foreach ($taskArr4 as $elem)
    {{ $elem }}
    @continue($elem == 0)
@endforeach

<!-- task36 -->

@for ($i = 1; $i <= 10; $i++)
    <p>{{$i}}</p>
@endfor


<?php
echo "assaasasas";
?>

<!-- task38 -->
<?php
$links = [
    [
        'text' => 'text1',
        'href' => 'href1'
    ],
    [
        'text' => 'text2',
        'href' => 'href2'
    ],
    [
        'text' => 'text3',
        'href' => 'href3'
    ]
];
?>
@foreach ($links as $link)
    <a href="http://{{ $link['href'] }}">{{ $link['text'] }}</a>
@endforeach

<!-- task39 -->

<ul>
@foreach ($links as $link)
    <li><a href="http://{{ $link['href'] }}">{{ $link['text'] }}</a></li>
@endforeach
</ul>

<!-- task40 -->
<table border="1px">
@foreach ($employees as $employee)
    <tr>
        <td>{{ $employee['name'] }} </td>
        <td>{{ $employee['surname'] }}</td>
        <td>{{ $employee['salary'] }}</td>
    </tr>
@endforeach
</table>

<!-- task41 -->

<table border="1px">
@foreach ($employees as $employee)

    @if ($loop->first)
    <tr>
        <th>{{ $employee['name'] }} </td>
        <th>{{ $employee['surname'] }}</td>
        <th>{{ $employee['salary'] }}</td>
    </tr>
    @else
    <tr>
        <td>{{ $employee['name'] }} </td>
        <td>{{ $employee['surname'] }}</td>
        <td>{{ $employee['salary'] }}</td>
    </tr>
    @endif
@endforeach
</table>

<!-- task42 -->

<table border="1px">
<tr>
    <th>Номер</th>
    <th>Имя </th>
    <th>Фамилия</th>
    <th>Зарплата</th>
</tr>
@foreach ($employees as $employee)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $employee['name'] }} </td>
        <td>{{ $employee['surname'] }}</td>
        <td>{{ $employee['salary'] }}</td>
    </tr>
@endforeach
</table>

<!-- task43 -->

<table border="1px">
<tr>
    <th>Номер</th>
    <th>Имя </th>
    <th>Фамилия</th>
    <th>Зарплата</th>
</tr>
@foreach ($employees as $employee)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $employee['name'] }} </td>
        <td>{{ $employee['surname'] }}</td>
        @if ($employee['salary'] > 2000)<td>{{ $employee['salary'] }}</td>@endif
    </tr>
@endforeach
</table>

<!-- task44 -->

<?php
$users = [
    [
        'name' => 'user1',
        'surname' => 'surname1',
        'banned' => true
    ],
    [
        'name' => 'user2',
        'surname' => 'surname2',
        'banned' => false
    ],
    [
        'name' => 'user3',
        'surname' => 'surname3',
        'banned' => true
    ],
    [
        'name' => 'user4',
        'surname' => 'surname4',
        'banned' => false
    ],
    [
        'name' => 'user5',
        'surname' => 'surname5',
        'banned' => false
    ],
];
?>
<!-- tsak44/task45  -->
<?$color = 'green'; ?>
<table border="1px">
@foreach ($users as $user)
    @if ($user['banned'] == true) <? $class = 'zero' ?> @else <? $class = 'one' ?> @endif 
    <tr>
        <td><p class="{{ $class }}"> {{ $user['name'] }} </p></td>
        <td><p class="{{ $class }}">{{ $user['surname'] }}</p></td>
        @if ($user['banned'] == true)<td><p class="{{ $class }}"> Забанен </p></td> @else <td><p class="{{ $class }}">Активен</p></td>@endif 
    </tr>
@endforeach
</table>

<!-- task46 -->

@foreach ($taskArr2 as $arr)
    <input type="text" value="{{$arr}}">
    <br>
@endforeach

<!-- task47 -->
<select name="" id="">
@foreach ($taskArr2 as $arr)
    <option>{{ $arr }}</option>
@endforeach
</select>

<!-- task48 -->
<? $days = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31]; ?>
<? $currentDay = date('d'); ?>
<ul>
@foreach ($days as $day)
    @if ($day == $currentDay) <li class="active">{{ $day }}</li> @else<li>{{ $day }}</li> @endif
@endforeach
</ul>